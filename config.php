<?php

session_start();

setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portuguese");


//function incluirClasses($nomeClasse){
    
//    var_dump($nomeClasse);
    
//    if (file_exists($nomeClasse.".php") === true){
//        require_once ($nomeClasse.".php");
//    }
//}

//spl_autoload_register("incluirClasses");

spl_autoload_register(function($nomeClasse){
    $diretorio = "POO";
    $arquivo = $diretorio. DIRECTORY_SEPARATOR. $nomeClasse. ".php";
    if (file_exists($arquivo) === true){
        require_once ($arquivo);
    }    
});