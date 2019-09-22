<?php

$nome = "Valberto";

echo $nome . " Alves" . "<br>";

$nome .= " Agostinho" . "<br>";

echo $nome;

$subTotal = 0;
$desconto = 0;
$valorTotal = 0;

$subTotal += 100;
$desconto += 20;
$valorTotal = $subTotal;
$valorTotal -= $desconto;

echo "Sub-Total: " . $subTotal;

echo "<br>";

echo "Desconto:  " . $desconto;

echo "<br>";

echo "Total:  " . $valorTotal;

echo "<br>";


$a = 10;
$b = 2.0;

$c = $a + $b;


echo "a: " . $a;
echo "<br>";
echo "b: " . $b;
echo "<br>";
echo "c: " . $c;
echo "<br>";


$d = $a * $b;
$e = $a / $b;
$f = $a & $b; //mod
$g = $a ** $b; //elevado ao quadrado;
$h = null;
$i = null;

echo "d: " . $d;

echo "<br>";

echo "e: " . $e;

echo "<br>";

echo "f: " . $f;

echo "<br>";

echo "g: " . $g;

echo "<br>";

var_dump($a > $b);

echo "<br>";

var_dump($a < $b);

echo "<br>";

var_dump($a = $b); //Atribuição

echo "<br>";

var_dump($a == $b); //Comparação de valor

echo "<br>";

var_dump($a === $b); //Compração de valor e tipo de variável

echo "<br>";

var_dump($a != $b); //Diferente

echo "<br>";

var_dump($a !== $b); //Diferente valor e tipo

echo "<br>";

var_dump($a <=> $b); //Space ship

echo "<br>";

echo $h ?? $i ?? $a;

echo "<br>";

echo $a++;//incremento

echo "<br>";

echo ++$a;//decremento

echo "<br>";


$resultado = (10 + 3)/2 > 5 && 10 + 5 < 2;

var_dump($resultado);

$resultado = (10 + 3)/2 > 5 || 10 + 5 < 2;

var_dump($resultado);






?>