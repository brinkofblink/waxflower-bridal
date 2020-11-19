<?php namespace Processwire; ?>

<div pw-replace="main" class="about">
<div class="about__title">
<h1>DIRECTOR OF WAXFLOWER BRIDAL // Kathy Holdsworth</h1>
</div>
<div class="about__story">
    <div>
      <img src="<?= $page->about_kathy->image->url ?>" alt="Photo of Kathy">
    </div>
<div>
  <h2><?= $page->about_kathy->title ?></h2>
  <?= $page->about_kathy->text_area ?>
</div>
</div>
<div class="about__boutique">
  <div>
    <h2><?= $page->british_design->title ?></h2>
    <?= $page->british_design->text_area ?>
  </div>
  <img src="<?= $page->british_design->image->url ?>" width="335" height="167" alt="Union Jack Flag">
</div>
<div class="about__british-designers">
  <div><img src="<?= $page->the_boutique->image->url ?>" alt="Row of dresses in shop">
    <p class="photo-credit">Photo credit: <a href="https://www.larissajoice.co.uk" target="_blank">Larissa Joice Photography</a></p></div>
  <div><h2><?= $page->the_boutique->title ?></h2>
  <?= $page->the_boutique->text_area ?>
</div>
</div>
<div class="about__name">
  <div>
    <h2><?= $page->the_name->title ?></h2>
    <?= $page->the_name->text_area ?>
  </div>
  <div>
    <img src="<?= $page->the_name->image->url ?>" width="170" height="150" alt="Illustration of waxflowers">
  </div>
</div>
</div>
