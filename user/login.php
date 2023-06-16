<?php
    session_start();

    error_reporting(0);

    if ($_SESSION['username']) {
        header('Location: /user/dashboard.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "/css/style.css">
        <link rel = "stylesheet" href = "/css/login.css">

        <script src="https://kit.fontawesome.com/1cf918f51b.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class = "wrapper">
            <div class = "side">
                <strong>Lorem ipsum</strong>
                <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id voluptatum voluptate accusamus dignissimos.</span>
            </div>
    
            <main class = "main">
                <form class = "form">
                    <div class = "top">
                        <h1 class = "title">Login</h1>
                        <label>Login untuk mendapat akses ke dashboard.</label>
                    </div>
    
                    <label for = "username">E-mail: </label>
                    <div class = "input input-wrapper">
                        <i class = "fa fa-user"></i>
                        <input name = "username" class = "input-box username" placeholder = "bambang@mail.com">
                    </div>
        
                    <label for = "password">Password: </label>
                    <div class = "password-wrapper">
                        <div class = "input input-wrapper">
                            <i class = "fa fa-key"></i>
                            <input name = "password" class = "input-box password" type = "password" placeholder = "bambang123">
                        </div>
                        <button class = "password-show">
                            <i class = "fa fa-eye"></i>
                        </button>
                    </div>
                    <input type = "submit" class = "button submit" value = "Login">

                    <small class = "actions">
                        <a href = "/user/resetpass.php">Lupa password?</a>
                        <a href = "/user/account">Tidak punya akun?</a>
                    </small>

                    <button class = "button">
                        <i class = "google-icon"></i>
                        Masuk dengan akun sch.id
                    </button>
                </form>
            </main>
        </div>

        <script>
            $('.password-show').on('click', function(event) {
                event.preventDefault()
                if ($('.password').attr('type') == 'text') {
                    $('.password').attr('type', 'password')
                } else {
                    $('.password').attr('type', 'text')
                }
            })

            $('.submit').on('click', function(event) {
                event.preventDefault()

                $.post('/api/users.php', {method: 'login', email: $('.username').val(), password: $('.password').val()}, function(data, status) {
                    if (data != 'redirect') {
                        alert(data);
                    } else {
                        window.location.href = '/user/dashboard.php'
                    }
                })
            })
        </script>
    </body>
</html>