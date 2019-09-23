<form>
	<input type ="text" name = "nome">
	<input type ="date" name = "nascimento">
	<input type ="submit" value="Enviar">
</form>


<?php

if (isset($_GET)){
    
    foreach ($_GET as $key => $value) {
        
        echo "Nome do campo: " . $key . "<br>";
        
        echo "Valor do campo: " . $value;
        
        echo "<hr>";
    }
}


$condicao=true;

while ($condicao){
    
    $numero = rand(1,10);
    
    if ($numero === 3){
        
        echo "ACHOU" . "<br>";
        
        $condicao=false;
        
    }
    
    echo "Nro sorteado " . $numero . "<br>";
    
}

$total = 150;
$desconto = 0.9;

do{
    
    $total *= $desconto;
    
    echo "Total temporario: $total" . "<br>";
    
}while ($total>100);

echo "Total: $total" . "<br>";
    
?>
