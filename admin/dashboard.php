<?php
    session_start();

    error_reporting(0);

    if (!isset($_SESSION['admin'])) {
        header('Location: /admin/login.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "/css/style.css">
        <link rel = "stylesheet" href = "/css/dashboard.css">
        <link rel = "stylesheet" href = "/css/admin.css">

        <script src="https://kit.fontawesome.com/1cf918f51b.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class = "overlay"></div>
        <div class = "register-two-factor">
            <center>
                <h1 class = "title">Tambahkan pengamanan</h1>
                <span>Silahkan tambahkan keamanan 2 faktor autentikasi ke akun Anda.</span>
            </center>

            <div class = "show-code">
                <img class = "two-factor-qr">

                <span>Atau masukkan kode ini jika tidak bisa scan:</span>
                <div class = "two-factor-code input"></div>

                <button class = "button" onclick = "showVerify()">Sudah</button>
            </div>

            <div class = "verify-code" style = "display: none;">
                <label>Masukkan kode:</label>
                <input class = "input two-factor-verify">

                <button class = "button" onclick = "verifyTwoFactor()">Verifikasi</button>
            </div>
        </div>

        <div class = "wrapper">
            <section class = "side">
                <span>Halo, <?php echo $_SESSION['admin']?>.</span>

                <ul class = "item-container">
                    <li class = "item active" value = "home">
                        <i class = "fa fa-home"></i>
                        <span>Halaman muka</span>
                    </li>
                    <li class = "item" value = "user">
                        <i class = "fa fa-user"></i>
                        <span>Moderasi user</span>
                    </li>
                    <li class = "item" value = "admin">
                        <i class = "fa fa-user"></i>
                        <span>Moderasi admin</span>
                    </li>
                    <li class = "item" value = "content">
                        <i class = "fa-solid fa-newspaper"></i>
                        <span>Moderasi konten</span>
                    </li>
                    <li class = "item" value = "page">
                        <i class = "fa-solid fa-newspaper"></i>
                        <span>Moderasi halaman</span>
                    </li>
                    <li class = "item" value = "logout">
                        <i class = "fa-solid fa-right-from-bracket"></i>
                        <span>Keluar</span>
                    </li>
                </ul>
            </section>
            <main class = "main">
            </main>
        </div>

        <script>
            function renderPage(page) {
                var result = $.get(`/admin/${page}.html`, function(data, status) {
                    $('.main').html(data)      
                })
            }

            function getTwoFactor() {
                $('.overlay').show()
                $('.register-two-factor').addClass('active')

                $.post('/api/admin.php', {method: 'request_two_factor', code: $('.two-factor').val()}, function(data, status) {
                    var data = JSON.parse(data)

                    $('.two-factor-qr').attr('src', data.image)
                    $('.two-factor-code').html(data.secret)
                })
            }

            function showVerify() {
                $('.show-code').hide()
                $('.verify-code').show()
            }

            function verifyTwoFactor() {
                $.post('/api/admin.php', {method: 'verify_two_factor', code: $('.two-factor-verify').val()}, function(data, status) {
                    if (data == 'redirect') {
                        $.post('/api/admin.php', {method: 'set_two_factor'}, function(data, status) {
                            $('.overlay').hide()
                            $('.register-two-factor').removeClass('active')
                        })
                    } else {
                        alert(data)
                    }
                })
            }

            $('.item').on('click', function() {
                $('.item').removeClass('active')
                $(this).addClass('active')

                if ($(this).attr('value') != 'logout') {
                    renderPage($(this).attr('value'))
                } else {
                    $.post('/api/users.php', {method: 'logout'}, function(data, status) {
                        window.location.href = '/admin/login.php'
                    })
                }
            })

            $(window).on('load', function() {
                renderPage('home')
            })

            <?php 
                if (!$_SESSION['verified']) {
                    echo 'getTwoFactor()';
                }
            ?>
        </script>
    </body>
</html>