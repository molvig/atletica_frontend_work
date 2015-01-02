<?php 	
		$today=date('Y-m-d');
		$antalbokadepass=0;

		$query = "SELECT * FROM bokningar WHERE kundnr = {$login_session} AND passdatum >= '{$today}' order by datum asc";  
		$stmt = $db ->prepare($query);
		$stmt->execute();

		$antalbokadepass = $stmt->rowCount(); 
		$result = ($stmt->fetchAll(PDO::FETCH_ASSOC)); 
		$res = ($stmt->fetch(PDO::FETCH_ASSOC)); 
		$found="";

		$stmt->closeCursor(); 

		foreach ($result as $row) {
		$query = "SELECT * FROM bokningsbara WHERE bokningsbara.bokningsbarID ={$row['bokningsbarID']} ";  
		$stmt = $db ->prepare($query);
		$stmt->execute();
		$passnamn = ($stmt->fetch(PDO::FETCH_ASSOC)); 

		$found .= "<tr>" . '<form method="post">'.
			"<td>" .date('j/n', strtotime($row['passdatum'])).
			'<input type="hidden"'. 'name="getkundnrin"'. 'value="' .$row['kundnr']. '">'."</td>" . 
			"<td>" . date('H:i', strtotime($passnamn['starttid'])) ." - " . date('H:i', strtotime($passnamn['sluttid'])) . "</td>" . 
			"<td>" . $passnamn['passnamn'] . "</td>" . 
			"<td>"  . '<input type="submit"'.' name="avboka-submit"'. ' class="btn btn-default btn-sm"'.'value="Avboka"' .'>'.
  			 "</td>" . '</form>'.
			"</tr>" ;
		}
?>