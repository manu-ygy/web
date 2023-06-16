<!DOCTYPE html>
<html>
    <head>
        <title>Reset password</title>
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
                        <h1 class = "title">Reset password</h1>
                        <label>Masukkan email terdaftar untuk mereset password.</label>
                    </div>
    
                    <label for = "email">E-mail: </label>
                    <div class = "input input-wrapper">
                        <i class = "fa fa-user"></i>
                        <input name = "email" class = "input-box email" placeholder = "bambang@mail.com">
                    </div>

                    <input type = "submit" class = "button submit" value = "Kirim">

                    <small class = "actions">
                        Anda juga dapat menghubungi administrator untuk mereset secara langsung.
                    </small>
                </form>

                <div class = "sent">
                    <h1 class = "title">Link terkirim</h1>
                    <label>Silahkan cek email Anda untuk mereset password.</label>
                </div>
            </main>
        </div>

        <script>
            $('.submit').on('click', function(event) {
                event.preventDefault()

                $.post('/api/users.php', {method: 'resetpass', email: $('.email').val()}, function(data, status) {
                    if (data != 'success') {
                        alert(data);
                    } else {
                        $('.sent').addClass('active')
                        $('.form').hide()
                    }
                })
            })
        </script>
    </body>
</html>