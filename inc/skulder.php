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
			"<td>"  . date('d/m', strtotime($row['datum'])). "</td>" .
			"<td>"  . $starten. "</td>" . 
			"<td>"  . $row['passnamn'].'<input type="hidden"'. 'name="passid"'. 'value="' .$passID. '">' ."</td>" . 

			"<td>"  . $orsak. "</td>" . 
			"</tr>" ;



}


	
	$skulder = 

      		  '<table class="table">
		      <tr>

		        <td><h5>Datum</h5></td>
		        <td><h5>Starttid</h5></td>
		        <td><h5>Pass</h5></td>
		       	<td><h5>Orsak</h5></td>
		      </tr>'. 
			
		    $found

		    .  '</table>' ;



	?>