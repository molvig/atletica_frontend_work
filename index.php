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
       Måndag 2014-12-08
      </a>

      <div class="panel-group" id="accordion">
         
          <div class="panel panel-default">
            <a style="text-decoration:none" data-toggle="collapse" data-parent="#accordion" href="#bajs" >
            <div class="panel-heading">
              <h4 class="panel-title-index">               
                 20:00 Body combat               
              </h4>
            </div>
             </a>
            <div id="bajs" class="panel-collapse collapse">
              <div class="panel-body">
                Fight your pal! 
                  <button type="submit" class="btn btn-default_1">Boka</button>
              </div>
            </div>
          </div>
     </div>
</form>
  </div>  
  </div>

 <div class="grid_6">

   </div>  
  
<div class="grid_2">

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