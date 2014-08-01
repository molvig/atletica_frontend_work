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







<ul class="orbit-container" data-orbit> 

  <li data-orbit-slide="headline-1"> 
    <div> 
      <br>
      <h3>Måndag</h3> 
      <h4>8.30 Core</h4>
      <h4>17.00 TRX</h4> 
      <h4>17.30 Spinning</h4>  
      <h4>18.30 Outdoor Intervall</h4>
      <h4>19.30 SomaMove</h4> 
      <h4>20.00 Yoga</h4> 
    </div> 
  </li> 
  
  <li data-orbit-slide="headline-2"> 
        <div> 
      <br>
      <h3>Tisdag</h3> 
      <h4>8.30 Core</h4>
      <h4>17.00 TRX</h4> 
      <h4>17.30 Spinning</h4>  
      <h4>18.30 Outdoor Intervall</h4>
      <h4>19.30 SomaMove</h4> 
      <h4>20.00 Yoga</h4> 
    </div> 
  </li> 
</ul>






 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/ungdom-2012.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
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
                          
                          <button type="submit" class="btn btn-default_1">Boka</button>
                       
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
                              <button type="submit" class="btn btn-default_1">Boka</button>
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
                              <button type="submit" class="btn btn-default_1">Boka</button>
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
                              <button type="submit" class="btn btn-default_1">Boka</button>
                            </div>
                          </div>
                        </div>

                     </div>
                    </div>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="img/atletica_collage.PNG" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="img/atletica_collage.PNG" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div><!-- /.carousel -->



<?php include("inc/footer.php"); ?>