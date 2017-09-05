<script type="text/javascript" >
$(function() {

  $(".update_button").click(function() {

  var boxval = $("#content").val();
  var dataString = 'content='+ boxval;

  if(boxval=='')
  {
    alert("Please Enter Some Text");
  }
  else
  {
    $("#flash").show();
    $("#flash").fadeIn(400).html('<img src="ajax-loader.gif" align="absmiddle"> <span class="loading">Loading Comment...</span>');

    $.ajax({
      type: "POST",
      url: "<?php str_replace('http://', '', base_url()); ?>/index.php/comentarii/afiseaza/anunt_id/<?php echo $anunt_id; ?>",
      data: dataString,
      cache: false,
      success: function(html){
        $("ol#update").prepend(html);
        $("ol#update li:first").slideDown("slow");
        document.getElementById('content').value='';
        document.getElementById('content').focus();
        $("#flash").hide();
      }
    });
  } return false;
});

  $(document).ready(function() {

  var boxval = $("#content").val();
  var dataString = 'content='+ boxval;

  if(boxval=='')
  {
    alert("Please Enter Some Text");
  }
  else
  {
    $("#flash").show();
    $("#flash").fadeIn(400).html('<img src="ajax-loader.gif" align="absmiddle"> <span class="loading">Loading Comment...</span>');

    $.ajax({
      type: "POST",
      url: "<?php str_replace('http://', '', base_url()); ?>/index.php/comentarii/afiseaza/anunt_id/<?php echo $anunt_id; ?>",
      data: dataString,
      cache: false,
      success: function(html){
        $("ol#update").prepend(html);
        $("ol#update li:first").slideDown("slow");
        document.getElementById('content').value='';
        document.getElementById('content').focus();
        $("#flash").hide();
      }
    });
  } return false;
});



});
</script>

<div>
  <form method="post" name="form" action="">
    <h3>What are you doing?</h3>
    <textarea  name="content" id="content" maxlength="145" >
    </textarea><br />
    <input type="submit" value="Update" name="submit" class="update_button"/>
  </form>
</div>
<div id="flash"></div>
  <ol id="update" class="timeline">
  </ol>
<div id='old_updates'>
</div>

