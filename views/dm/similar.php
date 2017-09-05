
<div id="paginare">



<div class="tot">
<h3>Reprezentare grafica a variatiei de pret</h3>
<div class="imagine" style="position:relative">
  <img src="<?php echo $imagine_zi; ?>" alt="" />
<div class="reclama_vertical" style="margin-top:0px; position: absolute;
   right:10px;
top: 235px;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- vertical_dreapta -->
<ins class="adsbygoogle"
     style="display:inline-block;width:160px;height:600px"
     data-ad-client="ca-pub-7181908723026774"
     data-ad-slot="8941589687"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});</script></div>

</div>
<?php

  echo '<div class="unitate">';
  echo '<div class="localitate" >'.$anunt['localitate'].'</div>';
  echo '<div class="pret" >'.$anunt['pret'].'</div>';  
  echo '<div class="detalii" ><a href="'.$anunt['url'].'" rel="nofollow">'.$anunt['detalii'].'</a></div>';
  echo '<div class="contact">'.$anunt['contact'].'</div>';
  echo '<br /><br />';

?>
<button id="arata_detalii">Alte aparitii</button>
<div id="detalii">
<?php

foreach ($similare as $similar)
{
  echo '<div class="">';
  echo '<div class="pret" >'.$similar['pret'].'</div>';
  echo '<div class="data" >'.$similar['data'].'</div>'; 
  echo '<div class="detalii">'.$similar['detalii'].'</div>';
  echo '</div><br />';
}

?>
</div>
</div>


<script>
$("#detalii").hide();
$("#arata_detalii").click(function()
{
  $("#detalii").toggle("slow");
	 $(".formular_comentarii").slideDown("slow");
});

</script>

<div class="wrapperCautari">
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

</div>
  </div>