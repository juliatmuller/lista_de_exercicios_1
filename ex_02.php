<?php

//inverter texto 

function inverterTexto($texto)
{
$textoInvertido = strrev($texto);
return $textoInvertido;
}

echo "texto Original: Oi, Galera <br>";
echo "Texto Invertido:" . inverterTexto("Oi, Galera"). "<br>";
echo "Numero de caracter: ". strlen("Oi, Galera");
