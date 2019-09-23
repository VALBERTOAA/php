<?php

//session_id('2dkguamq89uoic3h6iire3fs4l');
//session_regenerate_id();

require_once 'config.php';

echo '<br>';

echo session_id();

echo '<br>';

var_dump($_SESSION);

echo '<br>';

echo session_module_name();

echo '<br>';

switch (session_status()){
    case PHP_SESSION_DISABLED:
        echo "se as sessões estiverem desabilitadas.";
    break;
    case PHP_SESSION_NONE:
        echo "se as sessões estiverem habilitadas, mas nenhuma existir.";
    break;
    case PHP_SESSION_ACTIVE:
        echo "se as sessões estiverem habilitadas, e uma existir.";
    break;       
        
}