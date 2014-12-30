<?php 
$error="";

if(isset($_POST['login-member'])){

	if (empty($_POST['kundnr'])||empty($_POST['personnr']))
	{
		$error = "Medlemsnummret eller Personnummret är fel!";
	}

	else

	{
	$personnr=$_POST['personnr'];
	$kundnr=$_POST['kundnr'];
	}	


	try{
		$query = "SELECT * FROM medlemmar WHERE kundnr = {$kundnr} AND personnr = {$personnr} ";
		$stmt = $db ->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
		$antalmedlem = $stmt->rowCount(); 
		}
	catch(Exeption $e) {

		echo $e;
		exit;
	}	

		$stmt->closeCursor(); 

		if ($antalmedlem  == 1) {
		$_SESSION['login_user'] = $kundnr; // Initializing Session
		header("location: minsida.php"); // Redirecting To Other Page
		} else {
		$error = "MEDLEMSNUMMRET eller PERSONNUMMRET är fel!";
		}


					

}

?>
