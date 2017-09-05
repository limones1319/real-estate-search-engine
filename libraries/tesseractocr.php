<?php
class TesseractOCR {

  function recognize($originalImage) {
    //    $tifImage       = TesseractOCR::php_convertImageToTif($originalImage);
    $configFile     = TesseractOCR::generateConfigFile(func_get_args());
    //    $outputFile     = TesseractOCR::executeTesseract($tifImage, $configFile);
    $outputFile     = TesseractOCR::executeTesseract($originalImage, $configFile);
    $recognizedText = TesseractOCR::readOutputFile($outputFile);
    TesseractOCR::removeTempFiles($tifImage, $outputFile, $configFile);
    return $recognizedText;
  }

  function convertImageToTif($originalImage) {
    $tifImage = FCPATH.'application/cache/tesseract-ocr-tif-'.rand().'.png';
    exec("convert -colorspace gray +matte $originalImage $tifImage");
    return $tifImage;
  }

  function php_convertImageToTif($originalImage) {
    try {
      $tifImage = FCPATH.'application/cache/tesseract-ocr-tif-'.rand().'.png';
      $image = new Imagick();
      $image->readImage($originalImage);
      $image->setImageFormat('png');
      $image->setImageColorspace(imagick::COLORSPACE_GRAY);
      $image->setImageMatte(TRUE);
      $image->writeImage($tifImage);
      return $tifImage;
    } catch (ImagickException $e) {
      return FALSE;
    }
  }
    
  function generateConfigFile($arguments) {
    $configFile = FCPATH.'application/cache/tesseract-ocr-config-'.rand().'.conf';
    exec("touch $configFile");
    $whitelist = TesseractOCR::generateWhitelist($arguments);
    if(!empty($whitelist)) {
      $fp = fopen($configFile, 'w');
      fwrite($fp, "tessedit_char_whitelist $whitelist");
      fwrite($fp, "classify_bln_numeric_mode");
      fclose($fp);
    }
    return $configFile;
  }

  function generateWhitelist($arguments) {
    array_shift($arguments); //first element is the image path
    $whitelist = '';
    foreach($arguments as $chars) $whitelist.= join('', (array)$chars);
    return $whitelist;
  }

  function executeTesseract($tifImage, $configFile) {
    $outputFile = FCPATH.'application/cache/tesseract-ocr-output-'.rand();
    exec("tesseract $tifImage $outputFile nobatch $configFile 2> /dev/null");
    return $outputFile.'.txt'; //tesseract appends txt extension to output file
  }

  function readOutputFile($outputFile) {
    return trim(file_get_contents($outputFile));
  }

  function removeTempFiles() { array_map("unlink", func_get_args()); }
}
?>
