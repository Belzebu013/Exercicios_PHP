<?php
    $paises=[
        "Brasil",
        "Estados Unidos",
        "Canada",
        "Alemanha",
        "Japão",
        "China",
        "Italia",
        "Russia",
        "Argentina",
        "Bolivia"
    ];

    for($i=0; $i<count($paises); $i++){
        echo $i.'-'.$paises[$i];
        echo '<br/>';
    }

?>