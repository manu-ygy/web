<?php
    session_start();

    error_reporting(0);

    if ($_SESSION['admin']) {
        header('Location: /admin/dashboard.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Admin</title>
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "/css/style.css">
        <link rel = "stylesheet" href = "/css/login.css">

        <script src="https://kit.fontawesome.com/1cf918f51b.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

        <style>
            .login-container, .two-factor-container.active {
                display: flex;
                flex-direction: column;
                gap: 16px;
            }

            .two-factor-container {
                display: none;
            }
        </style>
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
                        <label>Login untuk mendapat akses ke admin panel.</label>
                    </div>
    
                    <div class = "login-container">
                        <label for = "username">Username: </label>
                        <div class = "input input-wrapper">
                            <i class = "fa fa-user"></i>
                            <input name = "username" class = "input-box username" placeholder = "username">
                        </div>
            
                        <label for = "password">Password: </label>
                        <div class = "password-wrapper">
                            <div class = "input input-wrapper">
                                <i class = "fa fa-key"></i>
                                <input name = "password" class = "input-box password" type = "password" placeholder = "password">
                            </div>
                            <button class = "password-show">
                                <i class = "fa fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class = "two-factor-container">
                        <label for = "two-factor">Kode autentikasi 2 factor: </label>
                        <div class = "input input-wrapper">
                            <i class = "fa fa-key"></i>
                            <input type = "number" class = "input-box two-factor" placeholder = "123456">
                        </div>
                    </div>

                    <input type = "submit" class = "button submit" value = "Login">
                </form>
            </main>
        </div>

        <script>
            var loginFilled = false
            function resetForm() {
                $('.two-factor-container').removeClass('active')
                $('.login-container').show()
            
                loginFilled = false
            }
            
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

                if (!loginFilled) {
                    $.post('/api/admin.php', {method: 'login', username: $('.username').val(), password: $('.password').val()}, function(data, status) {
                        if (data == 'redirect') {
                            window.location.href = '/admin/dashboard.php'
                        } else if (data == 'two_factor') {
                            $('.two-factor-container').addClass('active')
                            $('.login-container').hide()

                            loginFilled = true
                        } else {
                            alert(data)
                        }
                    })
                } else {
                    $.post('/api/admin.php', {method: 'verify_two_factor', code: $('.two-factor').val()}, function(data, status) {
                        if (data == 'redirect') {
                            window.location.href = '/admin/dashboard.php'
                        } else {
                            alert(data)
                        }
                    })
                }
            })
        </script>
    </body>
</html>