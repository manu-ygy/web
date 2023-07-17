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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src='https://www.hCaptcha.com/1/api.js' async defer></script>
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

                    <center class = "captcha-parent">
                        <div class = "h-captcha" data-sitekey = "10000000-ffff-ffff-ffff-000000000001" data-callback = "correctCaptcha"></div>
                    </center>

                    <input type = "submit" class = "button submit" value = "Login">

                    <small class = "actions">
                        <a href = "/user/resetpass.php">Lupa password?</a>
                        <a href = "/user/account">Tidak punya akun?</a>
                        <a href = "">Login pakai sch.id</a>
                    </small>
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

            var captchaResponse
            function correctCaptcha(data) {
                captchaResponse = data
            }

            var invalidCount = 0
            $('.submit').on('click', function(event) {
                event.preventDefault()

                $.post('/api/users.php', {method: 'login', email: $('.username').val(), password: $('.password').val(), captchaResponse: captchaResponse}, function(data, status) {
                    if (data != 'redirect') {
                        let timerInterval
                        Swal.fire({
                            html: `<div style = "display: flex; align-items: center;"><div style = "text-align: left; margin-right: auto;">${data}</div><i class = "fa fa-close" onclick = "Swal.close()"></i></div>`,
                            timer: 5000,
                            timerProgressBar: true,
                            background: '#fafafa',
                            backdrop: false,
                            position: 'bottom-end',
                            showConfirmButton: false,
                            grow: false,
                            willClose: () => {
                                clearInterval(timerInterval)
                            }
                            }).then((result) => {
                            
                        })
                        invalidCount += 1

                        if (invalidCount >= 3) {
                            $('.submit').css('margin-top', '0')
                            $('.captcha-parent').show()
                        }
                    } else {
                        window.location.href = '/user/dashboard.php'
                    }
                })
            })

            <?php 
                if ($_SESSION['invalid_count'] >= 3) {
                    echo "$('.submit').css('margin-top', '0'); $('.captcha-parent').show()"; 
                }
            ?>
        </script>
    </body>
</html>