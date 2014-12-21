<?php include("inc/db_con.php"); ?>
<?php include("inc/oppettider.php"); ?>
<?php include("inc/header.php"); ?>
<?php include("inc/get_veckans_pass.php"); ?>


<!--Visar dagens öppetttider -->

	<a href="omoss_kontakt.php" style="text-decoration:none">
    <div class="open_time">
      <h4>
           IDAG HAR VI ÖPPET <?php echo $time; ?> 
      </h4>
    </div>
  </a>

<div class="grid_schema">

  <form role="form" action="minsida.php">

    <div class="list-group">
      <a href="#" class="list-group-item active">
       <?php echo $veckodag;?> <?php echo $today;?>
      </a>

    <?php echo $dagspass;?>
      
</div>

</div>

    <div class="list-group">
      <a href="#" class="list-group-item active">
       <?php echo $veckodag1;?> <?php echo $oneday;?>
      </a>
    
    <?php echo $dagspass1;?>
      
</div>
</div>

    <div class="list-group">
      <a href="#" class="list-group-item active">
       <?php echo $veckodag2;?> <?php echo $twoday;?>
      </a>
    
     <?php echo $dagspass2;?>
      
</div>
</div>

    <div class="list-group">
      <a href="#" class="list-group-item active">
       <?php echo $veckodag3;?> <?php echo $threeday;?>
      </a>
    
    <?php echo $dagspass3;?>
      
</div>
</div>

    <div class="list-group">
      <a href="#" class="list-group-item active">
       <?php echo $veckodag4;?> <?php echo $fourday;?>
      </a>
    
    <?php echo $dagspass4;?>
      
</div>
</div>

    <div class="list-group">
      <a href="#" class="list-group-item active">
       <?php echo $veckodag5;?> <?php echo $fiveday;?>
      </a>
    
    <?php echo $dagspass5;?>
      
</div>
</div>


    <div class="list-group">
      <a href="#" class="list-group-item active">
       <?php echo $veckodag6;?> <?php echo $sixday;?>
      </a>
    
    <?php echo $dagspass6;?>
      
</div>
</div>



  </form>
  </div>  
  </div>

 <div class="grid_6">

   </div>  
  
<div class="grid_2">
<h3>Senaste från Instagram</h3>

<iframe src="http://widget.websta.me/in/atleticagym/?s=250&w=1&h=1&b=1&p=5" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:265px; height: 265px" ></iframe> <!-- websta - web.stagram.com -->


<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
<br>
<div class="fb-like-box" data-href="https://www.facebook.com/atletica.gym?ref=ts&amp;fref=ts" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>

</div>


    <div class="footer">
      
      <img src="img/atletica_logga.png">
      <h4><span class="glyphicon glyphicon-earphone"></span> 0340-14703</h4>
 
    </div>

    <?php include("inc/footer.php"); ?>