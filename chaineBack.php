<?php

function inverser_chaine($str){
	if(strlen($str)%2==0){
		for ($i=0; $i < strlen($str)/2-1; $i++) { 
			$x=$str[$i];
			$str[$i]=$str[strlen($str)-1-$i];
			$str[strlent($str)-1-$i]=$x;
		}
	}else{
		for ($i=0; $i < (strlen($str)-1)/2; $i++) { 
			$x=$str[$i];
			$str[$i]=$str[strlen($str)-1-$i];
			$str[strlen($str)-1-$i]=$x;
		}
	}
	echo $str;
}



inverser_chaine('hello World');