<?php
//Random Handler
$Podlove = $options['prject_1'];
$Firtz = $options['prject_2'];
$Hoersuppe = $options['prject_3'];
$Shownot = $options['prject_4'];
$Xenim = $options['prject_5'];
$Podunion = $options['prject_6'];
$Podbe = $options['prject_7'];
$ReliveRadio = $options['prject_8'];
$Auphonic = $options['prject_9'];



####################################

$anzahl = 3; 
    
####  	
      	
    $url[0] = ' <!--Podlove-->
    			<div class="col-lg-2">'. $Podlove .'</div>
				<!--Firtz-->
				<div class="col-lg-2">'. $Firtz .'</div>
				<!--Hoersuppe-->
				<div class="col-lg-2">'. $Hoersuppe .'</div>
				<!--Shownot-->
				<div class="col-lg-2">'. $Shownot .'</div>
				<!--Xenim-->
				<div class="col-lg-2">'. $Xenim .'</div>
				<!--Podunion-->
				<div class="col-lg-2">'. $Podunion .'</div>';
    
    $url[1] = ' <!--Podbe-->
    			<div class="col-lg-2">'. $Podbe .'</div>
				<!--ReliveRadio-->
				<div class="col-lg-2">'. $ReliveRadio .'</div>
				<!--Auphonic-->
				<div class="col-lg-2">'. $Auphonic .'</div>
				<!--Podlove-->
				<div class="col-lg-2">'. $Podlove .'</div>
				<!--Firtz-->
				<div class="col-lg-2">'. $Firtz .'</div>
				<!--Hoersuppe-->
				<div class="col-lg-2">'. $Hoersuppe .'</div>';
    
    $url[2] = ' <!--Shownot-->
    			<div class="col-lg-2">'. $Shownot .'</div>
    			<!--Xenim-->
				<div class="col-lg-2">'. $Xenim .'</div>
				<!--Podunion-->
				<div class="col-lg-2">'. $Podunion .'</div>
				<!--Podbe-->
				<div class="col-lg-2">'. $Podbe .'</div>
				<!--ReliveRadio-->
				<div class="col-lg-2">'. $ReliveRadio .'</div>
				<!--Hoersuppe-->
				<div class="col-lg-2">'. $Auphonic .'</div>'; 	 
   
####
 	srand(time());
	$random = rand(0, $anzahl - 1); 
    
    
    //out	 
    echo $url[$random]; 

?>