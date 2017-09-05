<?php

class Cautari_Similare extends CI_Model
{

  var $mysql_cautari;
  
  function __construct()
  {
    parent::__construct();
    $this->mysql_cautari=$this->load->database('mysql', TRUE);
  }

  function descarca_cautari($analiza)
  {
    foreach($analiza as $cheie => $arr)
    {
      if ($arr['coloana']=='localitate')
      {
        $cauta=$arr['cuvant'];
        break;
      }
      elseif($arr['coloana']=='judet')
      {
        $cauta=$arr['cuvant'];
        break;
      }
      elseif($cheie==count($analiza)-1)
      {
        $cauta=$arr['cuvant'];
        break;
      }
    }
    $q_cautari=$this->mysql_cautari->select('cautare, COUNT(cautare) AS contor ');
    $q_cautari=$this->mysql_cautari->where('cautare IS NOT NULL');
    $q_cautari=$this->mysql_cautari->not_like('url','gclid');
    $q_cautari=$this->mysql_cautari->like('url','cauta_text');
    $q_cautari=$this->mysql_cautari->like('cautare',$cauta);
    $q_cautari=$this->mysql_cautari->not_like('url','07');
    $q_cautari=$this->mysql_cautari->group_by('cautare');
    $q_cautari=$this->mysql_cautari->order_by('contor','desc');
    $q_cautari=$this->mysql_cautari->limit(10);
    $q_cautari=$this->mysql_cautari->get('jurnal');
//    $q_comentarii=$this->db->limit('1');
    $cautari=$q_cautari->result_array();
    return $cautari;
  }

}

?>
