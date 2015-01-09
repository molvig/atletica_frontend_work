<?php include('inc/db_con.php'); ?>
<?php include('inc/header.php'); ?>
<?php include('inc/login.php'); ?>



<br>
<br>
<div class="container">
  <div class="row">
    <form class="form-horizontal" role="form" action="" method="POST">
      <div class="form-group">
        <label for="kundnummer" class="col-sm-2 control-label">Kundnummer</label>
        <div class="col-sm-4">
          <input type="tel" class="form-control" name="kundnr" placeholder="" autofocus>
        </div>
      </div>
      <div class="form-group">
        <label for="personnummer" class="col-sm-2 control-label">Personnummer</label>
        <div class="col-sm-4">
          <input type="tel" class="form-control" name="personnr" placeholder="ÅÅMMDD">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="login-member" class="btn btn-atletica">Logga in</button>
         <br><br> <span><?php echo $error; ?></span>
        </div>
         </div>
     
    </form>
  </div>
</div>




<?php include('inc/footer.php'); ?>