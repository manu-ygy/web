<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "css/style.css">
        <link rel = "stylesheet" href = "css/index.css">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">

        <script src="https://kit.fontawesome.com/1cf918f51b.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <title>Draft website</title>
    </head>

    <body>
        <?php include 'include/header.php'; ?>

        <section class = "hero">
            <div class = "hero-cover"></div>
            <div class = "hero-text">
                <h1 class = "hero-title">SMA Yos Sudarso Karawang</h1>
                <p class = "hero-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, itaque ullam mollitia assumenda doloremque sed, eligendi cum, cupiditate blanditiis delectus consequatur aspernatur nobis reprehenderit molestiae deleniti voluptatibus fugit amet exercitationem.</p>
            
                <button class = "button">Lihat lebih lanjut</button>
            </div>
        </section>

        <main class = "main">
            <section class = "content">
                <div class = "content-body">
                    <img class = "content-image" src = "https://images01.nicepage.com/a1389d7bc73adea1e1c1fb7e/a697bb7cc704584594bbf55d/pexels-italo-melo-2379004.png">
                    <div class = "content-text">
                        <h1>Lorem ipsum</h1>
    
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit delectus fugiat magni voluptates recusandae veritatis aspernatur architecto optio tempora, ducimus, corrupti incidunt quis dignissimos saepe. Facilis vel suscipit officia numquam.</p>
                    </div>
                </div>
            </section>

            <section class = "programs">
                <h1>Program unggulan</h1>
                <p>Lorem ipsum dolor sit amet</p>

                <div class = "hero-carousel">
                    <div class = "image-wrapper">
                        <img class = "hero-image" src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYHat90hIXoQ4p4AL-NDg67NYZIpKVkC07fuKfKUxGXl-YuMtmYE5xDX3QUI6GXRc0XmQ&usqp=CAU">
                        <div class = "image-overlay">
                            <span>Lorem ipsum</span>
                        </div>
                    </div>

                    <div class = "image-wrapper">
                        <img class = "hero-image" src = "https://www.acsjakarta.sch.id/site/uploads/images/63b405c70796b-3-l.jpg">
                        <div class = "image-overlay">
                            <span>Lorem ipsum</span>
                        </div>
                    </div>

                    <div class = "image-wrapper">
                        <img class = "hero-image" src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYHat90hIXoQ4p4AL-NDg67NYZIpKVkC07fuKfKUxGXl-YuMtmYE5xDX3QUI6GXRc0XmQ&usqp=CAU">
                        <div class = "image-overlay">
                            <span>Lorem ipsum</span>
                        </div>
                    </div>

                    <div class = "image-wrapper">
                        <img class = "hero-image" src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYHat90hIXoQ4p4AL-NDg67NYZIpKVkC07fuKfKUxGXl-YuMtmYE5xDX3QUI6GXRc0XmQ&usqp=CAU">
                        <div class = "image-overlay">
                            <span>Lorem ipsum</span>
                        </div>
                    </div>

                    <div class = "image-wrapper">
                        <img class = "hero-image" src = "https://www.acsjakarta.sch.id/site/uploads/images/63b405c70796b-3-l.jpg">
                        <div class = "image-overlay">
                            <span>Lorem ipsum</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class = "contact">
                <h1>Terhubung dengan kami</h1>

                <div class = "sns">
                    <img class = "sns-content" src = "https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1024px-Instagram_logo_2022.svg.png">
                    <img class = "sns-content" src = "https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/2048px-Facebook_f_logo_%282019%29.svg.png">
                </div>
            </section>

            <?php include 'include/footer.php'?>

            <script>
                var toggled = false
                $(window).scroll(function(){
                    $('.header').removeClass('animation-backward')
                    if ($(window).scrollTop() >= $('.header').height() + 64) {
                        $('.header').addClass('sticky')
                        toggled = false
                    } else {
                        if (!toggled) {
                            $('.header').removeClass('sticky')
                        }
                    }
                })
            </script>
        </main>
    </body>
</html>