<?php
$token = generateToken();
?>

<section data-cid="slide-12-f26a24eb" class="slide fade-6 slide<?= $token; ?> kenBurns after">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <div class="fix-7-12">
          <h1 class="margin-bottom-2 ae-1">1Beyond the Naked Eye</h1>
          <p class="larger light ae-2"><span class="opacity-8">While it was just a TV show, that little speech at the beginning of the original Star Trek show really did do a good job of capturing our feelings about space.</span></p>
          <div class="margin-top-3">
            <form class="slides-form" action="https://designmodo.com/slides/app/#" method="get" autocomplete="off">
              <input type="email" class="input-12 rounded ae-5 fromLeft" name="email" placeholder="Email address">
              <button type="submit" class="button blue rounded ae-7 fromCenter" name="button">Get Started</button>
            </form>
            <p class="large margin-top-3 ae-3"><span class="opacity-8">Start now and get <b>free bonus</b> on account</span></p>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <div class="background" ></div>
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