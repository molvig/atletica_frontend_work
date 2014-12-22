<?php 
if(isset($_GET['login-member'])){

$personnr=$_GET['personnr'];
$kundnr=$_GET['kundnr'];

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


try{
					$query = "SELECT * FROM medlemmar WHERE kundnr = {$kundnr} AND personnr = {$personnr} ";
					$stmt = $db ->prepare($query);
					$stmt->execute();
					$result = $stmt->fetchAll(PDO::FETCH_ASSOC); 




					foreach($result as $m){
						$fnamn .= $m['fnamn'];
						$enamn .= $m['enamn'];
						$telefon .= $m['telefon'];
						$mail .= $m['mail'];
						$anteckning .= $m['anteckning'];
						$medlemsstart .= $m['medlemsstart'];
						$passantal.= $m['passantal'];
						$nyckelkort .= $m['nyckelkort'];
					}
					
					$stmt->closeCursor(); 

}

catch(Exeption $e) {

	echo $e;
	exit;
}




}
