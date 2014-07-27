<?php include("inc/oppettider.php"); ?>
<?php include("inc/header.php"); ?>

<!--Visar dagens öppetttider -->
<div class="grid_12">
	<a href="oppettider.php" style="text-decoration:none">
    <div class="open_time">
      <h3>
          <?php  echo $day, $time; ?> 
      </h3>
    </div>
  </a>
</div>




<ul class="orbit-container" data-orbit> 
  <li data-orbit-slide="headline-1"> 
    <div> 
      <br>
      <h2>Måndag</h2> 
      <h3>8.30 Core</h3>
      <h3>17.00 TRX</h3> 
      <h3>17.30 Spinning</h3>  
      <h3>18.30 Outdoor Intervall</h3>
      <h3>19.30 SomaMove</h3> 
      <h3>20.00 Yoga</h3> 
    </div> 
  </li> 
  <li data-orbit-slide="headline-2"> 
        <div> 
      <br>
      <h2>Tisdag</h2> 
      <h3>8.30 Core</h3>
      <h3>17.00 TRX</h3> 
      <h3>17.30 Spinning</h3>  
      <h3>18.30 Outdoor Intervall</h3>
      <h3>19.30 SomaMove</h3> 
      <h3>20.00 Yoga</h3> 
    </div> 
  </li> 
</ul>




    










    <?php include("inc/footer.php"); ?>