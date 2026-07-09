<?php

    function analisarN($numero){

    if($numero % 2 == 0){
       $paridade = "Par";
    }else{
        $paridade = "Ímpar";
    }



    $divisores = 0;

    for($i = 1; $i <= $numero; $i++){
        if($numero % $i == 0){
            $divisores++;
        }
    }
    
    if($divisores == 2){
        $primo = "Primo";
    }else{
        $primo = "Não é primo";
    }

   

    $soma = 0;
        for($i = 1; $i <= $numero; $i++){
        if($numero % $i == 0){
            $soma += $i;
        }
    }

    if($soma == $numero){
        $perfeito = "Perfeito";
        }else{
        $perfeito = "Não é perfeito";
    }

            return "Número: $numero <br>
            Paridade: $paridade <br>
            Primo: $primo <br>
            Perfeito: $perfeito";
}

echo analisarN(11);
