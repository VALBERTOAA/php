<?php

require_once 'config.php';

function ola(){
    return "Ol� mundo";
}

function salario(){
    return 945.60;
}

//Sempre que tiver um valor padr�o colocar o parametro a esquerda caso tenha mais de um parametro;
function menssagem($texto="mundo", $periodo="Bom dia"){
    return "Ol� $texto ! $periodo!";
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

echo "Jos� recebeu 3 sal�rios: ".(salario()*3);

echo '<br>';

echo menssagem();

echo '<br>';

echo menssagem("Valberto", "Boa tarde");

echo '<br>';

echo var_dump(msg("Testando argumentos"));

echo '<br>';

echo var_dump(msg("Testando argumentos"," com mais parametros"));





