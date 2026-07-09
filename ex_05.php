<?php

function analisarTexto($texto){

    $palavras = str_word_count($texto, 0);
    $caracteres = strlen($texto);
    $vogais = substr_count($texto, "a") + substr_count($texto, "e") + substr_count($texto, "i") + substr_count($texto, "o") + substr_count($texto, "u");

    return array(
        "palavras" => $palavras,
        "caracteres" => $caracteres,
        "vogais" => $vogais,
        "consoantes" => $caracteres - $vogais - substr_count($texto, " ")
    );
}

$texto = "Pedro Paulo Vieira Junior";

echo "Texto original: $texto<br>";

$resultado = analisarTexto($texto);

echo "Quantidade de palavras: " . $resultado["palavras"] . "<br>";
echo "Quantidade de caracteres: " . $resultado["caracteres"] . "<br>";
echo "Quantidade de vogais: " . $resultado["vogais"] . "<br>";
echo "Quantidade de consoantes: " . $resultado["consoantes"] . "<br>";