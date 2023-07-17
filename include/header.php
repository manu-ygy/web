<div class = "header-holder"></div>
<header class = "header">
    <div class = "top-header"></div>

    <div class = "bottom-header">
        <div class = "header-content dropdown">
            <span>Informasi sekolah</span>
            <i class="fa-solid fa-caret-down"></i>

            <ul class = "dropdown-list">
                <a href = "/profile.php"><li class = "dropdown-item">Visi & misi</li></a>
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
                <a href = "/staffs/teacher.php"><li class = "dropdown-item">Direktori guru</li></a>
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

        <div class = "header-right">
        <?php 
            session_start();

            if (isset($_SESSION['username'])) {
                echo '<a href = "/user/dashboard.php"><button class = "button">Dashboard</button></a>';
            } else {
                echo '<a href = "/user/login.php"><button class = "button">Login</button></a>';
            }

            if (isset($_SESSION['admin'])) {
                echo '<a href = "/admin/dashboard.php"><button class = "button">Admin panel</button></a>';
            }
        ?>
        </div>
    </div>
</header>