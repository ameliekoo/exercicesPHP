<?php


function  conjugaison($verbe){
	if( strlen($verbe)<=15 && strpos($verbe, " ")===false && substr($verbe, -2)=="er"){
		$conjugaison = substr($verbe, 0, -2);
		echo "je ". $conjugaison. "e <br>";
		echo "tu ". $conjugaison. "es <br>";
		echo "il ". $conjugaison. "e <br>";
		echo "nous ". $conjugaison. "ons <br>";
		echo "vous ". $conjugaison. "ez <br>";
		echo "ils ". $conjugaison. "ent <br>";	
	}else{
		echo "erreur";
	}
}


conjugaison('programmer');