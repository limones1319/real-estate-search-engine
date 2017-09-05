<html>
<head>
</head>
<body>

<table>
<?php
//print_r($anunturi);
$cap_tabel=0;
foreach ($anunturi as $pagina)
{
  foreach ($pagina as $anunt)
  {
    echo '<tr>';
    foreach ($anunt as $cheie => $variabila)
    {
      if($cap_tabel<14)
      {
        echo '<td style="font-size: 8px; border: 1px solid lavender">'.$cheie.'</td>';
      }
      else
      {
        echo '<td style="font-size: 8px; border: 1px solid lavender">'.$variabila.'</td>';
      }
      $cap_tabel++;
    }
    echo '</tr>';
  }
}

?>

</body>
</html>
