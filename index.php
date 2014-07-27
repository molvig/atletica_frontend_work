<?php include("inc/oppettider.php"); ?>
<?php include("inc/header.php"); ?>

<!--Visar dagens öppetttider -->

	<a href="oppettider.php" style="text-decoration:none">
    <div class="open_time">
      <h4>
           <span class="glyphicon glyphicon-time"></span> <?php  echo $day, $time; ?> 
      </h4>
    </div>
  </a>

<div class="orbit-container">
<div class="grid_1a">
    <div class="list-group">
      <a href="login.php" class="list-group-item active">
       BOKA PASS
      </a>
      <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                 8.30 Zumba
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
              <div class="panel-body">
                Shake that ass!
              </div>
            </div>
          </div>


        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                9.00 Core 30
              </a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
              Gott för magen.
            </div>
          </div>
        </div>


        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
               16.15 Cardio Intervall
              </a>
            </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
              Högintensivt stationsträningspass. Alla arbetar efter egen förmåga.
            </div>
          </div>
        </div>
        
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
               17.00 TRX
              </a>
            </h4>
          </div>
          <div id="collapseFour" class="panel-collapse collapse">
            <div class="panel-body">
              Häng i lianer som en apa!
            </div>
          </div>
        </div>

     </div>
    </div>
  </div>  

  </div>  


      <br>
  <br>
  <br>
  <br>











    <?php include("inc/footer.php"); ?>