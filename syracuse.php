<?php
// Créez une fonction qui prend comme argument n'importe quel nombre entier supérieur à zéro, si le nombre est pair divisez-le par 2, si le nombre est impair multipliez-le par 3 et ajoutez 1. Au final votre fonction doit retourner une série de nombre, le dernier de ces nombres doit être le chiffre 1.


function syracuse($int){
	if( !is_int($int) || $int<=0 ){
		return false;
	}else{
		$res = array();
		while($int!==1){
			$int = ($int%2==0? $int/2: $int*3+1);
			$res[]=$int;
			syracuse($int);
		}
		return $res;
	}
	
}


$r=syracuse(50);
var_dump($r);