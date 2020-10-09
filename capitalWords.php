<?php


function capital_words($str){
	$result = array();
	$str=ucwords($str);
	$arr = explode(' ', $str);
	foreach( $arr as $mot){
		$result[] = substr($mot, 0,1);
	}
	return implode($result);
}


$o=capital_words('hello tout le monde');
echo $o;

// function acronyme($chaine)
// {
//    $resultat = "";
//    $chaine = explode(" ", $chaine);
//    foreach($chaine as $mot)
//    {
//     $resultat.= strtoupper($mot[0]);
//    }
//    return $resultat;
// }