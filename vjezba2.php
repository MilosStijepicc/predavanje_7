<?php

    $brojevi = [
        22, 53, 36, 46, 13
    ];
    $zbir=0;
    foreach($brojevi as $broj){
        $ostatak = $broj % 9;
        if($ostatak == 0){
            continue;
        }
        $zbir = $zbir += $broj;

    }
    echo $zbir;

?>