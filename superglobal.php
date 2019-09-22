<?php


//arrays supoer globais
//$_GET["a"]
//$_POST["a"]
//$_SERVER[]

$a = (int)$_GET["a"];
$b = (int)$_GET["b"];

echo "a: ".$a."<br>";  
echo "b: ".$b."<br>";

$ip = $_SERVER["REMOTE_ADDR"];

echo "ip: ".$ip."<br>";

$modulo = $_SERVER["SCRIPT_NAME"];

echo "modulo: ".$modulo."<br>";

?>