<?php

function converterTemperatura($valor, $origem, $destino){

    if($origem == "C" && $destino == "F"){
        return ($valor * 9/5) + 32;
    }

    elseif($origem == "C" && $destino == "K"){
        return $valor + 273.15;
    }

    elseif($origem == "F" && $destino == "C"){
        return ($valor - 32) * 5/9;
    }

    elseif($origem == "F" && $destino == "K"){
        return (($valor - 32) * 5/9) + 273.15;
    }

    elseif($origem == "K" && $destino == "C"){
        return $valor - 273.15;
    }

    elseif($origem == "K" && $destino == "F"){
        return (($valor - 273.15) * 9/5) + 32;
    }

    elseif($origem == $destino){
        return $valor;
    }

    else{
        return "Escala inválida!";
    }
}




echo converterTemperatura(20, "C", "F") . " °F<br>";
echo converterTemperatura(68, "F", "C") . " °C<br>";
echo converterTemperatura(78, "F", "K") . " K<br>";
echo converterTemperatura(30, "K", "C") . " °C<br>";
echo converterTemperatura(310, "K", "F") . " °F<br>";
echo converterTemperatura(2, "C", "K") . " K<br>";