<?php

function bataille_naval($x, $y){
	$string= ['A','B','C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
	$int=[1,2,3,4,5,6,7,8,9,10];

	$b1=array('F', 3,4,5);
	$b2=array('I', 5,6);
	$b3=array('C', 'D', 'E', 'F', 9);

	$Badeaux=[$b1,$b2,$b3];

	if( !in_array($x, $string) || !in_array($y, $int)){
		echo "hors de jeux";
	}else{
		foreach($Badeaux as $b){
			if( in_array($x, $b) && in_array($y, $b)){
				echo 'touché!';
			
			}else{
				echo "loupé!"; 
			}
		}
   	}
}


bataille_naval('G',5);