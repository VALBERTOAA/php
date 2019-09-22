<?php

//include_once 'funcoes.php';
//

require_once 'config.php';

$_SESSION['nome']='Treinamento PHP';

if (isset($_SESSION['nome'])){
    
    echo "Sessão de página: ".$_SESSION['nome'];   
    
}else
{
    echo "Sessão de página: "."VAZIA";
}



echo "<br>";

$variaveis = "variaveis.php";
$superglobal = "superglobal.php";
$escopo = "escopo.php";
$operadores = "operadores.php";
$array = "array.php";
$json = "json.php";
$constante = "constante.php";
$session = "session.php";
$limpasession = "limpasession.php";
$funcoes = "funcoes.php";


echo "<a href=".$variaveis.">".$variaveis."</a></br>";
echo "<a href=".$superglobal."?a=1&b=10".">".$superglobal."</a></br>";
echo "<a href=".$escopo.">".$escopo."</a></br>";
echo "<a href=".$operadores.">".$operadores."</a></br>";
echo "<a href=".$array.">".$array."</a></br>";
echo "<a href=".$json.">".$json."</a></br>";
echo "<a href=".$constante.">".$constante."</a></br>";
echo "<a href=".$session.">".$session."</a></br>";
echo "<a href=".$limpasession.">".$limpasession."</a></br>";
echo "<a href=".$funcoes.">".$funcoes."</a></br>";

?>
