<?php	
				
$user_check = $_SESSION['login_user'];
if(!isset($user_check)){
	header('Location: minsida_login.php'); // Redirecting To Home Page
}

$kundnr ="";
$personnr="";
$fnamn ="";
$enamn ="";
$telefon="";
$mail ="";
$kortdatum="";
$anteckning ="";
$meddelande="";
$medlemsstart="";
$passantal="";
$nyckelkort="";
$kortet="";


	try{
		$query = "SELECT * FROM medlemmar WHERE kundnr = {$user_check}";
		$stmt = $db ->prepare($query);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC); 
		}
	catch(Exeption $e) {

		echo $e;
		exit;
	}	


	$login_session = $result['kundnr'];

	if(!isset($login_session)){
	$stmt->closeCursor();
	header('Location: minsida_login.php'); // Redirecting To Home Page
	}


		$query = "SELECT * FROM medlemmar WHERE kundnr = {$login_session}";
		$stmt = $db ->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
		$stmt->closeCursor();


	foreach($result as $m){
		$kundnr.= $m['kundnr'];
		$personnr.= $m['personnr'];
		$fnamn .= $m['fnamn'];
		$enamn .= $m['enamn'];
		$telefon .= $m['telefon'];
		$mail .= $m['mail'];
		$anteckning .= $m['anteckning'];
		$medlemsstart .= $m['medlemsstart'];
		$passantal.= $m['passantal'];
		$nyckelkort .= $m['nyckelkort'];


		$query = "SELECT * FROM medlemskort WHERE kundnr = {$login_session} AND aktivtkort=1";
		$stmt = $db ->prepare($query);
		$stmt->execute();
		$kort = $stmt->fetch(PDO::FETCH_ASSOC); 
		$stmt->closeCursor();

		$kort['kort']=$kortet;
		echo $kortet;

		$query = "SELECT korttyp FROM korttyp WHERE kort = '{$kortet}'";
		$stmt = $db ->prepare($query);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC); 
		$korttyp=$result['korttyp'];


	}





?>	