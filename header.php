<?php 
    $datajson = file_get_contents("data.json");
    $datajson = json_decode($datajson, true);
    ?>
<header class="l-header">
    <nav class="nav bd-grid">
        <div>
            <!-- Tautan logo menggunakan data dari JSON -->
            <a href="#" class="nav__logo"><?= $datajson['about']['name'] ?></a>
        </div>
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <!-- Menampilkan tautan menu navigasi dengan data dari JSON -->
                <li class="nav__item"><a href="#home" class="nav__link active-link"><?= $datajson['menu']['home'] ?></a></li>
                <li class="nav__item"><a href="#about" class="nav__link"><?= $datajson['menu']['about'] ?></a></li>
                <li class="nav__item"><a href="#skills" class="nav__link"><?= $datajson['menu']['skills'] ?></a></li>
                <li class="nav__item"><a href="#work" class="nav__link"><?= $datajson['menu']['portfolio'] ?></a></li>
                <li class="nav__item"><a href="#contact" class="nav__link"><?= $datajson['menu']['contact'] ?></a></li>
            </ul>
        </div>
        <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-menu'></i>
        </div>
    </nav>
</header>