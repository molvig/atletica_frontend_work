<?php include("inc/db_con.php"); ?>
<?php include('inc/header.php'); ?>
<?php include('inc/reserv.php'); ?>
<?php include('inc/get_member.php'); ?>
<?php include('inc/skuld.php'); ?>
<?php include('inc/get_pass_bokningsbara.php'); ?>
<?php include('inc/get_bokadepass.php'); ?>
<?php include('inc/boka.php'); ?>

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
</div>

<div class="container_boka">
<br>
<!-- <div class="col-xs-12 col-md-8"> -->
<div class="grid_8">
	<div class="panel panel-atletica">
	  <div class="panel-heading"> <?php echo $veckodag;?> <?php echo date('j/n', strtotime($today));?>
	  </div>
		<div class="panel-body">
			   <?php echo $dagspass;?>
	  </div>
	</div>	
<br>
	<div class="panel panel-atletica">
	  <div class="panel-heading"> <?php echo $veckodag1;?> <?php echo date('j/n', strtotime($oneday));?>
	  </div>
	  <div class="panel-body">
	   		<?php echo $dagspass1;?>
	  </div>
	 </div>
	
<br>
	<div class="panel panel-atletica">
	  <div class="panel-heading"> <?php echo $veckodag2;?> <?php echo date('j/n', strtotime($twoday));?>
	  </div>
	  <div class="panel-body">
	   <?php echo $dagspass2;?>
	  </div>
	</div>
<br>
	<div class="panel panel-atletica">
	  <div class="panel-heading"> <?php echo $veckodag3;?> <?php echo date('j/n', strtotime($threeday));?>
	  </div>
	  <div class="panel-body">
	   <?php echo $dagspass3;?>
	  </div>
	</div>
<br>
	<div class="panel panel-atletica">
	  <div class="panel-heading"> <?php echo $veckodag4;?> <?php echo date('j/n', strtotime($fourday));?>
	  </div>
	  <div class="panel-body">
	   <?php echo $dagspass4;?>
	  </div>
	</div>
<br>
	<div class="panel panel-atletica">
	  <div class="panel-heading"> <?php echo $veckodag5;?> <?php echo date('j/n', strtotime($fiveday));?>
	  </div>
	  <div class="panel-body">
	   <?php echo $dagspass5;?>
	  </div>
	</div>
<br>
	<div class="panel panel-atletica">
	  <div class="panel-heading"> <?php echo $veckodag6;?> <?php echo date('j/n', strtotime($sixday));?>
	  </div>
	  <div class="panel-body">
	   <?php echo $dagspass6;?>
	  </div>
	</div>




  </div>


</div>





<?php include('inc/footer.php'); ?>