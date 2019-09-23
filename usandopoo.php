<?php

require_once ('config.php');

$valberto = new Pessoa(
    "Valberto",
    "Alves Agostinho", 
    "33232354440", 
    "Est. Geral Baixadinha",
    "88735-000",
    "Gravatal");

    
//$valberto->setCpf(123);    

//$valberto->nome = "Valberto Alves";

echo $valberto->falar(). "<br>";

print_r( $valberto->exibir()) . "<br>";


//var_dump($valberto);