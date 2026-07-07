<?php

function mascararCpf($cpf) {
   $mascararcpf = '***.***.***-**' . substr ($cpf,-5) ;
   return $mascararcpf;

}

echo "CPF original: 582.127.679-55 <br>";
echo "CPF mascarado: " . mascararcpf("582.127.679-55") . "<br>";

