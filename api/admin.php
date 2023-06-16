<?php
    include 'db.php';
    
    error_reporting(0);
    
    session_start();

    if (isset($_SESSION['admin'])) {
        echo '403';
        return;
    }
    
    if (isset($_POST['method'])) {
        switch ($_POST['method']) {
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