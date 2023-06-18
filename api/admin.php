<?php
    error_reporting(0);
    
    session_start();

    include 'db.php';
    include '../vendor/autoload.php';

    use RobThree\Auth\TwoFactorAuth;

    $tfa = new TwoFactorAuth('SMA Yos Sudarso Karawang');

    // substitute your company or app name here
    $tfa = new RobThree\Auth\TwoFactorAuth('SMA Yos Sudarso Karawang');

    if (!isset($_SESSION['admin']) && ($_POST['method'] != 'login' && $_POST['method'] != 'verify_two_factor')) {
        echo '403';
        return;
    }
    
    if (isset($_POST['method'])) {
        switch ($_POST['method']) {
            case 'login':
                if (isset($_POST['username']) && isset($_POST['password'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                
                    $sql = "SELECT * FROM admin WHERE username = '$username'";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                        $row = mysqli_fetch_assoc($result);
                        if (password_verify($_POST['password'], $row['password'])) {
                            if ($row['verified'] == 0) {
                                $_SESSION['admin'] = $row['username'];
                                $_SESSION['verified'] = false;
                                echo "redirect";
                            } else {
                                $_SESSION['two_factor'] = $row['username'];
                                $_SESSION['verified'] = true;
                                echo "two_factor";
                            }
                        } else {
                            echo "Username atau password salah.";
                        }
                    } else {
                        echo "Username atau password salah.";
                    }
                }
                break;

/*
                $secret =  $tfa->createSecret();
                echo $tfa->getQRCodeImageAsDataUri('SMA Yos Sudarso Karawang', $secret);
*/

            case 'request_two_factor':
                $array = array();

                $secret = $tfa->createSecret();
                $_SESSION['secret'] = $secret;

                $array['secret'] = $secret;
                $array['image'] = $tfa->getQRCodeImageAsDataUri('SMA Yos Sudarso Karawang', $secret);
                echo json_encode($array);

                break;

            case 'verify_two_factor':
                $code = $_POST['code'];

                if (!$_SESSION['verified']) {
                    if ($tfa->verifyCode($_SESSION['secret'], $code) === true) {
                        echo 'redirect';
                        $_SESSION['verified'] = true;
                    } else {
                        echo 'Kode salah.';
                    }
                } else {
                    $username = $_SESSION['two_factor'];
                
                    $sql = "SELECT secret FROM admin WHERE username = '$username'";
                    $result = mysqli_query($conn, $sql);

                    if ($result->num_rows > 0) {
                        $row = mysqli_fetch_assoc($result);

                        if ($tfa->verifyCode($row['secret'], $code) === true) {
                            $_SESSION['admin'] = $username;
                            $_SESSION['verified'] = true;
                            echo 'redirect';
                        } else {
                            echo 'Kode salah.';
                        }
                    } else {
                        echo 'Kode salah';
                    }
                }

                break;

            case 'set_two_factor':
                if ($_SESSION['verified']) {
                    $secret = $_SESSION['secret'];
                    $username = $_SESSION['admin'];

                    $sql = "UPDATE admin SET secret='$secret', verified=1 WHERE username = '$username'";

                    if (mysqli_query($conn, $sql)){
                        echo 'success';
                    } else {
                        echo $conn->error;
                    }
                }

                break;

            case 'get_users':
                $sql = "SELECT username, email, createdat, id, usertype FROM users";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $rows = array();
                    while($r = mysqli_fetch_array($result)) {
                        $rows[] = $r;
                    }
                    echo json_encode($rows);                  
                }

                break;

            case 'resetpass':
                echo "success";
                break;

            case 'add_user':
                if (isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['date']) && isset($_POST['type'])) {
                    $username = $_POST['name'];
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $email = $_POST['email'];
                    $createdat = $_POST['date'];
                    $usertype = $_POST['type'];

                    $sql = "INSERT INTO users (username, password, email, createdat, usertype) VALUES ('$username', '$password', '$email', '$createdat', '$usertype')";

                    if (mysqli_query($conn, $sql)){
                        echo 'success';
                    } else {
                        echo $conn->error;
                    }
                }
                break;

            case 'remove_user':
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];

                    $sql = "DELETE FROM users WHERE id = $id";

                    if (mysqli_query($conn, $sql)){
                        echo 'success';
                    } else {
                        echo $conn->error;
                    }
                }
                break;
        }
    } else {
        echo "invalid";
    }
?>