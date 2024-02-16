<?php
    session_start();
    if($_SESSION['role_name']!='Admin')
    {
        header('location:index.php');
        exit();
    } 
    include 'config.php';
?>
