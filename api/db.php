<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "main_db";
    
    $conn = mysqli_connect($server, $user, $pass, $database);
    
    if (!$conn) {
        die("Gagal menyambung ke database");
    }
?>