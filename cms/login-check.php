<?php

    session_start();
    require "../misc/functions.php";
    require "../misc/db.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT id FROM user WHERE username = '$username' AND password = '$password'";

    $result = $db->query($sql);

    
    if($result && $result->num_rows == 1) {
        $user = $result->fetch_assoc();

        $_SESSION['user_id'] = $user['id'];


        header('Location: '.url('cms/dashboard.php'));
    }
    else {
    header('Location: '.url('index.php?wrong'));
    }