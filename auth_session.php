<?php
    session_start();
    if(!isset($_SESSION["username"]) and !isset($_SESSION["loginusername"])) {
        header("Location: register.php");
        exit();
    }
?>