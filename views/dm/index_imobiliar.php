<div id="paginare">

<div class="tot">
<h3>Reprezentare grafica a preturilor pentru "<?php echo htmlspecialchars($cauta); ?>"</h3>
 <div class="grafic">
    <div id="grafic_zi">
      <img alt="reprezentare grafica" src="<?php echo $imagine_zi; ?>" />
    </div>
    <div id="grafic_saptamana">
      <img alt="reprezentara grafica" src="<?php echo $imagine_saptamana; ?>" />
    </div>
    <div id="grafic_luna">
      <img alt="reprezentare grafica" src="<?php echo $imagine_decada; ?>" />
    </div>
  <ul id="selector_grafic">
    <li id="selector_zi">Zi</li>
    <li id="selector_lunar">Luna</li>
    <li id="selector_anual">An</li>
  </ul>
 
  </div>
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