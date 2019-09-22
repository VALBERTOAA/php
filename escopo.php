<?php

$nome = "Valberto";

function getNome() {    
    
    global $nome;    
    
    echo $nome."<br>";
}

function getSobrenome($param){
    
    echo $param."<br>";
}

getNome();
getSobrenome(" Alves Agostinho");

?>