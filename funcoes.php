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

//Passagem de valor por referencia 
//& indica que será  alterado o valor da variavel passada no parametro
function somaCem(&$a) {
    $a += 100;
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

echo '<br>';

$a=100;

echo "Valor de a: $a";

echo '<br>';

somaCem($a);

echo "Valor de a: $a";

echo '<br>';


$pessoa = array(
    'nome'=>"Valberto",
    'idade'=>42
);

foreach ($pessoa as &$value) {
    //Altera o valor da idade por causa do & passagem por referencia;
    if (gettype($value) === 'integer')
        $value += 10;
    
    echo $value."<br>";
    
}

var_dump($pessoa);

echo '<br>';





