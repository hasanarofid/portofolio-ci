<?php 
    $datajson = file_get_contents("data.json");
    $datajson = json_decode($datajson, true);
    ?>
<footer class="footer">
    <p class="footer__title"><?= $datajson['about']['name'] ?></p>
    <div class="footer__social">
        <!-- <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
        <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
        <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a> -->
        <?php foreach ($datajson['footer']['social'] as $social): ?>
            <a href="<?= $social['url'] ?>" class="footer__icon"><i class='<?= $social['icon'] ?>' ></i></a>
        <?php endforeach; ?>
    </div>
    <p class="footer__copy">&#169; <?= $datajson['about']['name'] ?>. All rights reserved</p>
</footer>
