<?php namespace Processwire; ?>

<div pw-replace="main" class="about">
  <div class="about__title">
    <h1>DIRECTOR OF WAXFLOWER BRIDAL // Kathy Holdsworth</h1>
  </div>
  <div class="about__block">
    <img src="<?= $page->about_kathy->image->url ?>" alt="Photo of Kathy">
  </div>
  <div class="about__block">
    <img src="<?= $page->the_experience->image->url ?>" width="335" height="167" alt="Union Jack Flag">
  </div>
  <div class="about__block">
    <h2><?= $page->about_kathy->title ?></h2>
    <?= $page->about_kathy->text_area ?>
    <div class="about__block-divider"></div>
  </div>
  <div class="about__block">
    <h2><?= $page->the_experience->title ?></h2>
      <?= $page->the_experience->text_area ?>
  </div>
  <div class="about__block--full">
  <div class="about__cta">
    <a href="/contact" class="button">Make an appointment with Kathy ❤</a>
  </div>
    <div>
      <img src="<?= $page->the_name->image->url ?>" width="170" height="150" alt="Illustration of waxflowers">
      <div>
        <h2><?= $page->the_name->title ?></h2>
        <?= $page->the_name->text_area ?></div>
      </div>
  </div>
</div>
