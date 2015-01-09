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
$hej="Hej, ";
$today=date('Y-m-d');
$fryskort="";
$status="";


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
		$kundnr = $m['kundnr'];
		$personnr = $m['personnr'];
		$fnamn = $m['fnamn'];
		$enamn = $m['enamn'];
		$telefon = $m['telefon'];
		$mail = $m['mail'];
		$meddelande = $m['meddelande'];
		$medlemsstart = $m['medlemsstart'];
		$passantal = $m['passantal'];
		$nyckelkort = $m['nyckelkort'];


		$day=substr($personnr, 4,6);
		$month=substr($personnr, 2,2);
		$birth='2000-'.$month."-".$day;
		$todaymon=date('d/m');
		$birthday = date('d/m', strtotime($birth));

		if ($todaymon == $birthday)
			{$hej="Grattis på födelsedagen, ";}


		$query = "SELECT * FROM medlemskort WHERE kundnr = {$login_session} AND aktivtkort=1";
		$stmt = $db ->prepare($query);
		$stmt->execute();
		$kort = $stmt->fetch(PDO::FETCH_ASSOC); 
		$stmt->closeCursor();

		$kortet=$kort['kort'];
		$fryst=$kort['fryst'];
		$giltigttill=$kort['giltigttill'];
		$giltigtfran=$kort['giltigtfran'];
		$ag_aktivt=$kort['ag_aktivt'];

		$bindningstid=$kort['bindningsdatum'];

		$query = "SELECT korttyp FROM korttyp WHERE kort = '{$kortet}'";
		$stmt = $db ->prepare($query);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC); 
		$korttyp=$result['korttyp'];


		if ($kortet=="10" && $giltigttill == null){
			$kortgiltigt="Inga klipp gjorda";
		}else if ($giltigttill ==null && $kortet=="INST"){
			$kortgiltigt=""; 
		}else if ($giltigttill ==null ) {
			$kortgiltigt="Inget kort";
		}else{
			$kortgiltigt= date('Y-m-d', strtotime($giltigttill));
		}
		
		
					if ($kortet == "10" ) {
					 	$kortID = $kort['kortID'];
					 	$today = date('Y-m-d');
					 	$antalklipp = $kort['antalklipp'];

					 	if ($giltigttill == null || $giltigttill >= $today){
					 		$klippantal = $antalklipp;

						}else if ($giltigttill < $today){
							if ($antalklipp>10){
								$firstklipp = date('Y-m-d', strtotime($giltigttill. "-6 months")); 
								$query = "SELECT * FROM klipplogg WHERE kortID ={$kortID} AND klipptid <= '$giltigttill' AND klipptid >= '$firstklipp' ";
								$stmt = $db ->prepare($query);
								$stmt->execute();	
								$totalklipp = $stmt->rowCount();
								$raderaklipp = 10 - $totalklipp;
								$klippantal = $antalklipp - $raderaklipp;
								$query = ("UPDATE medlemskort SET antalklipp=:antalklipp, giltigttill=:giltigttill WHERE kundnr={$kundnr} AND aktivtkort=1");
								$q = $db -> prepare($query);
								$q-> execute(array(':antalklipp'=>$klippantal, ':giltigttill'=>null));
							} else {
								$klippantal = 0;
								$query = ("UPDATE medlemskort SET antalklipp=:antalklipp, giltigttill=:giltigttill WHERE kundnr={$kundnr} AND aktivtkort=1");
								$q = $db -> prepare($query);
								$q-> execute(array(':antalklipp'=>0, ':giltigttill'=>null));
							}
						}

					}

if($giltigttill==null && $kortet != "10"){$giltigttill="no";}
else if($giltigttill==null && $kortet == "10"){$giltigttill="klipp";}
else {$giltigttill = $giltigttill;}	

	

	if($fryst==1){$daysleft=" Fryst";}
	else if ($giltigtfran > $today){$daysleft=" Ej börjat gälla";}
	else if ($kortet=="INST"){$daysleft=" Instruktör";}
	else if (($kortet=="AG12" || $kortet=="AG12+2" || $kortet=="AG24" || $kortet=="AG24+2" || $kortet=="AG12DAG") && $ag_aktivt ==1){ $daysleft="Autogiro";} 
	else if ($giltigttill == "no"){$daysleft=" Har inget kort";}
	else if ($giltigttill == "klipp"){$daysleft=" Inget första klipp är gjort";}
	else {$daysleft = ((strtotime("$giltigttill 00:00:00 GMT")-strtotime("$today 00:00:00 GMT")) / 86400) . " dagar kvar"; }
	

       if ($fryst==1)
        { 
       $fryskort= '<div class="alert alert-info">'.'<span class="glyphicon glyphicon-lock"></span> Ditt kort är fryst!</div>';

      } 

       	if ($daysleft=="Ej börjat gälla"){
            $status =  '<div class="alert alert-warning">'.'<span class="glyphicon glyphicon-flag"></span>'.  " Kortet har inte börjat gälla än".'</div>';
           }
        else if ($daysleft=="Autogiro" || $daysleft>0 || $kortet=="10" ||$kortet=="INST"){
            $status=   '<div class="alert alert-success">'.'<span class="glyphicon glyphicon-thumbs-up"></span>'." ". $daysleft.'</div>';
             }
        else if ($fryst==0){
            $status=   '<div class="alert alert-danger">'.'<span class="glyphicon glyphicon-warning-sign"></span>'." ". $daysleft .'</div>' ;
           }



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