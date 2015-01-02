<?php include("inc/db_con.php"); ?>
<?php include('inc/header.php'); ?>
<?php include('inc/get_member.php'); ?>
<?php include('inc/get_bokadepass.php'); ?>
<?php $minasida=1; ?>



<div class="container">
<div class="row">
  	<div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-thumbs-up"></span> Du har X dagar kvar på ditt medlemskap</div>
</div>
<div class="row">
	<?php include("inc/menymedlem.php"); ?> 
</div>
<div class="row">

    <div class="col-xs-12 col-md-6"> 
    <h3> Hej, <?php echo $fnamn; ?></h3> 
      <h4>Du har <strong><?php echo $antalbokadepass;?></strong> av <?php echo $passantal;?> gruppass bokade</h4>

     		  <div class="panel panel-default">
		  	
		      <table class="table">  

		      <?php echo $found; ?>
		      </table> 
		
		  </div>
  	</div>

    <div class="col-xs-12 col-md-6"> 	
	<h3> Meddelande från Atletica</h3>
	<p>Vi har erbjudande på att ta med en vän gratis :)</p>
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