<?php
    session_start();

    error_reporting(0);

    if (!isset($_SESSION['username'])) {
        header('Location: /user/login.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "/css/style.css">
        <link rel = "stylesheet" href = "/css/dashboard.css">

        <script src="https://kit.fontawesome.com/1cf918f51b.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class = "wrapper">
            <section class = "side">
                <span>Halo, <?php echo $_SESSION['username']?>.</span>

                <ul class = "item-container">
                    <li class = "item active" value = "home">
                        <i class = "fa fa-home"></i>
                        <span>Halaman muka</span>
                    </li>
                    <li class = "item" value = "user">
                        <i class = "fa fa-user"></i>
                        <span>Moderasi user</span>
                    </li>
                    <li class = "item" value = "content">
                        <i class = "fa-solid fa-newspaper"></i>
                        <span>Moderasi konten</span>
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

            $('.item').on('click', function() {
                $('.item').removeClass('active')
                $(this).addClass('active')

                if ($(this).attr('value') != 'logout') {
                    renderPage($(this).attr('value'))
                } else {
                    $.post('/api/users.php', {method: 'logout', function(data, status) {
                        window.location.href = '/user/login.php'
                    }})
                }
            })

            $(window).on('load', function() {
                renderPage('home')
            })
        </script>
    </body>
</html>