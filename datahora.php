<?php

require_once 'config.php';

echo date("d/m/Y") . "<br>";

echo date("d/m/Y H:i:s") . "<br>";

echo date("D/m/Y H:i:s") . "<br>";

echo time() . "<br>";

echo date("d/m/Y H:i:s", 1569183865) . "<br>";

$ts= strtotime("2001-09-11");
echo date("l, d/m/Y", $ts) . "<br>";


$ts= strtotime("2001-09-11 +1 year");
echo date("l, d/m/Y", $ts) . "<br>";


echo ucwords(strftime("%A %B")) . "<br>";

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s") . "<br>";

$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s") . "<br>";




?>