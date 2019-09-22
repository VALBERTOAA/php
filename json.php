<?php


    $pessoas = array();

    array_push($pessoas,
    array(
        'nome'=>'Joao',
        'idade'=>20),
    array(
        'nome'=>'Teste',
        'idade'=>30));
    
    echo json_encode($pessoas);
    
    echo '<br>';
    
    $json = '[{"nome": "Joao","idade": 20},{"nome": "Teste","idade": 30}]';
    
    $data = json_decode($json,true);
    
    var_dump($data);