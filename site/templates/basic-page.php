<?php namespace Processwire;
?>

<div pw-replace="main" class="<?= $page->name ?>">
  <div class="intro">
    <?= $page->text_area ?>
  </div>
  <?php if ($page->name == 'wardrobe') {
    $dressIds = $sanitizer->array(json_decode($input->cookie('favouriteDresses'))); ?>
    <div class='wardrobe dresses'>
    <?php
    $dressIds = $dressIds.implode($dressIds, "|");
    $dresses = $pages->find("template=product,id=$dressIds");
    $dresses->each(function($p) { ?>
      <div class="dress">
      <div class="image">
          <img data-srcset="<?= $p->image->srcset('670x1000,/1.5,/2,/3,/4') ?>" data-sizes="auto" class="lazyload" alt="">
        <div class="dress-name" data-gallery="<?= $page->name ?>" href="<?= $p->image->srcsetUrls['largest'] ?>">
          <a href="<?= $p->parent->url ?>"><?= $p->title ?></a>
          <div class="dress-heart"><?php include './partials/_heart.php' ?></div>
        </div>
      </div>
      <a href="<?= $p->parent->url ?>"><h2><?= $p->title ?> <?php include './partials/_heart.php' ?></h2></a>
    </div>
    <?php }) ?>
    </div>
  <?php }
  ?>
</div>