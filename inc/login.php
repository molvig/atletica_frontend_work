<?php 
$error="";
$kundnr="";
$personnr="";

if(isset($_POST['login-member'])){

	if (empty($_POST['kundnr'])||!isset($_POST['personnr']))
	{
		$error = "Det ser ut som att du har missat att fylla i kundnummer eller personnummer!";

	}

	else

	{
	$personnr=$_POST['personnr'];
	$kundnr=$_POST['kundnr'];
	


	try{
		$query = "SELECT * FROM medlemmar WHERE kundnr = {$kundnr} AND personnr = {$personnr} ";
		$stmt = $db ->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
		$antalmedlem = $stmt->rowCount(); 
		}
	catch(Exeption $e) {

  echo "Något är fel! Försök igen eller kontakta Atletica.";
  exit;
	}	

		$stmt->closeCursor(); 

		if ($antalmedlem  == 1) {
		$_SESSION['login_user'] = $kundnr; // Initializing Session
		header("location: minsida.php"); // Redirecting To Other Page
		} else {
		$error = "Kundnumret eller personnumret är fel. Försök igen! Om du inte får ordning på problemet kontakta Atletica. ";
		}


		}				

}

?>
