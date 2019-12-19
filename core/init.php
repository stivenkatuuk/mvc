<?php

    require_once('./app/config.php');

    require_once('autoload.php');
    require_once('core.php');
    require_once('route.php');

    core::getConfigDefaultRoute($config["route"]["default"]);
?>