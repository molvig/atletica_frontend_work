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
       <div style="position:fixed;z-index:10;background-color:white;width:25%;">
         <h3>VECKANS  SCHEMA</h3>
       </div>
       <br>
        <br>
         <br>
     <form role="form" action="minsida.php">

      <div class="list-group">
        <a href="#" class="list-group-item active">
         <?php echo $veckodag;?> <?php echo date('d/m', strtotime($today));?>
        </a>

      <?php echo $dagspass. "</div>";?>
        
    
    </div>

      <div class="list-group">
        <a href="#" class="list-group-item active">
         <?php echo $veckodag1;?> <?php echo date('d/m', strtotime($oneday));?>
        </a>
      
      <?php echo $dagspass1. "</div>";?>
        
    </div>


      <div class="list-group">
        <a href="#" class="list-group-item active">
         <?php echo $veckodag2;?> <?php echo date('d/m', strtotime($twoday));?>
        </a>
      
       <?php echo $dagspass2. "</div>";?>
        

    </div>


      <div class="list-group">
        <a href="#" class="list-group-item active">
         <?php echo $veckodag3;?> <?php echo date('d/m', strtotime($threeday));?>
        </a>
      
      <?php echo $dagspass3. "</div>";?>
        

    </div>


      <div class="list-group">
        <a href="#" class="list-group-item active">
         <?php echo $veckodag4;?> <?php echo date('d/m', strtotime($fourday));?>
        </a>
      
      <?php echo $dagspass4. "</div>";?>
        
 
    </div>
     

      <div class="list-group">
        <a href="#" class="list-group-item active">
         <?php echo $veckodag5;?> <?php echo date('d/m', strtotime($fiveday));?>
        </a>
      
      <?php echo $dagspass5. "</div>";?>
        

    </div>


   <!--   <div class="list-group">
        <a href="#" class="list-group-item active">
         <?php echo $veckodag6;?> <?php echo date('d/m', strtotime($sixday));?>
        </a>
      
      <?php echo $dagspass6. "</div>";?>

    </div>

    -->  

    </form>

</div>


<div class="grid_5">
<h1>Välkommen till ATLETICA</h1>
<h3>Ditt centrala gym i Varberg</h3>
<p>Vi erbjuder stort utbud av träningsmöjligheter . Gruppträning, Personlig träning, Barndans & Gym.
</p>

<br> 
<br> 
<br> 
<br> 
<br> 
<br> 
<br> 
<br> 
<br> 

  <div class="fb-like" data-href="https://www.facebook.com/atletica.gym?fref=ts" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>


</div>


<div class="grid_3">
<h3>Senaste från Instagram</h3>

<iframe src="http://widget.websta.me/in/atleticagym/?s=250&w=1&h=1&b=1&p=5" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:265px; height: 265px" ></iframe> <!-- websta - web.stagram.com -->
<br>



</div>


<div class="footer">
  
  <img src="img/atletica_logga.png">
  <h4><span class="glyphicon glyphicon-earphone"></span> 0340-14703</h4>

</div>

<?php include("inc/footer.php"); ?>