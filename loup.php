<?php

function traverse($nbre_traversee){
    if(is_int($nbre_traversee)){
    $etape = $nbre_traversee % 7;
    $sens = ($nbre_traversee - $etape) % 2;
    return array ('Le berger' => ($nbre_traversee % 2) ? 0 : 1,
    'Le loup'   => ($etape < 3) ? !$sens : $sens,
    'La chevre' => ($etape == 0 || ($etape >= 4 && $etape <= 6)) ? !$sens : $sens,
    'Le chou'   => ($etape < 5) ? !$sens : $sens);   
    }
}
foreach (traverse(2) as $perso => $position)    
    echo $perso . " est sur la rive " . (($position) ? 'gauche' : 'droite') ."<br>";
?>