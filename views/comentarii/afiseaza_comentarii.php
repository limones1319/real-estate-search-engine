<?php 

foreach ($comentarii as $comentariu)
{

?>
<li class="bar<?php echo $comentariu['id']; ?>">
  <div align="left">
    <span ><?php echo $comentariu['comentariu']; ?> </span>
    </div>
</li>
<?php 

}

?>
