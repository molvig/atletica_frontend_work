<?php include("inc/db_con.php"); ?>
<?php include('inc/header.php'); ?>
<?php include('inc/get_member.php'); ?>
<?php include('inc/skulder.php'); ?>

<div class="container">
<div class="row">

    <div class="col-xs-12 col-md-6"> 

      <h3> <?php echo $hej;?><?php echo $fnamn; ?></h3> 
      <h4>Du har <?php echo $skuld;?> skulder och har därför blivit spärrad från ditt konto. <br>
        Kontakta receptionen för att låsa upp ditt konto igen!</h4>

  	</div>
      <div class="grid_12">
 <?php
           echo $skulder;

 ?>
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