<?php include("inc/db_con.php"); ?>
<?php include('inc/header.php'); ?>
<?php include('inc/get_member.php'); ?>
<?php include('inc/get_bokadepass.php'); ?>

<?php $minasida=2; ?>

<div class="container">
<div class="row">
         <div class="grid_12">
 <?php     echo $fryskort;
           echo $status;
           echo $skulden;

 ?>
   </div>
</div>
<div class="row">
  <?php include("inc/menymedlem.php"); ?> 
</div>
<div class="row">



  </div>
</div>






<?php include('inc/footer.php'); ?>