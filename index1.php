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



<?php include("inc/footer.php"); ?>