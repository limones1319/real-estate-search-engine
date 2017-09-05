<div class="totC">
<div class="menuTop" style="margin-top:10px; width:950px;">
<a href="index.php?c=contact" title="contact cauta imobiliare">Contact</a>&nbsp;|<a style="margin-left:5px" href="index.php?c=dm&m=cum_caut" title="Ajutor pentru cautari imobiliare">Ajutor
<span class="prevAjutor">Cautarea dvs. poate fi usoara si exacta daca folositi instrumentele de cautare. Accesati pagina de <span style="text-decoration:underline; color:#E85732;">Ajutor</span> pentru a afla care sunt acestea.</span></a>
</div>

<div id="logo"><img src="/assets/images/lupa.png" height="57" width="56" alt="cauta imobiliare" style="position: relative;left: 127px;top: 19px;" />imobiliare</div>
<div class="formH">
<form action="index.php" method="get">
<input type="text" name="cauta_text" size="50" value="Introduceti termenii de cautare. Ex.:2 camere Titan." id="clearme" />
<input type="hidden" name="c" value="dm" />
<input type="hidden" name="m" value="cauta" />
<input type="submit" value="Cauta" class="cautaB" />
</form>
<br /><br />
</div>
<br />
<div class="index_imobiliar">
  <h4>Indexul imobiliar al preturilor:</h4>
<span class="anunturi_indexate"><?php echo $cauta['total']; ?> anunturi imobiliare indexate</span>
  <div class="paragraf">
    <div class="paragraf_index">
      <h5 class="link_index"><a href="index.php?c=dm&m=index_imobiliar&cauta_text=garsoniere+bucuresti">garsoniere bucuresti</a></h5>
      <h5 class="link_index"><a href="index.php?c=dm&m=index_imobiliar&cauta_text=2+camere+bucuresti">2 camere bucuresti</a></h5>
      <h5 class="link_index"><a href="index.php?c=dm&m=index_imobiliar&cauta_text=case+ilfov">case ilfov</a></h5>
    </div>
    <div class="paragraf_index">
      <h5 class="link_index"><a href="index.php?c=dm&m=index_imobiliar&cauta_text=case+bucuresti">case bucuresti</a></h5>
      <h5 class="link_index"><a href="index.php?c=dm&m=index_imobiliar&cauta_text=2+camere+ploiesti">2 camere ploiesti</a></h5>
      <h5 class="link_index"><a href="index.php?c=dm&m=index_imobiliar&cauta_text=2+camere+ploiesti">3 camere bucuresti</a></h5>
    </div>
    <div class="paragraf_index">
      <h5 class="link_index"><a href="index.php?c=dm&m=index_imobiliar&cauta_text=2+camere+constanta">2 camere constanta</a></h5>
      <h5 class="link_index"><a href="index.php?c=dm&m=index_imobiliar&cauta_text=teren+constanta">teren constanta</a></h5>
      <h5 class="link_index"><a href="index.php?c=dm&m=index_imobiliar&cauta_text=2+camere+cluj">2 camere cluj</a></h5>
    </div>
  </div>
</div>

</div>
<script type="text/javascript">
    $('#clearme').css('color', '#E3CDC8');
    $('#clearme').focus(function() { 
      $('#clearme').val(''); 
      $('#clearme').css('color', '#E85732');
      });
</script>
