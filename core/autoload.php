<?php

    spl_autoload_register(function($controllers){
        require_once './app/controller/'.$controllers.'.php';        
    });

?>