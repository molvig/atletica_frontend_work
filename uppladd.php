<?php include("inc/header.php"); ?>

<form role="form">
  <div class="form-group">
    <label for="bild_kom">Bildkommentar</label>
    <input type="text" class="form-control" id="bild_kom" placeholder="Kommentera din bild">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" name="img" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Posta</button>
</form>


<?php include("inc/footer.php"); ?>