<?php

$query = "SELECT * FROM skulder WHERE kundnr = {$kundnr} ORDER By datum DESC ";
	$stmt = $db ->prepare($query);
	$stmt->execute();
	$skuld=$stmt->rowCount(); 
	$result = ($stmt->fetchAll(PDO::FETCH_ASSOC)); 
	$stmt->closeCursor(); 	
	$skulden="";

	$found="";

		foreach ($result as $row) {
		$kundnr = $row['kundnr'];
		$passID = $row['bokningsbarID'];

	if ($row['sen_avbokning']==1)
	 	{$orsak="Sen avbokning";}
	else if ($row['ej_incheckad']==1)
	 	{$orsak="Ej incheckad";}
	 	$starten = date("H:i", strtotime($row['starttid']));

			$found .= "<tr>" .
			"<td>"  . date('j/n', strtotime($row['datum'])). "</td>" .
			"<td>"  . $starten. "</td>" . 
			"<td>"  . $row['passnamn'].'<input type="hidden"'. 'name="passid"'. 'value="' .$passID. '">' ."</td>" . 

			"<td>"  . $orsak. "</td>" . 
			"</tr>" ;



}







 if($skuld > 0 && $skuld < 3 ){
	
	$skulden = 

  '<div class="panel panel-danger">'.
    '<div class="panel-heading"'. 'role="tab"'. 'id="headingOne">'.
      '<h4 class="panel-title">'.
        '<a data-toggle="collapse"'. 'data-parent="#accordion"'. 'href="#collapseOne"'. 'aria-expanded="true"'. 'aria-controls="collapseOne">'.
          '<span class="glyphicon glyphicon-exclamation-sign"></span>'." Du har ". $skuld ." skulder! Klicka för mer information".
        '</a>
      </h4>
    </div>'.
    '<div id="collapseOne"'. 'class="panel-collapse collapse"'. 'role="tabpanel"'. 'aria-labelledby="headingOne">'.
      '<div class="panel-body">'.
     
      		  '<table class="table">
		      <tr>

		        <td><h5>Datum</h5></td>
		        <td><h5>Starttid</h5></td>
		        <td><h5>Pass</h5></td>
		       	<td><h5>Orsak</h5></td>
		      </tr>'. 
			
		    $found

		    .  '</table>'. 

		    "Var snäll och kontakta oss för att lösa skulden!".

      '</div>
    </div>
  </div>';

	}

	else if ($skuld>2){

		header('Location: minsida_block.php');

		}

?>