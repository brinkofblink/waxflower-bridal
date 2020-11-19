<?php namespace Processwire; ?>

<div pw-replace="main" class="shop">
<div class="intro">
  <h1><?= $page->title ?></h1>
  <?= $page->text_area ?>
</div>
<div class="products">
<?php $page->children()->each(function($p) { ?>
  <div class="product">
    <div class="image">
    <img data-srcset="<?= $p->product_images->first->srcset('670x1000,/1.5,/2,/3,/4') ?>" data-sizes="auto" class="lazyload" alt="<?= $p->title ?>">
    </div>
    <a href="<?= $p->url ?>" class="button"><?= $p->title ?></a>
  </div>
<?php }) ?>
</div>
</div>