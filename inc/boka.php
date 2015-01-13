<?php

//BOKA MEDLEM



	if(isset($_POST['boka-submit'])){

		if(isset($login_session)){
		
	    $kundnr = $_POST['boka-kundnr'];
		$bokningID = $_POST['boka-passid'];

		$query = "SELECT * FROM bokningsbara WHERE bokningsbarID= {$bokningID}";  
		$stmt = $db ->prepare($query);
		$stmt->execute();
		$plats= $stmt->fetch(PDO::FETCH_ASSOC); 
		$stmt->closeCursor(); 
		$antalplatserna  = $plats['antalplatser'];
		$passdatum  = $plats['datum'];
		$stmt->closeCursor(); 

		$query = "SELECT * FROM bokningar WHERE bokningsbarID= {$bokningID} AND reservplats=0";  
		$stmt = $db ->prepare($query);
		$stmt->execute();
		$antalbokade = $stmt->rowCount(); 
		$stmt->closeCursor(); 

	    if ($antalplatserna > $antalbokade){


				$today = date('Y-m-d');
				$sixdays = date('Y-m-d', strtotime($today. "+ 6 days"));

							$query = "SELECT * FROM medlemmar WHERE kundnr= {$kundnr}";  
							$stmt = $db ->prepare($query);
							$stmt->execute();
							$pass = $stmt->fetch(PDO::FETCH_ASSOC); 
							$stmt->closeCursor(); 
							$passantal = $pass['passantal'];
							$fnamn = $pass['fnamn'];
							$enamn = $pass['enamn'];
							$stmt->closeCursor(); 

							$query = "SELECT * FROM bokningar WHERE kundnr= {$kundnr} AND passdatum <= '{$sixdays}' AND passdatum >= '{$today}' AND incheckad=0  "; 
							$stmt = $db ->prepare($query);
							$stmt->execute();
							$bokningar = $stmt->rowCount();
							$stmt->closeCursor(); 

					if ($bokningar < $passantal){
						try {
							$now=date('Y-m-d H:i:s');
							 $query = ("INSERT INTO bokningar (kundnr, bokningsbarID, passdatum, datum, gastID) VALUES (:kundnr, :bokningsbarID, :passdatum, :datum, :gastID)");
							    $q = $db -> prepare($query);
							    $q-> execute(array(':kundnr'=>$kundnr,
							    					':bokningsbarID'=>$bokningID,
							    					':passdatum'=>$passdatum,
							    					':datum'=>$now,
							    					':gastID'=>null
							    ));

						  	if($query){
							 echo "<meta http-equiv=\"refresh\" content=\"0.5;URL='minsida_bokningar.php'\" />";	
							}
						} 
						catch (Exception $e) {

						 echo '<h4>' . 'Hoppsan! <br> Det gick inte att boka in medlemmen... Försök igen!' . '</h4>';
						 echo "<meta http-equiv=\"refresh\" content=\"0.5;URL='minsida_bokningar.php'\" />";
						}
					
					}else {


					$max = '<script> alert("' ."Du kan bara vara bokad på ". $passantal. " st pass samtidigt!" .'");</script>';
							echo $max;
					echo "<meta http-equiv=\"refresh\" content=\"0.5;URL='minsida_bokningar.php'\" />";	
					}

				}

			}



	else {

			echo "Det är fullt på detta passet!";
			}
		}  




	if(isset($_POST['boka-pass'])){
		$user_check = $_SESSION['login_user'];
		if(!isset($user_check)){
			header('Location: minsida_login.php'); // Kollar om det finns någon medlem inloggad
			}

		else{
		
	    $kundnr = $user_check;
		$bokningID = $_POST['boka-passid'];

		$query = "SELECT * FROM bokningsbara WHERE bokningsbarID= {$bokningID}";  
		$stmt = $db ->prepare($query);
		$stmt->execute();
		$plats= $stmt->fetch(PDO::FETCH_ASSOC); 
		$stmt->closeCursor(); 
		$antalplatserna  = $plats['antalplatser'];
		$passdatum  = $plats['datum'];
		$stmt->closeCursor(); 

		$query = "SELECT * FROM bokningar WHERE bokningsbarID= {$bokningID} AND reservplats=0";  
		$stmt = $db ->prepare($query);
		$stmt->execute();
		$antalbokade = $stmt->rowCount(); 
		$stmt->closeCursor(); 

	    if ($antalplatserna > $antalbokade){


				$today = date('Y-m-d');
				$sixdays = date('Y-m-d', strtotime($today. "+ 6 days"));

							$query = "SELECT * FROM medlemmar WHERE kundnr= {$kundnr}";  
							$stmt = $db ->prepare($query);
							$stmt->execute();
							$pass = $stmt->fetch(PDO::FETCH_ASSOC); 
							$stmt->closeCursor(); 
							$passantal = $pass['passantal'];
							$fnamn = $pass['fnamn'];
							$enamn = $pass['enamn'];
							$stmt->closeCursor(); 

							$query = "SELECT * FROM bokningar WHERE kundnr= {$kundnr} AND passdatum <= '{$sixdays}' AND passdatum >= '{$today}' "; 
							$stmt = $db ->prepare($query);
							$stmt->execute();
							$bokningar = $stmt->rowCount();
							$stmt->closeCursor(); 

					if ($bokningar < $passantal){
						try {
							$now=date('Y-m-d H:i:s');
							 $query = ("INSERT INTO bokningar (kundnr, bokningsbarID, passdatum, datum, gastID) VALUES (:kundnr, :bokningsbarID, :passdatum, :datum, :gastID)");
							    $q = $db -> prepare($query);
							    $q-> execute(array(':kundnr'=>$kundnr,
							    					':bokningsbarID'=>$bokningID,
							    					':passdatum'=>$passdatum,
							    					':datum'=>$now,
							    					':gastID'=>null
							    ));

						  	if($query){
							 echo "<meta http-equiv=\"refresh\" content=\"0.5;URL='minsida.php'\" />";	
							}
						} 
						catch (Exception $e) {

						 echo '<h4>' . 'Hoppsan! <br> Det gick inte att boka in medlemmen... Försök igen!' . '</h4>';
						 echo "<meta http-equiv=\"refresh\" content=\"0.5;URL='minsida.php'\" />";
						}
					
					}else {


					$max = '<script> alert("' ."Du kan bara vara bokad på ". $passantal. " st pass samtidigt!" .'");</script>';
							echo $max;
					echo "<meta http-equiv=\"refresh\" content=\"0.5;URL='minsida.php'\" />";	
					}

				}

			



	else {

			echo "Det är fullt på detta passet!";
			}
	}  

}






//BOKA RESERVPLATS
	if(isset($_POST['reserv-submit'])){
		if(isset($login_session)){

		    $kundnr = $_POST['reserv-kundnr'];
		    $bokningID = $_POST['reserv-passid'];

				$query = "SELECT * FROM bokningsbara WHERE bokningsbarID= {$bokningID}";  
				$stmt = $db ->prepare($query);
				$stmt->execute();
				$plats= $stmt->fetch(PDO::FETCH_ASSOC); 
				$stmt->closeCursor(); 
				$antalplatserna  = $plats['antalplatser'];
				$passdatum  = $plats['datum'];
				$stmt->closeCursor(); 

				$query = "SELECT * FROM bokningar WHERE bokningsbarID= {$bokningID} AND reservplats=0";  
				$stmt = $db ->prepare($query);
				$stmt->execute();
				$antalbokade = $stmt->rowCount(); 
				$stmt->closeCursor(); 


				$today = date('Y-m-d');
				$sixdays = date('Y-m-d', strtotime($today. "+ 6 days"));

							$query = "SELECT * FROM medlemmar WHERE kundnr= {$kundnr}";  
							$stmt = $db ->prepare($query);
							$stmt->execute();
							$pass = $stmt->fetch(PDO::FETCH_ASSOC); 
							$stmt->closeCursor(); 
							$passantal = $pass['passantal'];
							$fnamn = $pass['fnamn'];
							$enamn = $pass['enamn'];
							$mail = $pass['mail'];
							$stmt->closeCursor(); 
					if ($mail==null)	
					{
					$endUrl = "minsida_uppgifter.php";



					$nomail = 	'<script>if(confirm("Du kan inte boka en reservplats utan en e-post! Vill du spara en nu?"))
						{
							window.location.href = "'.$endUrl.'";					
						}
						else
							{
								alert("Ingen reservplats bokades!");
							}
							</script>';

							echo $nomail;
					}	
					else{

							$query = "SELECT * FROM bokningar WHERE kundnr= {$kundnr} AND passdatum <= '{$sixdays}' AND passdatum >= '{$today}' "; 
							$stmt = $db ->prepare($query);
							$stmt->execute();
							$bokningar = $stmt->rowCount();
							$stmt->closeCursor(); 

					if ($bokningar < $passantal){
						try {
							$now=date('Y-m-d H:i:s');
							 $query = ("INSERT INTO bokningar (kundnr, bokningsbarID, passdatum, datum, reservplats, gastID) VALUES (:kundnr, :bokningsbarID, :passdatum, :datum, :reservplats, :gastID)");
							    $q = $db -> prepare($query);
							    $q-> execute(array(':kundnr'=>$kundnr,
							    					':bokningsbarID'=>$bokningID,
							    					':passdatum'=>$passdatum,
							    					':datum'=>$now,
							    					':reservplats'=>1,
							    					':gastID'=>null
							    ));

						  	if($query){
							 echo "<meta http-equiv=\"refresh\" content=\"0.5;URL='minsida_bokningar.php'\" />";	
							}
						} 
						catch (Exception $e) {

						 echo '<h4>' . 'Hoppsan! <br> Det gick inte att boka in medlemmen... Försök igen!' . '</h4>';
						 echo "<meta http-equiv=\"refresh\" content=\"0.5;URL='minsida_bokningar.php'\" />";
						}
					
					}else {

					$max = '<script> alert("' ."Du kan bara vara bokad på ". $passantal. " st pass samtidigt!" .'");</script>';
							echo $max;
					echo "<meta http-equiv=\"refresh\" content=\"0.5;URL='minsida_bokningar.php'\" />";	
					}

				}
				}	

			}

if(isset($_POST['boka-reserv'])){
		$user_check = $_SESSION['login_user'];
		if(!isset($user_check)){
			header('Location: minsida_login.php'); // Kollar om det finns någon medlem inloggad
			}

		else{
		
	    $kundnr = $user_check;
		    $bokningID = $_POST['boka-passid'];

				$query = "SELECT * FROM bokningsbara WHERE bokningsbarID= {$bokningID}";  
				$stmt = $db ->prepare($query);
				$stmt->execute();
				$plats= $stmt->fetch(PDO::FETCH_ASSOC); 
				$stmt->closeCursor(); 
				$antalplatserna  = $plats['antalplatser'];
				$passdatum  = $plats['datum'];
				$stmt->closeCursor(); 

				$query = "SELECT * FROM bokningar WHERE bokningsbarID= {$bokningID} AND reservplats=0";  
				$stmt = $db ->prepare($query);
				$stmt->execute();
				$antalbokade = $stmt->rowCount(); 
				$stmt->closeCursor(); 


				$today = date('Y-m-d');
				$sixdays = date('Y-m-d', strtotime($today. "+ 6 days"));

							$query = "SELECT * FROM medlemmar WHERE kundnr= {$kundnr}";  
							$stmt = $db ->prepare($query);
							$stmt->execute();
							$pass = $stmt->fetch(PDO::FETCH_ASSOC); 
							$stmt->closeCursor(); 
							$passantal = $pass['passantal'];
							$fnamn = $pass['fnamn'];
							$enamn = $pass['enamn'];
							$mail = $pass['mail'];
							$stmt->closeCursor(); 
					if ($mail==null)	
					{
					$endUrl = "minsida_uppgifter.php";



					$nomail = 	'<script>if(confirm("Du kan inte boka en reservplats utan en e-post! Vill du spara en nu?"))
						{
							window.location.href = "'.$endUrl.'";					
						}
						else
							{
								alert("Ingen reservplats bokades!");
							}
							</script>';

							echo $nomail;
					}	
					else{

							$query = "SELECT * FROM bokningar WHERE kundnr= {$kundnr} AND passdatum <= '{$sixdays}' AND passdatum >= '{$today}' "; 
							$stmt = $db ->prepare($query);
							$stmt->execute();
							$bokningar = $stmt->rowCount();
							$stmt->closeCursor(); 

					if ($bokningar < $passantal){
						try {
							$now=date('Y-m-d H:i:s');
							 $query = ("INSERT INTO bokningar (kundnr, bokningsbarID, passdatum, datum, reservplats, gastID) VALUES (:kundnr, :bokningsbarID, :passdatum, :datum, :reservplats, :gastID)");
							    $q = $db -> prepare($query);
							    $q-> execute(array(':kundnr'=>$kundnr,
							    					':bokningsbarID'=>$bokningID,
							    					':passdatum'=>$passdatum,
							    					':datum'=>$now,
							    					':reservplats'=>1,
							    					':gastID'=>null
							    ));

						  	if($query){
							 echo "<meta http-equiv=\"refresh\" content=\"0.5;URL='minsida_bokningar.php'\" />";	
							}
						} 
						catch (Exception $e) {

						 echo '<h4>' . 'Hoppsan! <br> Det gick inte att boka in medlemmen... Försök igen!' . '</h4>';
						 echo "<meta http-equiv=\"refresh\" content=\"0.5;URL='minsida_bokningar.php'\" />";
						}
					
					}else {

					$max = '<script> alert("' ."Du kan bara vara bokad på ". $passantal. " st pass samtidigt!" .'");</script>';
							echo $max;
					echo "<meta http-equiv=\"refresh\" content=\"0.5;URL='minsida_bokningar.php'\" />";	
					}

				}
				}	




}

			



//AVBOKA MEDLEM
	if(isset($_POST['avboka-submit'])){
		    $kundnr = $_POST['avboka-kundnr'];
		    $bokningID = $_POST['avboka-passid'];



			   try {
			          $query = ("DELETE from bokningar WHERE kundnr = {$kundnr} AND bokningsbarID = {$bokningID} ");
			          $q = $db -> prepare($query);
			          $q-> execute();

			          		$query = "SELECT * FROM bokningsbara WHERE bokningsbarID= {$bokningID}";  
							$stmt = $db ->prepare($query);
							$stmt->execute();
							$plats= $stmt->fetch(PDO::FETCH_ASSOC); 
							$stmt->closeCursor(); 
							$antalplatserna  = $plats['antalplatser'];
							$passdatum  = $plats['datum'];
							$stmt->closeCursor(); 

							$query = "SELECT * FROM bokningar WHERE bokningsbarID= {$bokningID} AND reservplats=0";  
							$stmt = $db ->prepare($query);
							$stmt->execute();
							$antalbokade = $stmt->rowCount(); 
							$stmt->closeCursor(); 


			          	if ($antalplatserna > $antalbokade){
			                try {
			                $query=("SELECT * FROM bokningar WHERE bokningsbarID = {$bokningID} AND reservplats=1 ORDER BY datum ASC LIMIT 1");
			                $stmt = $db ->prepare($query);
			                $stmt->execute();
			                $reserver = $stmt->rowCount(); 
			                $result = ($stmt->fetchAll(PDO::FETCH_ASSOC)); 
			                $stmt->closeCursor(); 
			                $nyastkund="";
			                  foreach ($result as $row) {
			                    $nyastkund = $row['kundnr'];
			                  }
			                }

			                catch (Exception $e) {

			                echo '<center>' . '<h4>' . 'Det gick inte hämta från reservlistan' . '</h4>' . '</center>';
			                }

			               if ($reserver>0 ){
			              try {
			               $query = ("UPDATE bokningar SET reservplats=:reservplats WHERE kundnr = {$nyastkund} AND bokningsbarID = {$bokningID}");
			               $q = $db -> prepare($query);
			               $q-> execute(array(':reservplats'=>0)); 
			              $stmt->closeCursor();  

			              	if($query){
			              	$query=("SELECT * FROM medlemmar WHERE kundnr= {$nyastkund}");
			                $stmt = $db ->prepare($query);
			                $stmt->execute();
			                $reserver = $stmt->rowCount(); 
			                $mem = ($stmt->fetch(PDO::FETCH_ASSOC)); 
			                $stmt->closeCursor(); 

			                $fnamn=$mem['fnamn'];
							$mail=$mem['mail'];

							$query=("SELECT * FROM bokningsbara WHERE bokningsbarID= {$bokningID}");
			                $stmt = $db ->prepare($query);
			                $stmt->execute();
			                $reserver = $stmt->rowCount(); 
			                $pass = ($stmt->fetch(PDO::FETCH_ASSOC)); 
			                $stmt->closeCursor(); 

			                $passnamn=$pass['passnamn'];
							$starttid=date('H:i',strtotime($pass['starttid']));
							$passdatum = $pass['datum'];


					  		$to = $mail;
							$subject = $passnamn.  "på Atletica";
							$txt = "
							<html>
							<head>
							<title>Gruppträning Atletica</title>
							</head>
							<body>
							<h4>Hej, ".$fnamn."!</h4>
							<p>Du har fått en plats på  ".$passnamn. " ". $passdatum. " som börjar kl ".$starttid." </p>
							<p>Var snäll och kom senast 10 minuter innan passet startar för att inte riskera att förlora din plats.</p>

							<h4>Avbokning</h4>
							<p>Om du skulle få förhinder och vill avboka din plats måste detta göras senast TVÅ timmar
							innan passet startar. Annars får du en skuld som kan lösas för 40kr.</p>
							<p>Kontakta oss på telefon: 0340-14703</p>

							<h4>Välommen!<br>
							Hälsningar, Atletica <br>

							www.atletica.se
							</h4>
							</body>
							</html>
							" ;

							// Always set content-type when sending HTML email
							$headers = "MIME-Version: 1.0" . "\r\n";
							$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

							// More headers
							$headers .= 'From: Atletica <info@atletica.se>' . "\r\n";


							mail($to,$subject,$txt,$headers); 


			              	}

			                
			                } 

			               
			              catch (Exception $e) {

			                echo '<center>' . '<h4>' . 'Det gick inte att boka in från reservlistan' . '</h4>' . '</center>';

			              }
			          }
			    }

			echo "<meta http-equiv=\"refresh\" content=\"0.5;URL='minsida.php'\" />";
			}
			catch (Exception $e) {

                echo '<center>' . '<h4>' . 'Det gick inte att avboka passet' . '</h4>' . '</center>';
              }

	}


if(isset($_POST['avbokabok-submit'])){
		    $kundnr = $_POST['avboka-kundnr'];
		    $bokningID = $_POST['avboka-passid'];



			   try {
			          $query = ("DELETE from bokningar WHERE kundnr = {$kundnr} AND bokningsbarID = {$bokningID} ");
			          $q = $db -> prepare($query);
			          $q-> execute();

			          		$query = "SELECT * FROM bokningsbara WHERE bokningsbarID= {$bokningID}";  
							$stmt = $db ->prepare($query);
							$stmt->execute();
							$plats= $stmt->fetch(PDO::FETCH_ASSOC); 
							$stmt->closeCursor(); 
							$antalplatserna  = $plats['antalplatser'];
							$passdatum  = $plats['datum'];
							$stmt->closeCursor(); 

							$query = "SELECT * FROM bokningar WHERE bokningsbarID= {$bokningID} AND reservplats=0";  
							$stmt = $db ->prepare($query);
							$stmt->execute();
							$antalbokade = $stmt->rowCount(); 
							$stmt->closeCursor(); 


			          	if ($antalplatserna > $antalbokade){
			                try {
			                $query=("SELECT * FROM bokningar WHERE bokningsbarID = {$bokningID} AND reservplats=1 ORDER BY datum ASC LIMIT 1");
			                $stmt = $db ->prepare($query);
			                $stmt->execute();
			                $reserver = $stmt->rowCount(); 
			                $result = ($stmt->fetchAll(PDO::FETCH_ASSOC)); 
			                $stmt->closeCursor(); 
			                $nyastkund="";
			                  foreach ($result as $row) {
			                    $nyastkund = $row['kundnr'];
			                  }
			                }

			                catch (Exception $e) {

			                echo '<center>' . '<h4>' . 'Det gick inte hämta från reservlistan' . '</h4>' . '</center>';
			                echo $e;
			                }

			               if ($reserver>0 ){
			              try {
			               $query = ("UPDATE bokningar SET reservplats=:reservplats WHERE kundnr = {$nyastkund} AND bokningsbarID = {$bokningID}");
			               $q = $db -> prepare($query);
			               $q-> execute(array(':reservplats'=>0)); 
			              $stmt->closeCursor();  

			              	if($query){
			              	$query=("SELECT * FROM medlemmar WHERE kundnr= {$nyastkund}");
			                $stmt = $db ->prepare($query);
			                $stmt->execute();
			                $reserver = $stmt->rowCount(); 
			                $mem = ($stmt->fetch(PDO::FETCH_ASSOC)); 
			                $stmt->closeCursor(); 

			                $fnamn=$mem['fnamn'];
							$mail=$mem['mail'];

							$query=("SELECT * FROM bokningsbara WHERE bokningsbarID= {$bokningID}");
			                $stmt = $db ->prepare($query);
			                $stmt->execute();
			                $reserver = $stmt->rowCount(); 
			                $pass = ($stmt->fetch(PDO::FETCH_ASSOC)); 
			                $stmt->closeCursor(); 

			                $passnamn=$pass['passnamn'];
							$starttid=date('H:i',strtotime($pass['starttid']));
							$passdatum = $pass['datum'];


					  		$to = $mail;
							$subject = $passnamn.  "på Atletica";
							$txt = "
							<html>
							<head>
							<title>Gruppträning Atletica</title>
							</head>
							<body>
							<h4>Hej, ".$fnamn."!</h4>
							<p>Du har fått en plats på  ".$passnamn. " ". $passdatum. " som börjar kl ".$starttid." </p>
							<p>Var snäll och kom senast 10 minuter innan passet startar för att inte riskera att förlora din plats.</p>

							<h4>Avbokning</h4>
							<p>Om du skulle få förhinder och vill avboka din plats måste detta göras senast TVÅ timmar
							innan passet startar. Annars får du en skuld som kan lösas för 40kr.</p>
							<p>Kontakta oss på telefon: 0340-14703</p>

							<h4>Välommen!<br>
							Hälsningar, Atletica <br>

							www.atletica.se
							</h4>
							</body>
							</html>
							" ;

							// Always set content-type when sending HTML email
							$headers = "MIME-Version: 1.0" . "\r\n";
							$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

							// More headers
							$headers .= 'From: Atletica <info@atletica.se>' . "\r\n";


							mail($to,$subject,$txt,$headers); 


			              	}

			                
			                } 

			               
			              catch (Exception $e) {

			                echo '<center>' . '<h4>' . 'Det gick inte att boka in från reservlistan' . '</h4>' . '</center>';

			              }
			          }
			    }


			echo "<meta http-equiv=\"refresh\" content=\"0.5;URL='minsida_bokningar.php'\" />";
			}
			catch (Exception $e) {

                echo '<center>' . '<h4>' . 'Det gick inte att avboka passet' . '</h4>' . '</center>';
              }

	}







?>