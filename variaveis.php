<?php

$nome = "Valberto";
$sobrenome = "Alves Agostinho";
$nomeCompleto = $nome." ".$sobrenome;

echo $nomeCompleto;

unset($nome); //tira a variavel da memoria

//isset - Determina se uma vari�vel � declarada e � diferente deNULL
if (isset($nome)){ 
    
    echo $nome;
    
}


?>