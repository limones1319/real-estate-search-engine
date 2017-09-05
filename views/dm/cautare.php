<div id="wrapperH">
<div class="menuTop">
<a href="index.php?c=contact" title="contact cauta imobiliare">Contact</a>&nbsp;|<a style="margin-left:5px" href="index.php?c=dm&amp;m=cum_caut" title="Ajutor pentru cautari imobiliare">Ajutor
<span class="prevAjutor">Cautarea dvs. poate fi usoara si exacta daca folositi instrumentele de cautare. Accesati pagina de <span style="text-decoration:underline; color:#E85732;">Ajutor</span> pentru a afla care sunt acestea.</span></a>
</div>
<div class="totC" style=" ">
<?php echo validation_errors(); ?>
<div id="logoW"><div id="logo"><a href="http://cauta-imobiliare.info" title="anunturi imobiliare"><img src="/assets/images/lupa.png" height="57" width="56" alt="cauta imobiliare" style="position: relative;" />imobiliare</a></div></div>
<div class="formCauta">
<form action="index.php" method="get">
<input type="text" name="cauta_text" value="<?php echo htmlspecialchars($cauta); ?>" size="50" />
<input type="hidden" name="c" value="dm" />
<input type="hidden" name="m" value="cauta" />
<input type="submit" value="Cauta" class="cautaB" />
</form></div>
</div>
<div class="ajutor"><div style="margin-top:5px; float:right;"><a href="http://cauta-imobiliare.info/index.php?c=dm&amp;m=cum_caut#filtru_pret" title="Ajutor cautare anunt"><span>Afla cum poti filtra rezultatele dupa pret sau suprafata!</span><img src ="/assets/images/ajutor_cautare.png" alt="Ajutor pentru cautare" height="30" width="30" style="margin-bottom: -10px; margin-left: 10px;"/></a></div></div>
</div>