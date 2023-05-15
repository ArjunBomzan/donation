<?php

    require "config.php";

    $db = new mysqli($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);
    if(!$db){
        echo("No data base");
    };