<?php include("inc/oppettider.php"); ?>
<?php include("inc/header.php"); ?>

<!--Visar dagens öppetttider -->

	<a href="kontakt.php" style="text-decoration:none">
    <div class="open_time">
      <h4>
           Idag har vi öppet <?php echo $time; ?> 
      </h4>
    </div>
  </a>

<div class="orbit-container">
  <form role="form" action="minsida.php">

    <div class="list-group">
      <a href="login.php" class="list-group-item active">
       SCHEMA
      </a>

      <div class="panel-group" id="accordion">
         
          <div class="panel panel-default">
            <a style="text-decoration:none" data-toggle="collapse" data-parent="#accordion" href="#1" >
            <div class="panel-heading">
              <h4 class="panel-title-index">
               
                 TID + PASSNAMN
                
              </h4>
            </div>
             </a>
            <div id="1" class="panel-collapse collapse">
              <div class="panel-body">
                PASSBESKRIVNING
                  <button type="submit" class="btn btn-default_1">Boka</button>
              </div>
            </div>
          </div>
         


     </div>
    </div> 
</form>
  </div>  


      <br>
  <br>
  <br>
  <br>



    <div class="footer">
      
      <img src="img/atletica_logga.png">
      <h4><span class="glyphicon glyphicon-earphone"></span> 0340-14703</h4>
 
    </div>

    <?php include("inc/footer.php"); ?>