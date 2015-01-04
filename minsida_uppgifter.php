<?php include('inc/db_con.php'); ?>
<?php include('inc/header.php'); ?>
<?php include('inc/get_member.php'); ?>
<?php include('inc/skuld.php'); ?>


<?php $minasida=3; ?>

<div class="container">
<div class="row">
         <div class="grid_12">
 <?php        echo $fryskort;
           echo $status;
           echo $skulden;

 ?>
   </div>
</div>
<div class="row">
  <?php include("inc/menymedlem.php"); ?> 
</div>
<div class="row">

    <div class="col-xs-12 col-md-6"> 
<form role="form" action="" method="post">
  
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
              <input type="tel" class="form-control" name="phone" id="phone" value="<?php echo $telefon;?>" onkeypress="return isNumberKey(event)" required></label>
          </div>

          <div class="grid_6">
            <label>Email
              <input type="email" class="form-control" name="mail" id="mail" value="<?php echo $mail;?>" required></label>
           </div>

       </div>
        <?php

         if ($nyckelkort==1){?>
              <div class="grid_12">
              
                <label>
                  Detta kort är ett nyckelkort
                </label>
             
            </div>
      <?php } ?>




     
        <div class="grid_6">
          <button type="submit" name="uppdatera"  class="btn btn-atletica"><span class="glyphicon glyphicon-refresh"></span> UPPDATERA</button>
       
       <?php echo $sent; ?>
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


         if ($kortet=="10"){?>

            <div class="grid_6">
            <label>Antal klipp kvar <br>
              <input type="text" class="form-control" name="antalklipp" id="antalklipp" value="<?php echo $antalklipp; ?>" readonly></label>
            </label>
           </div>
 <?php } ?>

  <?php   if ($kortet=="AG12" || $kortet=="AG24" || $kortet=="AG12+2" || $kortet=="AG24+2" ){?>

            <div class="grid_6">
            <label>Bindningstid till <br>
              <input type="text" class="form-control" name="bindningsdatum" id="bindningsdatum" value="<?php echo date('Y-m-d', strtotime($bindningstid)); ?>" readonly></label>
            </label>
           </div>
 <?php }


   else {?>

          <div class="grid_6">
            <label>Gäller till <br>
              <input type="text" class="form-control" name="giltigt" id="giltigt" value="<?php echo $kortgiltigt;  ?>" readonly></label>
            </label>
           </div>
 <?php } ?>

         

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



<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>





<?php include('inc/footer.php'); ?>