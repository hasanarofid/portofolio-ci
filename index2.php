<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio website complete</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php 
    $datajson = file_get_contents("data.json");
    $datajson = json_decode($datajson, true);
    ?>
    <?php include 'header.php'; ?>

    <main class="l-main">
        <!--===== HOME =====-->
        <section class="home bd-grid" id="home">
            <div class="home__data">
                <h1 class="home__title"><?= $datajson['home']['title'] ?></h1>
                <h2 class="home__subtitle"><?= $datajson['home']['subtitle'] ?></h2>
            </div>

            <div class="home__social">
                <!-- Tampilkan tautan media sosial -->
                <?php foreach ($datajson['home']['social'] as $social) : ?>
                    <a href="<?= $social['url'] ?>" class="home__social-icon"><i class="<?= $social['icon'] ?>"></i></a>
                <?php endforeach; ?>
                <a href="#" class="button">Contact</a>
            </div>

            <div class="home__img">
                <img src="<?= $datajson['home']['image'] ?>" alt="Stanley">
            </div>
        </section>

        <!--===== ABOUT =====-->
        <section class="about section" id="about">
            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="assets\img\stanley-removebg-preview.png" alt="">
                </div>
                <div>
                    <h2 class="about__subtitle"><?= $datajson['about']['name'] ?></h2>
                    <p class="about__text"><?= $datajson['about']['description'] ?></p>
                </div>
            </div>
        </section>

        <!--===== SKILLS =====-->
        <section class="skills section" id="skills">
            <div class="skills__container bd-grid">
                <div>
                    <h2 class="skills__subtitle">Profesional Skills</h2>
                    <p class="skills__text"><?= $datajson['skills']['professional_description'] ?></p>
                    <div class="skills__data">
                        <?php foreach ($datajson['skills']['professional'] as $skill) : ?>
                            <div class="skills__names">
                                <i class="<?= $skill['icon'] ?> skills__icon"></i>
                                <span class="skills__name"><?= $skill['name'] ?></span>
                            </div>
                            <div class="skills__bar <?= $skill['class'] ?>"></div>
                            <div><span class="skills__percentage"><?= $skill['percentage'] ?></span></div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div>
                    <img src="<?= $datajson['skills']['image'] ?>" alt="" class="skills__img">
                </div>
            </div>
        </section>

        <!--===== WORK =====-->
        <section class="work section" id="work">
            <div class="work__container bd-grid">
                <?php foreach ($datajson['portfolio'] as $item) : ?>
                    <a href="<?= $item['url'] ?>" class="work__img"><img src="<?= $item['image'] ?>" alt=""></a>
                <?php endforeach; ?>
            </div>
        </section>

        <!--===== CONTACT =====-->
        <section class="contact section" id="contact">
            <div class="contact__container bd-grid">
                <form action="" class="contact__form">
                    <input type="text" placeholder="<?= $datajson['contact']['name_placeholder'] ?>" class="contact__input">
                    <input type="mail" placeholder="<?= $datajson['contact']['email_placeholder'] ?>" class="contact__input">
                    <textarea name="" id="" cols="0" rows="10" placeholder="<?= $datajson['contact']['message_placeholder'] ?>" class="contact__input"></textarea>
                    <input type="button" value="<?= $datajson['contact']['submit_button'] ?>" class="contact__button button">
                </form>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
