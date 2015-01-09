<?php 	
		$today=date('Y-m-d');
		$antalbokadepass=0;

		$query = "SELECT * FROM bokningar WHERE kundnr = {$login_session} AND passdatum >= '{$today}' AND incheckad=0 order by passdatum asc";  
		$stmt = $db ->prepare($query);
		$stmt->execute();

		$antalbokadepass = $stmt->rowCount(); 
		$result = ($stmt->fetchAll(PDO::FETCH_ASSOC)); 
		$res = ($stmt->fetch(PDO::FETCH_ASSOC)); 
		$found="";

		$stmt->closeCursor(); 



	foreach ($result as $row) {
		$reserv=$row['reservplats']; 
        $bokdatum= $row['datum'];

        if($reserv==1)
        {
        $query = "SELECT * FROM bokningar WHERE bokningsbarID = '{$row['bokningsbarID']}' AND reservplats =1 AND datum < '{$bokdatum}' ";  
        $stmt = $db ->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC); 
        $antalres = $stmt->rowCount(); 

        $plats = $antalres +1;

          $reservplats= " Reservplats ".$plats;

        }
        else {$reservplats="";}


		$query = "SELECT * FROM bokningsbara WHERE bokningsbarID ={$row['bokningsbarID']} ";  
		$stmt = $db ->prepare($query);
		$stmt->execute();
		$passnamn = ($stmt->fetch(PDO::FETCH_ASSOC)); 

		$nowtime = date('H:i:s');
		$avbokad = date('H:i:s', strtotime($passnamn['starttid'] . ' - 120 minute'));

		if ($passnamn['datum'] > $today){
				$found .= "<tr>" . '<form method="post">'.
					'<input type="hidden"'. 'name="avboka-kundnr"'. 'value="' .$login_session. '">'. 
					'<input type="hidden"'. 'name="avboka-passid"'. 'value="' .$row['bokningsbarID']. '">'.

					"<td>" .date('j/n', strtotime($row['passdatum']))."</td>" . 
					"<td>" . date('H:i', strtotime($passnamn['starttid'])) ." - " . date('H:i', strtotime($passnamn['sluttid'])) . "</td>" . 
					"<td>" . $passnamn['passnamn'] . "</td>" . 
					"<td>"  . '<input type="submit"'.' name="avboka-submit"'. ' class="btn btn-avboka btn-block"'.'value="AVBOKA'.$reservplats .'"' .'>'.
		  			 "</td>" . '</form>'.
					"</tr>" ;
		}
		else if ($passnamn['datum'] == $today){
				if ($nowtime <= $avbokad){
				$found .= "<tr>" . '<form method="post">'.
					'<input type="hidden"'. 'name="avboka-kundnr"'. 'value="' .$login_session. '">'. 
					'<input type="hidden"'. 'name="avboka-passid"'. 'value="' .$row['bokningsbarID']. '">'.

					"<td>" .date('j/n', strtotime($row['passdatum']))."</td>" . 
					"<td>" . date('H:i', strtotime($passnamn['starttid'])) ." - " . date('H:i', strtotime($passnamn['sluttid'])) . "</td>" . 
					"<td>" . $passnamn['passnamn'] . "</td>" . 
					"<td>"  . '<input type="submit"'.' name="avboka-submit"'. ' class="btn btn-avboka btn-block"'.'value="AVBOKA'.$reservplats .'"' .'>'.
		  			 "</td>" . '</form>'.
					"</tr>" ;
				}
				else if ($nowtime > $avbokad) {

				$found .= "<tr>" . 
					"<td>" .date('j/n', strtotime($row['passdatum']))."</td>" . 
					"<td>" . date('H:i', strtotime($passnamn['starttid'])) ." - " . date('H:i', strtotime($passnamn['sluttid'])) . "</td>" . 
					"<td>" . $passnamn['passnamn'] . "</td>" . 
					"<td>"  . '<input type="submit"'.' name="avboka-submit"'. ' class="btn btn-default btn-block"'.'value="-"' .' disabled>'.
		  			 "</td>" .
					"</tr>" ;

				}
		}
	}
?>