<?php	
				
$user_check = $_SESSION['login_user'];
if(!isset($user_check)){
	header('Location: minsida_login.php'); // Kollar om det finns någon medlem inloggad
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
$sent="";


//Hämtar information om medlemmen
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
	header('Location: minsida_login.php'); 
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
		$passantal .= $m['passantal'];
		$nyckelkort .= $m['nyckelkort'];


		$query = "SELECT * FROM medlemskort WHERE kundnr = {$login_session} AND aktivtkort=1";
		$stmt = $db ->prepare($query);
		$stmt->execute();
		$kort = $stmt->fetch(PDO::FETCH_ASSOC); 
		$stmt->closeCursor();

		$kortet=$kort['kort'];
		$fryst=$kort['fryst'];
		$giltigttill=$kort['giltigttill'];
		$bindningstid=$kort['bindningsdatum'];
		$antalklipp=$kort['antalklipp'];

		$query = "SELECT korttyp FROM korttyp WHERE kort = '{$kortet}'";
		$stmt = $db ->prepare($query);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC); 
		$korttyp=$result['korttyp'];


	}


//Uppdatera medlem



if (isset($_POST['uppdatera'])){

	$nytelefonnr=$_POST['phone'];
	$nyemail=$_POST['mail'];

	    try {
       $query = ("UPDATE medlemmar SET telefon=:phone, mail=:mail WHERE kundnr={$kundnr}");
          $q = $db -> prepare($query);
          $q-> execute(array(
                            ':phone'=>$nytelefonnr,
                            ':mail'=>$nyemail

            ));

           $sent ='<h4>' . 'Din uppgifter är nu sparade!' . '</h4>';
          echo "<meta http-equiv=\"refresh\" content=\"1;URL='minsida_uppgifter.php'\" />";   

       } 

    catch (Exception $e) {

      $sent='<h4>' . 'Hoppsan! Det gick inte spara de nya uppgifterna... Var snäll och försök igen.' . '</h4>';
    }
}

?>	