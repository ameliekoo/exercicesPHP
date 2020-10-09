<?php

// function triangle($height){
// 	if($height<1){
// 		echo " Entrer un numbre superieur à 1";
// 	}else{
// 		echo '<div style="text-align:center">';
// 		for($i=1 ;$i<=$height; $i++){
// 			echo str_repeat("*", $i*2);
// 			echo '<br>';
// 		}echo '</div>';
// 	}
// }

triangle(20);



function triangle($height){
	if($height<1){
		echo " Entrer un numbre superieur à 1";
	}else{
		
		for($i=1;$i<=$height; $i++){
			echo str_repeat('&nbsp', $height-$i);
			echo str_repeat("*", $i*2);
			
			echo "<br>";
		}
	}
}
