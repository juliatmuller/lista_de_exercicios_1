<?php

function gerarSenha($tamanho = 20){

    $caracteres = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&*";

    $senha = "";

    for($i = 0; $i < $tamanho; $i++){
        $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    return $senha;
}

echo "Senha gerada: " . gerarSenha();