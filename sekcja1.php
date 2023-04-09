<?php
$token = generateToken();
?>

<section class="slide fade-6 slide<?= $token; ?> kenBurns animate">

  <div class="content">

    <div class="container ae-1 fromCenter">

      <div class="wrap">
                                  <div class="language-container">
<div class="language-selector">
  <img src="./lang/pl.png" alt="Polish flag" class="language-flag" data-lang="pl">
  <img src="./lang/en.png" alt="English flag" class="language-flag" data-lang="en">
  <img src="./lang/es.png" alt="Spanish flag" class="language-flag" data-lang="es">
</div>
</div>
        <div class="fix-7-12">

          <div class="fix-3-12 ">
              <img  class="" height="55" width="175" src="./assets/image/dsm-white.png" alt="dsm logo">
          </div>
            <h4 class="margin-bottom-2 margin-top-2">
                <span class="">
                <?= $header; ?>
            </span></h4>
     
          <p class="light margin-top-2 done"><?= $description; ?></p>
          <?php require 'listaoczekujacych.php'; ?>




        </div>
      </div>
    </div>
  </div>
  <div class=" background" ></div>
</section>

<style>
    @media (min-width: 768px) {
  .slide.fade-6.slide<?= $token; ?> .background {
    background-image: url(assets/background/<?= $image; ?>);
  }
}
@media (max-width: 767px) {
  .slide.fade-6.slide<?= $token; ?> .background {
    background-image: url(assets/background/<?= $imagephone; ?>);
  }
}
</style>