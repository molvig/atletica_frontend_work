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

<div class="container">
  <div class="row">


<div class="grid_schema">
    <form role="form" action="minsida.php">

      <div class="list-group">
        <a href="#" class="list-group-item active">
         <?php echo $veckodag;?> <?php echo date('d/m', strtotime($today));?>
        </a>
        <?php echo $dagspass;?>
      </div>

      <div class="list-group">
        <a href="#" class="list-group-item active">
         <?php echo $veckodag1;?> <?php echo date('d/m', strtotime($oneday));?>
        </a>
        <?php echo $dagspass1;?>
      </div>


      <div class="list-group">
        <a href="#" class="list-group-item active">
         <?php echo $veckodag2;?> <?php echo date('d/m', strtotime($twoday));?>
        </a>
        <?php echo $dagspass2;?>  
      </div>

      <div class="list-group">
        <a href="#" class="list-group-item active">
         <?php echo $veckodag3;?> <?php echo date('d/m', strtotime($threeday));?>
        </a>
        <?php echo $dagspass3;?>
      </div>


      <div class="list-group">
        <a href="#" class="list-group-item active">
         <?php echo $veckodag4;?> <?php echo date('d/m', strtotime($fourday));?>
        </a>
        <?php echo $dagspass4;?>
      </div>
     

      <div class="list-group">
        <a href="#" class="list-group-item active">
         <?php echo $veckodag5;?> <?php echo date('d/m', strtotime($fiveday));?>
        </a>
       <?php echo $dagspass5;?>
      </div>


       <div class="list-group">
          <a href="#" class="list-group-item active">
           <?php echo $veckodag6;?> <?php echo date('d/m', strtotime($sixday));?>
          </a>
        <?php echo $dagspass6;?>
      </div>
  
   </form>

</div>


<div class="col-xs-12 col-md-5">
<h1>Välkommen till ATLETICA</h1>
<h3>Ditt centrala gym i Varberg</h3>
<p>Vi har funnits på otto torellss gata sen (1992) ? och här hittar ni oss än idag, vi är ditt gym i centrala Varberg och erbjuder ett stort utbud av träningsmöjligheter. 
Ett välutrustat gym och en( ?uppsjö)? av gruppträningsmöjligheter, vi erbjuder även Personlig träning, kostrådgivning , barndanser , mamma/babyträning och löpkurser. 
Vi arbetar aktivt med att få kunden i fokus,  på vår anläggning vill vi ha en god träningsanda och trivsam miljö genom att hela tiden utföra förbättringdarbeten och vara lyhörda mot kunden. 
Välkommen in i värmen !  

</p>

</div>


<div class="col-xs-12 col-md-3">
<h3>Senaste från Instagram</h3>

<iframe src="http://widget.websta.me/in/atleticagym/?s=250&w=1&h=1&b=1&p=5" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:265px; height: 265px" ></iframe> <!-- websta - web.stagram.com -->
<br>
<h3>Gilla oss på Facebook</h3>
<div class="fb-like-box" data-href="https://www.facebook.com/atletica.gym?fref=ts" data-width="265" data-height="265" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>


</div>


<div class="footer">
  
  <img src="img/atletica_logga.png">  
  <h4><span class="glyphicon glyphicon-earphone"></span> 0340-14703 | <span class="glyphicon glyphicon-envelope"></span> info@atletica.se | ©<?php echo date('Y');?> </h4>


</div>
</div>
</div>

<?php include("inc/footer.php"); ?>