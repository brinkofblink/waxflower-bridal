<?php namespace Processwire; ?>

<div pw-replace="main" class="designer">
<div class="intro">
  <h1><?= $page->title ?></h1>
  <?= $page->text_area ?>
</div>
<div class="events-listing">
<?php $page->children->find('date<=today,sort=date')->each(function($e) { ?>
  <div class="event">
    <div class="event__info">
      <h2><?= $e->title ?> </h2>
      <?= $e->text_area ?>
      <?php if($e->link) {
        echo "<a href='{$e->link->url}' class='button'>Book a place</a>";
      } ?>
    </div>
    <div class="event__image">
        <img data-src="<?= $e->image->size(560,380, ['upscaling' => false])->url ?>" class="cld-responsive" alt="">
    </div>
  </div>
<?php }) ?>
</div>
</div>
