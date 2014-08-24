<?php include('inc/header.php'); ?>


<br>
<br>

    <form class="form-horizontal" role="form" action="minsida.php">
      <div class="form-group">
        <label for="kundnummer" class="col-sm-2 control-label">Kundnummer</label>
        <div class="col-sm-4">
          <input type="tel" class="form-control" id="kundnummer" placeholder="" autofocus>
        </div>
      </div>
      <div class="form-group">
        <label for="personnummer" class="col-sm-2 control-label">Personnummer</label>
        <div class="col-sm-4">
          <input type="tel" class="form-control" id="personnummer" placeholder="">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Logga in</button>
        </div>
      </div>
    </form>








<?php include('inc/footer.php'); ?>