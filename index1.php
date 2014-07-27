<?php include("inc/oppettider.php"); ?>
<?php include("inc/header.php"); ?>

<!--Visar dagens öppetttider -->
<div class="grid_12">
  <a href="oppettider.php" style="text-decoration:none"><div class="open_time">
<h3>
          <?php  echo $day, $time; ?> 
</h3>

</div></a>




    

<div class="touchslider">
    <div class="touchslider-viewport" style="width:500px;overflow:hidden"><div>
        <div class="touchslider-item">
          <img width="500" height="375" alt="Tree and cloud" src="http://upload.wikimedia.org/wikipedia/commons/3/37/Killerwhales_jumping.jpg"></img>
        </div>
        
        <div class="touchslider-item"></div>
        ...
    </div>
    </div>

    <div>
        <span class="touchslider-prev">←</span>
        <span class="touchslider-nav-item touchslider-nav-item-current">1</span>
        <span class="touchslider-nav-item">2</span>
        ...
        <span class="touchslider-next">→</span>
    </div>
</div>



<?php include("inc/footer.php"); ?>