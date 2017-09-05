<div id="paginare">

<div class="tot">
<h3>Reprezentare grafica a preturilor pentru "<?php echo htmlspecialchars($cauta); ?>"</h3>
 <div class="grafic">
 </div>
<h3>Rezultatele cautarii pentru "<?php echo htmlspecialchars($cauta); ?>"</h3><br />
<?php

$contor=0;
foreach ($rezultate as $anunt)
{
  $contor++;
  if ($contor==5)
  {

?>

<div class="reclama_orizontal">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- cauta-imobiliare.rezultate -->
<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-7181908723026774" data-ad-slot="2975370887"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<?php

  }
  echo '<div class="unitate">';
  echo '<div class="tip">'.ucfirst($anunt['rubrica']).'</div>';
  echo '<div class="localitate" >'.ucfirst($anunt['judet']).', </div>';
  echo '<div class="localitate" >'.ucfirst($anunt['localitate']).'</div>';
  echo '<div class="pret" >'.$anunt['pret'].'</div><div class="pretMetru">'.$anunt['pret_mp'].' eur/mp</div><br />';  
  //echo '<div class="detalii" ><a href="'.$anunt['url'].'" rel="nofollow">'.$anunt['detalii'].'</a></div><br />';
  echo '<div class="detalii" ><a href="index.php?ircd='.$anunt['id'].'&amp;c=dm&amp;m=ircd" rel="nofollow">'.$anunt['detalii'].'</a></div><br />';
  echo '<div class="contact" ><a href="index.php?contact='.$anunt['contact'].'&amp;c=dm&amp;m=cauta_numar">'.((empty($anunt['contact'])===TRUE) ? 'fara numar' : $anunt['contact']).'</a></div>';
  echo '<div class="'.((empty($anunt['agentie'])===TRUE) ? 'particular' : $anunt['agentie']).'">'.((empty($anunt['agentie'])===TRUE) ? 'Particular' : ucfirst($anunt['agentie'])).'</div>';
  echo '<div class="similar" ><a href="index.php?anunt_id='.$anunt['anunt_id'].'&amp;c=dm&amp;m=cauta_id">'.$anunt['similar'].' aparitii</a></div>';
  echo '<div class="comentarii"><a href="index.php?anunt_id='.$anunt['anunt_id'].'&amp;c=dm&amp;m=cauta_id">'.$anunt['comentarii'].'</a></div>';
  echo (strpos($anunt['site'], 'http')!=FALSE || strpos($anunt['site'], 'www')!=FALSE) ? '<div class="agentie"><a href="http://'.$anunt['site'].'" rel="nofollow">'.$anunt['site'].'</a></div>' : '<div class="agentie">'.(($anunt['site']=='n') ? str_replace('n','',$anunt['site']) : $anunt['site']).'</div>';
  echo '<div class="suprafata">'.$anunt['suprafata'].' mp</div>';
  
  echo '</div><br />';

	
}

?>
<div class="reclama_vertical">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- vertical_dreapta -->
<ins class="adsbygoogle"
     style="display:inline-block;width:160px;height:600px"
     data-ad-client="ca-pub-7181908723026774"
     data-ad-slot="8941589687"></ins>
<script type="javascript">
(adsbygoogle = window.adsbygoogle || []).push({});</script></div>
  <div class="cautari_similare_heading">
    <h3>Alte cautari de anunturi imobiliare:</h3>
  </div>
  <div class="cautari_similare">
    <div class="p">

<?php

foreach($cautari_similare as $cheie => $cautare)
{

?>

      <div class="cautare"><a href="index.php?cauta_text=<?php echo urlencode($cautare['cautare']); ?>&amp;c=dm&amp;m=cauta"><?php echo htmlspecialchars($cautare['cautare']); ?></a></div>

<?php

  if ($cheie==4)
  {	
    echo '</div>';
    echo '<div class="p">';
  }
  elseif ($cheie==9)
  {
    echo '</div>';
  }
}

?>

  </div>
  
<?php

echo $paginare;

//echo count($rezultate).' rezultate.';
?>
</div>

<script type="text/javascript">

$(window).load(function() {
$.get( "index.php?c=dm&m=genereaza_grafic&cauta_text=<?php echo urlencode($cauta); ?>", function( data ) {
  $( ".grafic" ).html( data );
  $("#grafic_saptamana").hide();
  $("#grafic_luna").hide();
  $("#selector_zi").click(function()
  {
    $("#grafic_zi").show("slow");
    $("#grafic_saptamana").hide();
    $("#grafic_luna").hide();
    $("#selector_zi").addClass("activ");
  });
  $("#selector_lunar").click(function()
  {
    $("#grafic_saptamana").show("slow");
    $("#grafic_zi").hide();
    $("#grafic_luna").hide();
  });
  $("#selector_anual").click(function()
  {
    $("#grafic_luna").show("slow");
    $("#grafic_saptamana").hide();
    $("#grafic_zi").hide();
  });
});
});

</script>
</div>