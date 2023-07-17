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
                
                    if ($_SESSION['invalid_count'] >= 3) {
                        $data = array(
                            'secret' => "0x0000000000000000000000000000000000000000",
                            'response' => $_POST['captchaResponse']
                        );
                        $verify = curl_init();
                        curl_setopt($verify, CURLOPT_URL, "https://hcaptcha.com/siteverify");
                        curl_setopt($verify, CURLOPT_POST, true);
                        curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
                        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
                        $response = curl_exec($verify);
                        // var_dump($response);
                        $responseData = json_decode($response);

                        
                        if($responseData->success) {
                            // your success code goes here
                        } 
                        else {
                            echo "Captcha tidak valid";
                            return;
                        }                
                    }

                    $sql = "SELECT * FROM users WHERE email = '$email'";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                        $row = mysqli_fetch_assoc($result);
                        if (password_verify($_POST['password'], $row['password'])) {
                            $_SESSION['username'] = $row['username'];
                            echo "redirect";
                        } else {
                            echo "Username atau password salah.";

                            if (isset($_SESSION['invalid_count'])) {
                                $_SESSION['invalid_count'] += 1;
                            } else {
                                $_SESSION['invalid_count'] = 0;
                            }
                        }
                    } else {
                        echo "Username atau password salah.";

                        if (isset($_SESSION['invalid_count'])) {
                            $_SESSION['invalid_count'] += 1;
                        } else {
                            $_SESSION['invalid_count'] = 0;
                        }
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