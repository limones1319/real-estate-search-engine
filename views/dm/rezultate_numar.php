<div id="paginare">


 <div align="center">
 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- cauta-imobiliare.rezultate -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-7181908723026774"
     data-ad-slot="2975370887"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
 </div>
<div class="tot">
<h3>Agentie: <?php echo $cauta; ?></h3>
 <div class="detalii_agentie">
   Anunturi publicate: <?php echo count($rezultate);?>
 </div>
<h3>Rezultatele cautarii</h3><br />
<?php
foreach ($rezultate as $anunt)
{
  echo '<div class="unitate">';
  echo '<div class="tip">'.ucfirst($anunt['rubrica']).'</div>';
  echo '<div class="localitate" >'.ucfirst($anunt['judet']).', </div>';
  echo '<div class="localitate" >'.ucfirst($anunt['localitate']).'</div>';
  echo '<div class="'.substr($anunt['agentie'],0,strpos($anunt['agentie'],' ')).'">'.ucfirst(substr($anunt['agentie'],0,strpos($anunt['agentie'],' '))).'</div>';
  echo '<div class="pret" >'.$anunt['pret'].'</div><div class="pretMetru">'.$anunt['pret_mp'].' eur/mp</div><br />';
  echo '<div class="detalii" ><a href="index.php?ircd='.$anunt['id'].'&amp;c=dm&amp;m=ircd" rel="nofollow">'.$anunt['detalii'].'</a></div><br />';
  echo '<div class="contact" >'.$anunt['contact'].'</div>';
echo '<div class="similar" ><a href="index.php?anunt_id='.$anunt['anunt_id'].'&amp;c=dm&amp;m=cauta_id">'.$anunt['similar'].' aparitii</a></div>';  
echo $anunt['site']<>'n' ? '<div class="agentie"><a href="http://'.$anunt['site'].'" rel="nofollow">'.$anunt['site'].'</a></div>' : '';
  
  echo '</div><br />';
	
}

?>
<div class="reclama_vertical" style="top:215px;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- vertical_dreapta -->
<ins class="adsbygoogle"
     style="display:inline-block;width:160px;height:600px"
     data-ad-client="ca-pub-7181908723026774"
     data-ad-slot="8941589687"></ins>
<script>
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

      <div class="cautare"><a href="index.php?cauta_text=<?php echo urlencode($cautare['cautare']); ?>&amp;c=dm&amp;m=cauta"><?php echo $cautare['cautare']; ?></a></div>

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
?>
</div>
<script type="text/javascript">
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
</script>
</div>
