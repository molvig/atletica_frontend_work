<?php include('inc/header.php'); ?>
	<div class="grid_3">
  <?php include("inc/menymedlem.php"); ?> 
  </div>


<div class="grid_5">
	 <form role="form" action="#" method="post">
  
    <legend>Personlig information</legend>
    <fieldset>
    <div class="grid_12">

          <div class="grid_6">
            <label>Medlemsnummer
              <input type="text" class="form-control" name="kundnr" id="kundnr" value="" readonly></label>
          </div>

       <div class="grid_6">
          <label>Personnummer
            <input type="personnr" class="form-control" name="personnr" id="personr" value="" readonly></label>
        </div>

    </div>


       <div class="grid_12">

          <div class="grid_6">
            <label>Förnamn
            	<input type="text" class="form-control" name="fnamn" id="fnamn" value="" readonly></label>
          </div>

          <div class="grid_6">
            <label>Efternamn
            	<input type="text" class="form-control" name="enamn" id="enamn" value="" readonly></label>
           </div>

       </div>

       <div class="grid_12">

          <div class="grid_6">
            <label>Telefonnummer
              <input type="tel" class="form-control" name="phone" id="phone" value='<?php   ?>'></label>
          </div>

          <div class="grid_6">
            <label>Email
              <input type="email" class="form-control" name="mail" id="mail" value='<?php  ?>'></label>
           </div>

       </div>


</fieldset>
<br>
<legend>Medlemsskap</legend>
        <div class="grid_12"> 
          <div class="grid_6">
            <label>Har varit medlem sedan
             <input type="text" class="form-control" name="startdatum" id="startdatum" value="<?php  ?>" readonly></label>
           </div>
        </div>
          <div class="grid_12">
           <div class="grid_12">
          <div class="grid_6">
          <label>Korttyp
             <input type="text" class="form-control" name="korttyp" id="korttyp" value="Klippkort" readonly></label>
           </div>
            
        <?php

        $klippkort=1;
         if ($klippkort==1){?>

            <div class="grid_6">
            <label>Antal klipp kvar <br>
              <input type="text" class="form-control" name="giltigt" id="giltigt" value="10" readonly></label>
            </label>
           </div>
 <?php } ?>




         
          <div class="grid_6">
            <label>Gäller till <br>
              <input type="text" class="form-control" name="giltigt" id="giltigt" value="<?php  ?>" readonly></label>
            </label>
           </div>
</div>
             </div>


 <div class="grid_12">
 
        <?php

        $fryst=0;
         if ($fryst==1){?>


          <div class="grid_6">
            <label>Kortet frystes
             <input type="text" class="form-control" name="frysdate" id="frysdate" value="" readonly></label>
           </div>
 <?php } ?>
     </div>


        <?php

        $nyckelkort=1;
         if ($nyckelkort==1){?>
		          <div class="grid_12">
		          
		            <label>
		              Detta kort är ett nyckelkort
		            </label>
		         
		        </div>
 			<?php } ?>




     
        <div class="grid_6">
          <button type="submit" name="submit"  class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span> Uppdatera</button>
        </div>

</div>


    </form>


</div>






<?php include('inc/footer.php'); ?>