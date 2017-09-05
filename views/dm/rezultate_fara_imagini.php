<div id="paginare">


<div class="tot">
<h3>Rezultatele cautarii</h3><br />
<?php

$contor=0;
foreach ($rezultate as $anunt)
{
  $contor++;
  if ($contor==5)
  {

?>

<div class="unitate">
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
  echo '<div class="pret" >'.$anunt['pret'].'</div><br />';  
//  echo '<div class="detalii" ><a href="'.$anunt['url'].'" rel="nofollow">'.$anunt['detalii'].'</a></div><br />';
  echo '<div class="detalii" ><a href="index.php?ircd='.$anunt['id'].'&amp;c=dm&amp;m=ircd" rel="nofollow">'.$anunt['detalii'].'</a></div><br />';
  echo '<div class="contact" ><a href="index.php?contact='.$anunt['contact'].'&amp;c=dm&amp;m=cauta_numar">'.$anunt['contact'].'</a></div>';
  echo '<div class="'.$anunt['agentie'].'">'.ucfirst($anunt['agentie']).'</div>';
  echo '<div class="similar" ><a href="index.php?anunt_id='.$anunt['anunt_id'].'&amp;c=dm&amp;m=cauta_id">'.$anunt['similar'].' aparitii</a></div>';
  echo '<div class="comentarii"><a href="index.php?anunt_id='.$anunt['anunt_id'].'&amp;c=dm&amp;m=cauta_id">'.$anunt['comentarii'].'</a></div>';
  echo (strpos($anunt['site'], 'http')!=FALSE || strpos($anunt['site'], 'www')!=FALSE) ? '<div class="agentie"><a href="http://'.$anunt['site'].'" rel="nofollow">'.$anunt['site'].'</a></div>' : '<div class="agentie">'.(($anunt['site']=='n') ? str_replace('n','',$anunt['site']) : $anunt['site']).'</div>';
  echo '<div class="suprafata">'.$anunt['suprafata'].' mp</div>';
  
  echo '</div><br />';
	
}

echo $paginare;

//echo count($rezultate).' rezultate.';
?>
</div>
</div>
