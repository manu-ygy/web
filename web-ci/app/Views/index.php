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
        <header class = "header">
            <div class = "top-header"></div>

            <div class = "bottom-header">
                <div class = "header-content dropdown">
                    <span>Informasi sekolah</span>
                    <i class="fa-solid fa-caret-down"></i>

                    <ul class = "dropdown-list">
                        <a href = ""><li class = "dropdown-item">Visi & misi</li></a>
                        <a href = ""><li class = "dropdown-item">Sejarah singkat</li></a>
                        <a href = ""><li class = "dropdown-item">Sarana & prasarana</li></a>
                        <a href = ""><li class = "dropdown-item">Materi uji</li></a>
                        <a href = ""><li class = "dropdown-item">Kalender akademik</li></a>
                    </ul>
                </div>
                <div class = "header-content dropdown">
                    <span>Guru</span>
                    <i class="fa-solid fa-caret-down"></i>

                    <ul class = "dropdown-list">
                        <a href = ""><li class = "dropdown-item">Direktori guru</li></a>
                        <a href = ""><li class = "dropdown-item">Silabus</li></a>
                        <a href = ""><li class = "dropdown-item">Materi ajar</li></a>
                        <a href = ""><li class = "dropdown-item">Materi uji</li></a>
                        <a href = ""><li class = "dropdown-item">Kalender akademik</li></a>
                    </ul>
                </div>
                <a class = "header-content">Prestasi</a>
                <a class = "header-content">Artikel</a>
                <a class = "header-content">Virtual tour</a>
                <a class = "header-content" href = "https://psbyss.aimsis.com/">PPDB Online</a>

                <a class = "header-right" href = "/user/login">
                    <button class = "button">Login</button>
                </a>
            </div>
        </header>

        <section class = "hero">
            <div class = "hero-cover"></div>
            <div class = "hero-text">
                <h1 class = "hero-title">SMA Yos Sudarso Karawang</h1>
                <p class = "hero-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, itaque ullam mollitia assumenda doloremque sed, eligendi cum, cupiditate blanditiis delectus consequatur aspernatur nobis reprehenderit molestiae deleniti voluptatibus fugit amet exercitationem.</p>
            
                <button class = "button">Lihat lebih lanjut</button>
            </div>
        </section>

        <main class = "main">
            <section class = "grand-carousel">
                
            </section>

            <section class = "content">
                <div class = "content-body">
                    <img class = "content-image" src = "https://images01.nicepage.com/a1389d7bc73adea1e1c1fb7e/a697bb7cc704584594bbf55d/pexels-italo-melo-2379004.png">
                    <div class = "content-text">
                        <h1>Lorem ipsum</h1>
    
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit delectus fugiat magni voluptates recusandae veritatis aspernatur architecto optio tempora, ducimus, corrupti incidunt quis dignissimos saepe. Facilis vel suscipit officia numquam.</p>
                    </div>
                </div>

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
                </div>
            </section>

            <section class = "gallery">
                <div class = "image">
                
                </div>
            </section>

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
        <footer>
            <div class="top-footer">
                <div class="wrapper">
                    <div class="top-info">
                        <div class="logo">
                            <img src="/images/logo.png" alt="">
                        </div>
                        <div class="addrs">
                            <div class="part">
                                <h6>OUR SCHOOL</h6>
        
        <p>Jl. Belakang Pasar No.14 Karawang</p>
        
                            </div>
                            <div class="part">
                                <p>T.   +62 xxx xxxx xxxx</p>
                                <p>F.   +62 xxx xxxx xxxx</p>
                            </div>
                        </div>
                        <div class="ico-sosmed">
                                                    <a href="" class="ic_twt"
                                        style="background: url() no-repeat center;"
                                        target="_blank">
                                </a>
                                                    <a href="" class="ic_twt"
                                        style="background: url() no-repeat center;"
                                        target="_blank">
                                </a>
                                                    <a href="" class="ic_twt"
                                        style="background: url() no-repeat center;"
                                        target="_blank">
                                </a>
                                              
                        </div>
                    </div>
                </div>
            </div>
            <div class="bot-footer">
                <div class="wrapper">
                    <div class="left">
                        <div class="ic-partner">
                                <a style="height: 60px;width: 60px;" href="" class="part-1"><img src=""></a>
                                <a style="height: 60px;width: 60px;" href="" class="part-2"><img src=""></a>
                                <a style="height: 60px;width: 60px;" href="" class="part-3"><img src=""></a>
                        </div>
                    </div>
                    <div class="right">
                        <div class="desc">
                            <div class="nav-bot">
                                    </div>
                            <div class="copy">
                                <p>Copyright © 2018 ACS Jakarta</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
    </body>
</html>