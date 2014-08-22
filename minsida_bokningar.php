<?php include('inc/header.php'); ?>
	<div class="grid_3">
  <?php include("inc/menymedlem.php"); ?> 
  </div>



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-warning-sign"></span>Missat pass</h4>
      </div>
      <div class="modal-body">
        <p>Du har uteblivit från följande pass</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->






<?php include('inc/footer.php'); ?>