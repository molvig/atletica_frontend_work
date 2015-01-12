<?php

try{
			$query = "SELECT * FROM Instruk order by fnamn";
			$stmt = $db ->prepare($query);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC); 

$inst="";


			foreach($result as $m){
				$fnamn = $m['fnamn'];
				$enamn = $m['enamn'];
				$pass = $m['pass'];
				$bild = $m['bild'];

			$inst .= 
				'<div class="inst_1">'.
					'<div class="instruktor">'.
						'<div class="inst">'.
							'<img src="'. $bild .'"'. 'alt="..."'. 'class="img-rounded">'.
						'</div>'.	
						'<div class="inst">'.
							'<br>'.
							  '<h3><strong>'. $fnamn .'</strong>'. "<br>". $enamn .'</h3>'.
							  '<h5>'.$pass . '</h5>'.
						'</div>	
					</div>	
				</div>';

			}
			
			$stmt->closeCursor(); 

}

catch(Exeption $e) {

	exit;
}

?>