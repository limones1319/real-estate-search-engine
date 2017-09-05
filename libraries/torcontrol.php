<?php

/*
 * This file is part of the TorControl package.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

//namespace TorControl;

/**
 * TorControl
 *
 * Control a Tor server using the socket connection.
 * The spec of the control protocol: https://gitweb.torproject.org/torspec.git/blob_plain/HEAD:/control-spec.txt
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class TorControl
{

    const AUTH_METHOD_NOT_SET = -1;
    const AUTH_METHOD_NULL = 0;
    const AUTH_METHOD_HASHEDPASSWORD = 1;
    const AUTH_METHOD_COOKIE = 2;

    /**
     * Connected
     *
     * @var boolean
     */
    protected $connected = false;

    /**
     * Default options
     *
     * @var array
     */
    protected static $defautOptions = array(
        'hostname' => '127.0.0.1',
        'port' => 9051,
        'timeout' => -1,
        'authmethod' => self::AUTH_METHOD_HASHEDPASSWORD
    );

    /**
     * Options
     *
     * @var array
     */
    protected $options;

    /**
     * Socket to the TOR server
     *
     * @var resource
     */
    protected $socket;

    /**
     * Check if connected
     *
     * @throws Exception\IOError
     */
    private function checkConnected()
    {
        if (!$this->connected || !$this->socket) {
            return 'Not connected';
        }
    }

    /**
     * Detects auth method using the PROTOCOLINFO command
     *
     * @throws Exception\ProtocolError
     */
    private function detectAuthMethod()
    {
        $data = $this->executeCommand('PROTOCOLINFO');

        foreach ($data as $info) {
            if ('AUTH METHODS=NULL' === $info['message']) {
                $this->options['authmethod'] = static::AUTH_METHOD_NULL;

                return;
            }

            if ('AUTH METHODS=HASHEDPASSWORD' === $info['message']) {
                $this->options['authmethod'] = static::AUTH_METHOD_HASHEDPASSWORD;

                return;
            }

            if (preg_match('/^AUTH METHODS=(.*) COOKIEFILE="(.*)"/', $info['message'], $matches) === 1) {
                $this->options['authmethod'] = static::AUTH_METHOD_COOKIE;
                $this->options['cookiefile'] = $matches[2];

                return;
            }
        }

        return 'Auth method not supported';
    }

    /**
     * Creates a new instance of the controller
     *
     * @param array $options Configuration settings
     * All settings are optional.
     * - hostname: server to join (default: 127.0.0.1)
     * - port: port to try (default: 9051)
     * - authmethod: connection method (if not set will try to autodetect)
     *   Allowed values:
     *   - TorControl::AUTH_METHOD_NULL: no security
     *   - TorControl::AUTH_METHOD_HASHEDPASSWORD: password
     *   - TorControl::AUTH_METHOD_COOKIE: cookie file
     * - password: the password (mandatory if AUTH_METHOD_HASHEDPASSWORD is used)
     * - cookiefile: the file (if TorControl::AUTH_METHOD_COOKIE is used, if not set will autodetect)
     * - timeout: connection timeout (default: default_socket_timeout's PHP setting)
     */
    public function __construct(array $options = array())
    {
        $this->options = array_merge(static::$defautOptions, $options);
        if ($this->options['timeout'] === -1) {
            $this->options['timeout'] = ini_get('default_socket_timeout');
        }
    }

    /**
     * Destructs the instance
     */
    public function __destruct()
    {
        $this->quit();
    }

    /**
     * Gets the controller connection status
     *
     * @return boolean
     */
    public function isConnected()
    {
        return $this->connected;
    }

    /**
     * Gets an option
     *
     * @param  string $key
     * @return mixed
     */
    public function getOption($key)
    {
        return isset($this->options[$key]) ? $this->options[$key] : false;
    }

    /**
     * Connects to the Tor server
     *
     * @return \TorControl\TorControl
     * @throws Exception\IOError
     */
    public function connect()
    {
        if ($this->connected) {
            return;
        }

        $this->socket = @fsockopen($this->options['hostname'], $this->options['port'], $errno, $errstr, $this->options['timeout']);
        if (!$this->socket) {
            return $errno . ' - ' . $errstr;
        }

        $this->connected = true;

        return $this;
    }

    /**
     * Authenticates to the Tor server
     *
     * Autodetect authentication method if not set in options
     *
     * @return \TorControl\TorControl
     * @throws \Exception
     */
    public function authenticate()
    {
        if ($this->options['authmethod'] === static::AUTH_METHOD_NOT_SET) {
            $this->detectAuthMethod();
        }

        switch ($this->options['authmethod']) {
            case static::AUTH_METHOD_NULL:
                $this->executeCommand('AUTHENTICATE');
                break;

            case static::AUTH_METHOD_HASHEDPASSWORD:
                $password = $this->getOption('password');
                if ($password === false) {
                    return 'You must set a password option';
                }

                $this->executeCommand('AUTHENTICATE ' . static::quote($password));
                break;

            case static::AUTH_METHOD_COOKIE:
                $cookie = file_get_contents($this->options['cookiefile']);

                $this->executeCommand('AUTHENTICATE ' . bin2hex($cookie));
                break;
        }

        return $this;
    }

    /**
     * Executes a command on the Tor server
     *
     * @param  string                  $cmd
     * @throws Exception\IOError
     * @throws Exception\ProtocolError
     * @return array
     */
    public function executeCommand($cmd)
    {
        $this->checkConnected();

        $write = @fwrite($this->socket, "$cmd\r\n");
        if ($write === false) {
            return 'Error while writing to the Tor server';
        }

        $data = array();
        while (true) {
            $response = fread($this->socket, 1024);

            foreach (explode("\r\n", $response) as $line) {
                $code = substr($line, 0, 3);
                $separator = substr($line, 3, 1);
                $message = substr($line, 4);

                if ($code === false || $separator === false) {
                    $e = 'Bad response format';
                    $e->setResponse($response);

                    throw $e;
                }

                if (!in_array($separator, array(' ', '+', '-'))) {
                    $e = 'Unknow separator';
                    $e->setResponse($response);

                    throw $e;
                }

                if (!in_array(substr($code, 0, 1), array('2', '6'))) {
                    $e = $message;
                    $e->setResponse($response);

                    return $e;
                }

                $data[] = array(
                    'code' => $code,
                    'separator' => $separator,
                    'message' => $message
                );

                if ($separator === ' ') {
                    break 2;
                }
            }
        }

        return $data;
    }

    /**
     * Closes the connection to the Tor server
     */
    public function quit()
    {
        if ($this->connected && $this->socket) {
            $this->executeCommand("QUIT");
            $close = @fclose($this->socket);
            if (!$close) {
                return 'Error while closing the connection to the Tor server';
            }
        }

        $this->connected = false;
    }

    /**
     * Quotes and escapes to use in a command
     *
     * @param  string $str
     * @return string
     */
    public static function quote($str)
    {
        $str = strtr($str, array('\\' => '\\\\', '"' => '\"'));

        return '"' . $str . '"';
    }

}
