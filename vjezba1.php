<?php

    $automobili = [
        "Audi", "BMW", "Mercedes"
    ];

    foreach($automobili as $auto){
        if($auto == "BMW"){
            continue;
        }
        echo $auto." ";
    }

?>