<?php

require_once 'config.php';

function ola(){
    return "Olá mundo";
}

function salario(){
    return 945.60;
}

//Sempre que tiver um valor padrão colocar o parametro a esquerda caso tenha mais de um parametro;
function menssagem($texto="mundo", $periodo="Bom dia"){
    return "Olá $texto ! $periodo!";
}

function msg(){
    
    $argumentos = func_get_args();
    
    return $argumentos;
}



echo ola();

echo '<br>';

$frase=ola();

echo strlen($frase);

echo '<br>';

echo "José recebeu 3 salários: ".(salario()*3);

echo '<br>';

echo menssagem();

echo '<br>';

echo menssagem("Valberto", "Boa tarde");

echo '<br>';

echo var_dump(msg("Testando argumentos"));

echo '<br>';

echo var_dump(msg("Testando argumentos"," com mais parametros"));





