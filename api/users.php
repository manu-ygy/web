<?php
    include 'db.php';
    
    error_reporting(0);
    
    session_start();
    
    if (isset($_POST['method'])) {
        switch ($_POST['method']) {
            case 'login':
                if (isset($_POST['email']) && isset($_POST['password'])) {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                
                    $sql = "SELECT * FROM users WHERE email = '$email'";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                        $row = mysqli_fetch_assoc($result);
                        if (password_verify($_POST['password'], $row['password'])) {
                            $_SESSION['username'] = $row['username'];
                            echo "redirect";
                        } else {
                            echo "Username atau password salah.";
                        }
                    } else {
                        echo "Username atau password salah.";
                    }
                }
                break;

            case 'resetpass':
                echo "success";
                break;

            case 'logout':
                session_destroy();
                break;
        }
    } else {
        echo "invalid";
    }
?>