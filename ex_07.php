<?php

    function calcularDesconto($valor){

    if($valor <= 100 ){
        $desconto = 0;
    }

    elseif($valor > 1000 ){
        $desconto = $valor * 0.30;
    }

     elseif($valor > 500 ){
        $desconto = $valor * 0.20;
    }

     elseif($valor > 100 ){
        $desconto = $valor * 0.10;
    }

        $valorFinal = $valor - $desconto;

        return "Valor original: R$ " . number_format($valor, 2, ",", ".") .
           "<br>Desconto: R$ " . number_format($desconto, 2, ",", ".") .
           "<br>Valor final: R$ " . number_format($valorFinal, 2, ",", ".") . "<br><br>";
    }

    echo calcularDesconto(600) . " <br>";