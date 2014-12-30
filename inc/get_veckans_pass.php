<?php

$pass="";
$veckodag="";
$veckdag="";
$datum="";
$dagspass="";
$dagspass1="";
$dagspass2="";
$dagspass3="";
$dagspass4="";
$dagspass5="";
$dagspass6="";




$today = date('Y-m-d');
if (date('N', strtotime($today))==1) {$veckodag="Måndag";}
else if (date('N', strtotime($today))==2) {$veckodag="Tisdag";}
else if (date('N', strtotime($today))==3) {$veckodag="Onsdag";}
else if (date('N', strtotime($today))==4) {$veckodag="Torsdag";}
else if (date('N', strtotime($today))==5) {$veckodag="Fredag";}
else if (date('N', strtotime($today))==6) {$veckodag="Lördag";}
else if (date('N', strtotime($today))==7) {$veckodag="Söndag";}

$oneday = date('Y-m-d', strtotime($today . ' + 1 day'));
if (date('N', strtotime($oneday))==1) {$veckodag1="Måndag";}
else if (date('N', strtotime($oneday))==2) {$veckodag1="Tisdag";}
else if (date('N', strtotime($oneday))==3) {$veckodag1="Onsdag";}
else if (date('N', strtotime($oneday))==4) {$veckodag1="Torsdag";}
else if (date('N', strtotime($oneday))==5) {$veckodag1="Fredag";}
else if (date('N', strtotime($oneday))==6) {$veckodag1="Lördag";}
else if (date('N', strtotime($oneday))==7) {$veckodag1="Söndag";}

$twoday = date('Y-m-d', strtotime($today . ' + 2 day'));
if (date('N', strtotime($twoday))==1) {$veckodag2="Måndag";}
else if (date('N', strtotime($twoday))==2) {$veckodag2="Tisdag";}
else if (date('N', strtotime($twoday))==3) {$veckodag2="Onsdag";}
else if (date('N', strtotime($twoday))==4) {$veckodag2="Torsdag";}
else if (date('N', strtotime($twoday))==5) {$veckodag2="Fredag";}
else if (date('N', strtotime($twoday))==6) {$veckodag2="Lördag";}
else if (date('N', strtotime($twoday))==7) {$veckodag2="Söndag";}

$threeday = date('Y-m-d', strtotime($today . ' + 3 day'));
if (date('N', strtotime($threeday))==1) {$veckodag3="Måndag";}
else if (date('N', strtotime($threeday))==2) {$veckodag3="Tisdag";}
else if (date('N', strtotime($threeday))==3) {$veckodag3="Onsdag";}
else if (date('N', strtotime($threeday))==4) {$veckodag3="Torsdag";}
else if (date('N', strtotime($threeday))==5) {$veckodag3="Fredag";}
else if (date('N', strtotime($threeday))==6) {$veckodag3="Lördag";}
else if (date('N', strtotime($threeday))==7) {$veckodag3="Söndag";}

$fourday = date('Y-m-d', strtotime($today . ' + 4 day'));
if (date('N', strtotime($fourday))==1) {$veckodag4="Måndag";}
else if (date('N', strtotime($fourday))==2) {$veckodag4="Tisdag";}
else if (date('N', strtotime($fourday))==3) {$veckodag4="Onsdag";}
else if (date('N', strtotime($fourday))==4) {$veckodag4="Torsdag";}
else if (date('N', strtotime($fourday))==5) {$veckodag4="Fredag";}
else if (date('N', strtotime($fourday))==6) {$veckodag4="Lördag";}
else if (date('N', strtotime($fourday))==7) {$veckodag4="Söndag";}

$fiveday = date('Y-m-d', strtotime($today . ' + 5 day'));
if (date('N', strtotime($fiveday))==1) {$veckodag5="Måndag";}
else if (date('N', strtotime($fiveday))==2) {$veckodag5="Tisdag";}
else if (date('N', strtotime($fiveday))==3) {$veckodag5="Onsdag";}
else if (date('N', strtotime($fiveday))==4) {$veckodag5="Torsdag";}
else if (date('N', strtotime($fiveday))==5) {$veckodag5="Fredag";}
else if (date('N', strtotime($fiveday))==6) {$veckodag5="Lördag";}
else if (date('N', strtotime($fiveday))==7) {$veckodag5="Söndag";}

$sixday = date('Y-m-d', strtotime($today . ' + 6 day'));
if (date('N', strtotime($sixday))==1) {$veckodag6="Måndag";}
else if (date('N', strtotime($sixday))==2) {$veckodag6="Tisdag";}
else if (date('N', strtotime($sixday))==3) {$veckodag6="Onsdag";}
else if (date('N', strtotime($sixday))==4) {$veckodag6="Torsdag";}
else if (date('N', strtotime($sixday))==5) {$veckodag6="Fredag";}
else if (date('N', strtotime($sixday))==6) {$veckodag6="Lördag";}
else if (date('N', strtotime($sixday))==7) {$veckodag6="Söndag";}





try {
	$sql ="SELECT * FROM bokningsbara WHERE datum >= '{$today}' AND datum <= '{$sixday}' ORDER BY datum ASC, TIME_FORMAT(starttid, '%H:%i')";
	//$sql ="SELECT * FROM bokningsbara WHERE datum >= '2014-09-01' AND datum <= '2014-09-07' ORDER BY datum ASC, TIME_FORMAT(starttid, '%H:%i')";
	$results = $db -> prepare ($sql);
	$results->execute();
  $sc = ($results -> fetchAll(PDO::FETCH_ASSOC));
  $results->closeCursor();
   } 

catch (Exception $e) {
	echo $e;
  }


	foreach ($sc as $row) 
{	

  try {
  	$sql ="SELECT * FROM bokningar, bokningsbara WHERE bokningar.bokningsbarID =  bokningsbara.bokningsbarID AND bokningar.bokningsbarID = {$row['bokningsbarID']} AND reservplats=0";
    $stmt = $db ->prepare($sql);
    $stmt->execute();

    $antal = $stmt->rowCount(); 
	} 

  catch (Exception $e) {
  	echo $e;
  }


  $antalplatser = $row['antalplatser'];
  if($row['installt']==1){$install="<strong style='color:#DF007B;'>". " INSTÄLLT!". "</strong>";}
  else {$install="";}
  if($row['uppdaterad']==1){$uppdat="<span style='color:#DF007B; font-size:18px;'". 'class="glyphicon glyphicon-flag"></span>';}
  else {$uppdat="";}

  //Hämtar passinformation


  if (date('Y-m-d', strtotime($row['datum'])) == $today){	
      	$passnamn=$row['passnamn'];
      	$query = "SELECT * FROM pass WHERE passnamn = '{$passnamn}'";  
      	$stmt = $db ->prepare($query);
      	$stmt->execute();
      	$result = $stmt->fetch(PDO::FETCH_ASSOC); 
      	$stmt->closeCursor(); 
      	$passbe = $result['passbeskrivning'];
        

        if ($row['installt']==1){
          $dagspass .= 
              '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-heading">'.
                    '<h5 class="panel-title-index">'.              
                     '<del>'. '<strong>'. date('H:i', strtotime($row['starttid'])).'</strong>' ." ". $row['passnamn'].'</del>'. $install.          
                    '</h5>
                  </div>
                   </a>'.
              '</div>
              </div>';   
        }   
        else if($row['extrapass']==1) {
          $dagspass .=
              '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-extra"">'.
                    '<h5 class="panel-title-index">'.              
                    '<span style="color:#FFF; font-size:18px;" class="glyphicon glyphicon-star-empty"></span>'." ".   '<strong>'. date('H:i', strtotime($row['starttid'])).'</strong>' ." ". $row['passnamn'].          
                    '</h5>
                  </div>
                   </a>'.
                  '<div id="'.$row['bokningsbarID'].'"'. 'class="panel-collapse collapse">'.
                    '<div class="panel-body">'.
                      $passbe. 
                        '<button type="submit" '.'name="boka-pass"' .'class="btn btn-default_1">Boka</button>
                  </div>
                </div>
              </div>
              </div>';  
        } 
        else {
      		if 	($antal<$antalplatser){
      		  $dagspass .=
              '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-heading">'.
                    '<h5 class="panel-title-index">'.              
                      $uppdat. " ".  '<strong>'. date('H:i', strtotime($row['starttid'])).'</strong>' ." ". $row['passnamn'].         
                    '</h5>
                  </div>
                   </a>'.
                  '<div id="'.$row['bokningsbarID'].'"'. 'class="panel-collapse collapse">'.
                    '<div class="panel-body">'.
                      $passbe. 
                        '<button type="submit" '.'name="boka-pass"'.'class="btn btn-default_1">Boka</button>
                    </div>
                    </div>
                </div>
              </div>';  		
      		}
          else if ($antal>=$antalplatser){
      			$dagspass .= 
      					      '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-heading">'.
                    '<h4 class="panel-title-index">'.              
                      $uppdat. " ". date('H:i', strtotime($row['starttid'])) ." ". $row['passnamn']. ' <p style="float:right; color:#DF007B;">' . "FULLT! ". "</p>".        
                    '</h4>
                  </div>
                   </a>'.
                  '<div id="'.$row['bokningsbarID'].'"'. 'class="panel-collapse collapse">'.
                    '<div class="panel-body">'.
                      $passbe. 
                        '<button type="submit" '.'name="boka-pass"'.'class="btn btn-default_1">Boka</button>
                    </div>
                  </div>
                </div>
                </div>';
          }
        } 
  }  

  if (date('Y-m-d', strtotime($row['datum'])) == $oneday){		
  			$passnamn=$row['passnamn'];
  			$query = "SELECT * FROM pass WHERE passnamn = '{$passnamn}'";  
  			$stmt = $db ->prepare($query);
  			$stmt->execute();
  			$result = $stmt->fetch(PDO::FETCH_ASSOC); 
  			$stmt->closeCursor(); 
  			$passbe = $result['passbeskrivning'];
        
        if ($row['installt']==1){
          $dagspass1 .= 
              '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-heading">'.
                    '<h5 class="panel-title-index">'.              
                     '<del>'. '<strong>'. date('H:i', strtotime($row['starttid'])).'</strong>' ." ". $row['passnamn'].'</del>'. $install.          
                    '</h5>
                  </div>
                   </a>'.
              '</div>
              </div>';  
        }   
        else if($row['extrapass']==1) {
          $dagspass1 .=
              '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-extra"">'.
                    '<h5 class="panel-title-index">'.              
                    '<span style="color:#FFF; font-size:18px;" class="glyphicon glyphicon-star-empty"></span>'." ".   '<strong>'. date('H:i', strtotime($row['starttid'])).'</strong>' ." ". $row['passnamn'].          
                    '</h5>
                  </div>
                   </a>'.
                  '<div id="'.$row['bokningsbarID'].'"'. 'class="panel-collapse collapse">'.
                    '<div class="panel-body">'.
                      $passbe. 
                        '<button type="submit" '.'name="boka-pass"' .'class="btn btn-default_1">Boka</button>
                  </div>
                </div>
              </div>
              </div>';  

        } 
        else {
          if  ($antal<$antalplatser){
          $dagspass1 .=
              '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-heading">'.
                    '<h5 class="panel-title-index">'.              
                      $uppdat. " ".  '<strong>'. date('H:i', strtotime($row['starttid'])).'</strong>' ." ". $row['passnamn'].         
                    '</h5>
                  </div>
                   </a>'.
                  '<div id="'.$row['bokningsbarID'].'"'. 'class="panel-collapse collapse">'.
                    '<div class="panel-body">'.
                      $passbe. 
                        '<button type="submit" '.'name="boka-pass"'.'class="btn btn-default_1">Boka</button>
                    </div>
                    </div>
                </div>
              </div>';      
            }
            else if ($antal>=$antalplatser){
            $dagspass1 .= 
                      '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-heading">'.
                    '<h4 class="panel-title-index">'.              
                      $uppdat. " ". date('H:i', strtotime($row['starttid'])) ." ". $row['passnamn']. ' <p style="float:right; color:#DF007B;">' . "FULLT! ". "</p>".        
                    '</h4>
                  </div>
                   </a>'.
                  '<div id="'.$row['bokningsbarID'].'"'. 'class="panel-collapse collapse">'.
                    '<div class="panel-body">'.
                      $passbe. 
                        '<button type="submit" '.'name="boka-pass"'.'class="btn btn-default_1">Boka</button>
                    </div>
                  </div>
                </div>
                </div>';
            }

        }  
  }

  if (date('Y-m-d', strtotime($row['datum'])) == $twoday){		
      	$passnamn=$row['passnamn'];
      	$query = "SELECT * FROM pass WHERE passnamn = '{$passnamn}'";  
      	$stmt = $db ->prepare($query);
      	$stmt->execute();
      	$result = $stmt->fetch(PDO::FETCH_ASSOC); 
      	$stmt->closeCursor(); 
      	$passbe = $result['passbeskrivning'];

        if ($row['installt']==1){
          $dagspass2 .= 
              '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-heading">'.
                    '<h5 class="panel-title-index">'.              
                     '<del>'. '<strong>'. date('H:i', strtotime($row['starttid'])).'</strong>' ." ". $row['passnamn'].'</del>'. $install.          
                    '</h5>
                  </div>
                   </a>'.
              '</div>
              </div>';  
        }   
        else if($row['extrapass']==1) {
          $dagspass2 .=
              '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-extra"">'.
                    '<h5 class="panel-title-index">'.              
                    '<span style="color:#FFF; font-size:18px;" class="glyphicon glyphicon-star-empty"></span>'." ".   '<strong>'. date('H:i', strtotime($row['starttid'])).'</strong>' ." ". $row['passnamn'].          
                    '</h5>
                  </div>
                   </a>'.
                  '<div id="'.$row['bokningsbarID'].'"'. 'class="panel-collapse collapse">'.
                    '<div class="panel-body">'.
                      $passbe. 
                        '<button type="submit" '.'name="boka-pass"' .'class="btn btn-default_1">Boka</button>
                  </div>
                </div>
              </div>
              </div>';   
        } 
        else {
          if  ($antal<$antalplatser){
            $dagspass2 .=
              '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-heading">'.
                    '<h5 class="panel-title-index">'.              
                      $uppdat. " ".  '<strong>'. date('H:i', strtotime($row['starttid'])).'</strong>' ." ". $row['passnamn'].         
                    '</h5>
                  </div>
                   </a>'.
                  '<div id="'.$row['bokningsbarID'].'"'. 'class="panel-collapse collapse">'.
                    '<div class="panel-body">'.
                      $passbe. 
                        '<button type="submit" '.'name="boka-pass"'.'class="btn btn-default_1">Boka</button>
                    </div>
                    </div>
                </div>
              </div>';      
            }
          else if ($antal>=$antalplatser){
            $dagspass2 .= 
                      '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-heading">'.
                    '<h4 class="panel-title-index">'.              
                      $uppdat. " ". date('H:i', strtotime($row['starttid'])) ." ". $row['passnamn']. ' <p style="float:right; color:#DF007B;">' . "FULLT! ". "</p>".        
                    '</h4>
                  </div>
                   </a>'.
                  '<div id="'.$row['bokningsbarID'].'"'. 'class="panel-collapse collapse">'.
                    '<div class="panel-body">'.
                      $passbe. 
                        '<button type="submit" '.'name="boka-pass"'.'class="btn btn-default_1">Boka</button>
                    </div>
                  </div>
                </div>
                </div>';
            }
        } 
  } 

  if (date('Y-m-d', strtotime($row['datum'])) == $threeday)
  	{
      	$passnamn=$row['passnamn'];
      	$query = "SELECT * FROM pass WHERE passnamn = '{$passnamn}'";  
      	$stmt = $db ->prepare($query);
      	$stmt->execute();
      	$result = $stmt->fetch(PDO::FETCH_ASSOC); 
      	$stmt->closeCursor(); 
      	$passbe = $result['passbeskrivning'];

        if ($row['installt']==1){
          $dagspass3 .= 
              '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-heading">'.
                    '<h5 class="panel-title-index">'.              
                     '<del>'. '<strong>'. date('H:i', strtotime($row['starttid'])).'</strong>' ." ". $row['passnamn'].'</del>'. $install.          
                    '</h5>
                  </div>
                   </a>'.
              '</div>
              </div>';   
        }   
        else if($row['extrapass']==1) {
          $dagspass3 .=
              '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-extra"">'.
                    '<h5 class="panel-title-index">'.              
                    '<span style="color:#FFF; font-size:18px;" class="glyphicon glyphicon-star-empty"></span>'." ".   '<strong>'. date('H:i', strtotime($row['starttid'])).'</strong>' ." ". $row['passnamn'].          
                    '</h5>
                  </div>
                   </a>'.
                  '<div id="'.$row['bokningsbarID'].'"'. 'class="panel-collapse collapse">'.
                    '<div class="panel-body">'.
                      $passbe. 
                        '<button type="submit" '.'name="boka-pass"' .'class="btn btn-default_1">Boka</button>
                  </div>
                </div>
              </div>
              </div>';   
        } 
        else {
          if  ($antal<$antalplatser){
            $dagspass3 .=
              '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-heading">'.
                    '<h5 class="panel-title-index">'.              
                      $uppdat. " ".  '<strong>'. date('H:i', strtotime($row['starttid'])).'</strong>' ." ". $row['passnamn'].         
                    '</h5>
                  </div>
                   </a>'.
                  '<div id="'.$row['bokningsbarID'].'"'. 'class="panel-collapse collapse">'.
                    '<div class="panel-body">'.
                      $passbe. 
                        '<button type="submit" '.'name="boka-pass"'.'class="btn btn-default_1">Boka</button>
                    </div>
                    </div>
                </div>
              </div>';       
          }
          else if ($antal>=$antalplatser){
              $dagspass3 .= 
                      '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-heading">'.
                    '<h4 class="panel-title-index">'.              
                      $uppdat. " ". date('H:i', strtotime($row['starttid'])) ." ". $row['passnamn']. ' <p style="float:right; color:#DF007B;">' . "FULLT! ". "</p>".        
                    '</h4>
                  </div>
                   </a>'.
                  '<div id="'.$row['bokningsbarID'].'"'. 'class="panel-collapse collapse">'.
                    '<div class="panel-body">'.
                      $passbe. 
                        '<button type="submit" '.'name="boka-pass"'.'class="btn btn-default_1">Boka</button>
                    </div>
                  </div>
                </div>
                </div>';
          }
        } 
  }

  if (date('Y-m-d', strtotime($row['datum'])) == $fourday)
    {	
      	$passnamn=$row['passnamn'];
      	$query = "SELECT * FROM pass WHERE passnamn = '{$passnamn}'";  
      	$stmt = $db ->prepare($query);
      	$stmt->execute();
      	$result = $stmt->fetch(PDO::FETCH_ASSOC); 
      	$stmt->closeCursor(); 
      	$passbe = $result['passbeskrivning'];

        if ($row['installt']==1){
          $dagspass4 .= 
              '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-heading">'.
                    '<h5 class="panel-title-index">'.              
                     '<del>'. '<strong>'. date('H:i', strtotime($row['starttid'])).'</strong>' ." ". $row['passnamn'].'</del>'. $install.          
                    '</h5>
                  </div>
                   </a>'.
              '</div>
              </div>';    
        }  
        else if($row['extrapass']==1) {
          $dagspass4 .=
              '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-extra"">'.
                    '<h5 class="panel-title-index">'.              
                    '<span style="color:#FFF; font-size:18px;" class="glyphicon glyphicon-star-empty"></span>'." ".   '<strong>'. date('H:i', strtotime($row['starttid'])).'</strong>' ." ". $row['passnamn'].          
                    '</h5>
                  </div>
                   </a>'.
                  '<div id="'.$row['bokningsbarID'].'"'. 'class="panel-collapse collapse">'.
                    '<div class="panel-body">'.
                      $passbe. 
                        '<button type="submit" '.'name="boka-pass"' .'class="btn btn-default_1">Boka</button>
                  </div>
                </div>
              </div>
              </div>';   
        } 
        else {
          if  ($antal<$antalplatser){
            $dagspass4 .=
              '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-heading">'.
                    '<h5 class="panel-title-index">'.              
                      $uppdat. " ".  '<strong>'. date('H:i', strtotime($row['starttid'])).'</strong>' ." ". $row['passnamn'].         
                    '</h5>
                  </div>
                   </a>'.
                  '<div id="'.$row['bokningsbarID'].'"'. 'class="panel-collapse collapse">'.
                    '<div class="panel-body">'.
                      $passbe. 
                        '<button type="submit" '.'name="boka-pass"'.'class="btn btn-default_1">Boka</button>
                    </div>
                    </div>
                </div>
              </div>';       
           }
          else if ($antal>=$antalplatser){
              $dagspass4 .= 
                      '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-heading">'.
                    '<h4 class="panel-title-index">'.              
                      $uppdat. " ". date('H:i', strtotime($row['starttid'])) ." ". $row['passnamn']. ' <p style="float:right; color:#DF007B;">' . "FULLT! ". "</p>".        
                    '</h4>
                  </div>
                   </a>'.
                  '<div id="'.$row['bokningsbarID'].'"'. 'class="panel-collapse collapse">'.
                    '<div class="panel-body">'.
                      $passbe. 
                        '<button type="submit" '.'name="boka-pass"'.'class="btn btn-default_1">Boka</button>
                    </div>
                  </div>
                </div>
                </div>';
            }
        }  
  }
  	
  if (date('Y-m-d', strtotime($row['datum'])) == $fiveday){	
      	$passnamn=$row['passnamn'];
      	$query = "SELECT * FROM pass WHERE passnamn = '{$passnamn}'";  
      	$stmt = $db ->prepare($query);
      	$stmt->execute();
      	$result = $stmt->fetch(PDO::FETCH_ASSOC); 
      	$stmt->closeCursor(); 
      	$passbe = $result['passbeskrivning'];

        if ($row['installt']==1){
          $dagspass5 .= 
              '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-heading">'.
                    '<h5 class="panel-title-index">'.              
                     '<del>'. '<strong>'. date('H:i', strtotime($row['starttid'])).'</strong>' ." ". $row['passnamn'].'</del>'. $install.          
                    '</h5>
                  </div>
                   </a>'.
              '</div>
              </div>';    
        }   
        else if($row['extrapass']==1) {
          $dagspass5 .=
              '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-extra"">'.
                    '<h5 class="panel-title-index">'.              
                    '<span style="color:#FFF; font-size:18px;" class="glyphicon glyphicon-star-empty"></span>'." ".   '<strong>'. date('H:i', strtotime($row['starttid'])).'</strong>' ." ". $row['passnamn'].          
                    '</h5>
                  </div>
                   </a>'.
                  '<div id="'.$row['bokningsbarID'].'"'. 'class="panel-collapse collapse">'.
                    '<div class="panel-body">'.
                      $passbe. 
                        '<button type="submit" '.'name="boka-pass"' .'class="btn btn-default_1">Boka</button>
                  </div>
                </div>
              </div>
              </div>';  
        } 
        else {
          if  ($antal<$antalplatser){
            $dagspass5 .=
              '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-heading">'.
                    '<h5 class="panel-title-index">'.              
                      $uppdat. " ".  '<strong>'. date('H:i', strtotime($row['starttid'])).'</strong>' ." ". $row['passnamn'].         
                    '</h5>
                  </div>
                   </a>'.
                  '<div id="'.$row['bokningsbarID'].'"'. 'class="panel-collapse collapse">'.
                    '<div class="panel-body">'.
                      $passbe. 
                        '<button type="submit" '.'name="boka-pass"'.'class="btn btn-default_1">Boka</button>
                    </div>
                    </div>
                </div>
              </div>';       
          }
          else if ($antal>=$antalplatser){
            $dagspass5 .= 
                      '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-heading">'.
                    '<h4 class="panel-title-index">'.              
                      $uppdat. " ". date('H:i', strtotime($row['starttid'])) ." ". $row['passnamn']. ' <p style="float:right; color:#DF007B;">' . "FULLT! ". "</p>".        
                    '</h4>
                  </div>
                   </a>'.
                  '<div id="'.$row['bokningsbarID'].'"'. 'class="panel-collapse collapse">'.
                    '<div class="panel-body">'.
                      $passbe. 
                        '<button type="submit" '.'name="boka-pass"'.'class="btn btn-default_1">Boka</button>
                    </div>
                  </div>
                </div>
                </div>';
          }
        }  
  }
  	

  if (date('Y-m-d', strtotime($row['datum'])) == $sixday){	
      	$passnamn=$row['passnamn'];
      	$query = "SELECT * FROM pass WHERE passnamn = '{$passnamn}'";  
      	$stmt = $db ->prepare($query);
      	$stmt->execute();
      	$result = $stmt->fetch(PDO::FETCH_ASSOC); 
      	$stmt->closeCursor(); 
      	$passbe = $result['passbeskrivning'];
        if ($row['installt']==1){
          $dagspass6 .= 
              '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-heading">'.
                    '<h5 class="panel-title-index">'.              
                     '<del>'. '<strong>'. date('H:i', strtotime($row['starttid'])).'</strong>' ." ". $row['passnamn'].'</del>'. $install.          
                    '</h5>
                  </div>
                   </a>'.
              '</div>
              </div>';   
        }   
        else if($row['extrapass']==1) {
          $dagspass6 .=
              '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-extra"">'.
                    '<h5 class="panel-title-index">'.              
                    '<span style="color:#FFF; font-size:18px;" class="glyphicon glyphicon-star-empty"></span>'." ".   '<strong>'. date('H:i', strtotime($row['starttid'])).'</strong>' ." ". $row['passnamn'].          
                    '</h5>
                  </div>
                   </a>'.
                  '<div id="'.$row['bokningsbarID'].'"'. 'class="panel-collapse collapse">'.
                    '<div class="panel-body">'.
                      $passbe. 
                        '<button type="submit" '.'name="boka-pass"' .'class="btn btn-default_1">Boka</button>
                  </div>
                </div>
              </div>
              </div>';  
        }
        else {
          if  ($antal<$antalplatser){
           $dagspass6 .=
              '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-heading">'.
                    '<h5 class="panel-title-index">'.              
                      $uppdat. " ".  '<strong>'. date('H:i', strtotime($row['starttid'])).'</strong>' ." ". $row['passnamn'].         
                    '</h5>
                  </div>
                   </a>'.
                  '<div id="'.$row['bokningsbarID'].'"'. 'class="panel-collapse collapse">'.
                    '<div class="panel-body">'.
                      $passbe. 
                        '<button type="submit" '.'name="boka-pass"'.'class="btn btn-default_1">Boka</button>
                    </div>
                    </div>
                </div>
              </div>';       
          }
          else if ($antal>=$antalplatser){
             $dagspass6 .= 
                      '<div class="panel-group"'. 'id="accordion">'.
                '<div class="panel panel-default">'.
                  '<a style="text-decoration:none"' .'data-toggle="collapse"'. 'data-parent="#accordion"' .'href="#'.$row['bokningsbarID']. '" >'.
                  '<div class="panel-heading">'.
                    '<h4 class="panel-title-index">'.              
                      $uppdat. " ". date('H:i', strtotime($row['starttid'])) ." ". $row['passnamn']. ' <p style="float:right; color:#DF007B;">' . "FULLT! ". "</p>".        
                    '</h4>
                  </div>
                   </a>'.
                  '<div id="'.$row['bokningsbarID'].'"'. 'class="panel-collapse collapse">'.
                    '<div class="panel-body">'.
                      $passbe. 
                        '<button type="submit" '.'name="boka-pass"'.'class="btn btn-default_1">Boka</button>
                    </div>
                  </div>
                </div>
                </div>';
          }

        }  
  }
  

}
?>