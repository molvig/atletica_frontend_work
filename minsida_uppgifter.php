<?php include('inc/db_con.php'); ?>
<?php include('inc/header.php'); ?>
<?php include('inc/get_member.php'); ?>


<?php $minasida=3; ?>

<div class="container">
<div class="row">
    <div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-thumbs-up"></span> Du har X dagar kvar på ditt medlemskap</div>
</div>
<div class="row">
  <?php include("inc/menymedlem.php"); ?> 
</div>
<div class="row">

    <div class="col-xs-12 col-md-6"> 
<form role="form" action="#" method="post">
  
    <h3>Personlig information</h3>
    
    <div class="grid_12">

          <div class="grid_6">
            <label>Medlemsnummer
              <input type="text" class="form-control" name="kundnr" id="kundnr" value="<?php echo $kundnr;?>" readonly></label>
          </div>

       <div class="grid_6">
          <label>Personnummer
            <input type="personnr" class="form-control" name="personnr" id="personr" value="<?php echo $personnr;?>" readonly></label>
        </div>

    </div>


       <div class="grid_12">

          <div class="grid_6">
            <label>Förnamn
              <input type="text" class="form-control" name="fnamn" id="fnamn" value="<?php echo $fnamn;?>" readonly></label>
          </div>

          <div class="grid_6">
            <label>Efternamn
              <input type="text" class="form-control" name="enamn" id="enamn" value="<?php echo $enamn;?>" readonly></label>
           </div>

       </div>

       <div class="grid_12">

          <div class="grid_6">
            <label>Telefonnummer
              <input type="tel" class="form-control" name="phone" id="phone" value="<?php echo $telefon;?>"></label>
          </div>

          <div class="grid_6">
            <label>Email
              <input type="email" class="form-control" name="mail" id="mail" value="<?php echo $mail;?>"></label>
           </div>

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
    <div class="col-xs-12 col-md-6"> 
<h3>Medlemsskap</h3>
        <div class="grid_12"> 
          <div class="grid_6">
            <label>Du har varit medlem sedan
             <input type="text" class="form-control" name="startdatum" id="startdatum" value="<?php echo date('Y-m-d', strtotime($medlemsstart)); ?>" readonly></label>
           </div>
        </div>
          <div class="grid_12">
           <div class="grid_12">
          <div class="grid_6">
          <label>Korttyp
             <input type="text" class="form-control" name="korttyp" id="korttyp" value="<?php echo $korttyp; ?>" readonly></label>
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




</div>


    </form>

    </div>



  </div>
</div>









<?php include('inc/footer.php'); ?>