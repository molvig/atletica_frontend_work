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

 <div class="grid_5">

   </div>  
  
<div class="grid_3">

<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="4" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAAGFBMVEUiIiI9PT0eHh4gIB4hIBkcHBwcHBwcHBydr+JQAAAACHRSTlMABA4YHyQsM5jtaMwAAADfSURBVDjL7ZVBEgMhCAQBAf//42xcNbpAqakcM0ftUmFAAIBE81IqBJdS3lS6zs3bIpB9WED3YYXFPmHRfT8sgyrCP1x8uEUxLMzNWElFOYCV6mHWWwMzdPEKHlhLw7NWJqkHc4uIZphavDzA2JPzUDsBZziNae2S6owH8xPmX8G7zzgKEOPUoYHvGz1TBCxMkd3kwNVbU0gKHkx+iZILf77IofhrY1nYFnB/lQPb79drWOyJVa/DAvg9B/rLB4cC+Nqgdz/TvBbBnr6GBReqn/nRmDgaQEej7WhonozjF+Y2I/fZou/qAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://instagram.com/p/wWV3aSL8Tm/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_top">Här kan ni följa oss på Atletica , här delar vi med oss av aktuella erbjudanden, följ oss, bli uppdaterad om det senaste och annat skoj som händer i våra lokaler . Välkomna !</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Ett foto publicerat av Atletica Gym (@atleticagym) <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2014-12-08T14:28:18+00:00">Dec 12, 2014 at 6:28 PST</time></p></div></blockquote>
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>

</div>


    <div class="footer">
      
      <img src="img/atletica_logga.png">
      <h4><span class="glyphicon glyphicon-earphone"></span> 0340-14703</h4>
 
    </div>

    <?php include("inc/footer.php"); ?>