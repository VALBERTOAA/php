<?php

define("SERVIDOR",'192.168.1.1');

echo SERVIDOR;

echo "<br>";


define("BANCO_DE_DADOS",
    ['192.168.1.1',
     'root',
     'senha',
     'teste',false]); //ultimo parametro define se é case insensitive
    
print_r(BANCO_DE_DADOS);

echo "<br>";

echo PHP_VERSION;

echo "<br>";

echo DIRECTORY_SEPARATOR;

echo "<br>";





?>

