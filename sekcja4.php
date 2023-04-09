<?php
$token = generateToken();
?>

<section class="slide fade-6 slide<?= $token; ?> kenBurns animate" id="rejestracja">
  <div class="content">
    <div class="container  ae-1 fromCenter">
      <div class="wrap">
        <div class="fix-7-12">
             <div class="fix-11-12">
                 <h4>
            <span class="shift-up-2">
              <img  class="done" height="27"  src="./assets/image/dsm-white.png" alt="dsm logo">
            </span>
                <?= $header; ?>     
          </h4>
        </div>
          <p class="light margin-top-2 done"><?= $description; ?></p>
                    <div class="margin-top-3">                    
<?PHP
    require './lang/mailer-'.$lang.'.php';
?>                 
          </div>
          <?php
          if ($description2 != "") {
          ?>
          <h4 class="margin-bottom-2 margin-top-2 "><?= $description2; ?></h4>
          <?php
                    }
          ?>
          <a class="light done" href="#" id="privacyPolicyLink"><?= $politykaPrywatnosci; ?></a>
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