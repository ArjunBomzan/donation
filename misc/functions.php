<?php

    function url($uri = '') {
        require "config.php";
        return $config['base_url'].$uri;
    }

    // fetches data of logged in user from database
    function user() {
        require "db.php";

        $sql = "SELECT * FROM user WHERE id = '{$_SESSION['user_id']}'";

        $result = $db->query($sql);
        
        return $result->fetch_assoc();
    }
    