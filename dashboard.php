<?php
session_start();

    if (!isset($_SESSION["username"])){
        header("Location: login.php");
        exit();
    }
    echo "Welkom op het dashboard " . ($_SESSION["username"]);

    
?>