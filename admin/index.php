<?php
    session_start();

    error_reporting(0);
    
    if ($_SESSION['admin']) {
        header('Location: /admin/dashboard.php');
    } else {
        header('Location: /admin/login.php');
    }
?>