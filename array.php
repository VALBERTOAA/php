<?php

$frutas = array("Laranja","Abacaxi","Melancia");

//var_dump($frutas);
print_r($frutas);

echo "<br>";

$carros[0][0] = "GM";
$carros[0][1] = "Cobolt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiest";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";


echo $carros[0][3];

echo "<br>";

echo end($carros[1]);

echo "<br>";

$pessoas = array();

array_push($pessoas, 
    array(
    'nome'=>'Joao',
    'idade'=>20),
    array(
     'nome'=>'Teste',
     'idade'=>30));

print_r($pessoas);

echo "<br>";

print_r($pessoas[1]['nome']);
    
?>


