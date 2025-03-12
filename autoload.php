<?php
//autoload:  Evita tener que hacer require_once manualmente en cada archivo.
    spl_autoload_register(function($clase){
        $archivo=__DIR__."/".$clase.".php";
        $archivo=str_replace("\\","/",$archivo);
        if(is_file($archivo)){
            require_once $archivo;
        }

    });
?>