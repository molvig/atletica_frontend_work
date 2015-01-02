<?php include("inc/db_con.php"); ?>
<?php include('inc/header.php'); ?>
<?php include('inc/get_member.php'); ?>
<?php include('inc/get_bokadepass.php'); ?>
<?php $minasida=1; ?>



<div class="container">
<div class="row">
      <div class="grid_12">
 <?php          echo $fryskort;
           echo $status;
           echo $skulden;

 ?>
   </div>
</div>
<div class="row">
	<?php include("inc/menymedlem.php"); ?> 
</div>
<div class="row">

    <div class="col-xs-12 col-md-6"> 

      <h3> <?php echo $hej;?><?php echo $fnamn; ?></h3> 
      <h4>Du har <strong><?php echo $antalbokadepass;?></strong> av <?php echo $passantal;?> gruppass bokade</h4>

     		  <div class="panel panel-default">
		  	
		      <table class="table">  

		      <?php echo $found; ?>
		      </table> 
		
		  </div>
  	</div>

    <div class="col-xs-12 col-md-6"> 	

    <?php if ($meddelande != null){?>
    <div class="bubble">
      <center>
    	<h3 style="color:white"> Meddelande från Atletica</h3>
    	<p style="color:white"> <?php echo $meddelande;?> </p>
      </center>
    </div> 
    <?php } ?>
  	</div>


  	</div>
<div class="row">
    <div class="col-xs-12 col-md-6"> 	
  	<br>
    <a class="btn btn-atletica btn-lg" href="logout.php" role="button">LOGGA UT</a>
    </div>
</div>



</div>







<?php include('inc/footer.php'); ?>