<?php

    function ordenarNomes($nomes){

    
    $lista = explode(",", $nomes);


    for($i = 0; $i < count($lista); $i++){
        $lista[$i] = trim($lista[$i]);
    }

 
    sort($lista);


    return implode(", ", $lista);
}

echo ordenarNomes("Pedro, Ana,   Carlos, João, Maria");