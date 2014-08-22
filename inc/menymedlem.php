<div class="list-group">
	<a href="minsida.php" class="list-group-item active">
	    Mina sidor
	  </a>
<?php 

$betanm=1;

if ($betanm==1)
	{?>
	<a class="list-group-item" data-toggle="modal" data-target="#myModal">
  Launch demo modal
	</a>
	

	<?php } 
else 
{?>
<a href="minsida_bokningar.php" class="list-group-item">Boka pass</a>
<?php } ?>

	  
	  
	  <a href="minsida_uppgifter.php" class="list-group-item">Mina uppgifter</a>


	</div>