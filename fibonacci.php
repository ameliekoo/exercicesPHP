<?php

function fibonacci($period){
	$duplication  = 0;
    $couple       = 1;
    $result       = $couple + $duplication;
 
    if (!is_int($period) || $period <= 0) {
        return false;
    }
    if ($period == 1) {
        return $result;
    }
    for ($i = 1; $i < $period; $i++) {
        $result       = $couple + $duplication;
        $duplication  = $couple;
        $couple       = $result;
    }
    return $result;
}


echo fibonacci(12);