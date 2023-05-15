<?php
    session_start();
    require "../misc/functions.php";
    require "../misc/loggedin.php";

    unset($_SESSION['user_id']);
    header('Location: '.url('index.php'));