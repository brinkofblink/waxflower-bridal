<?php namespace Processwire; ?>

<div pw-replace="main" class="events">
<div class="slider-wrap">
  <ul class="slider">
    <?php $page->carousel_images->each(function($child) { ?>
      <li class="slide">
        <img src="<?= $child->srcsetUrls['smallest'] ?>" data-srcset="<?= $child->srcset('1930x1000,/1.5,/2,/3,/4') ?>" width="<?= $child->width ?>" height="<?= $child->height ?>" data-sizes="auto" class="lazyload" alt="">
      </li>
    <?php }) ?>
  </ul>
  <div class="intro-block">
    <h1>Waxflower Bridal Events</h1>
  </div>
</div>
<div class="designer-details">
  <h2>Our Events</h2>
  <?= $page->text_area ?>
</div>
<div class="events-listing">
<?php $today = strtotime( date('Y-m-d') . " 23:59:59"); ?>
<?php $page->children->find("date>=$today,sort=date")->each(function($e) { ?>
  <div class="event" id="event-<?= $e->id ?>">
    <div class="event__date">
      <?php
        $month = wire('datetime')->date("M", $e->date);
        $day = wire('datetime')->date("j", $e->date);
        $year = wire('datetime')->date("Y", $e->date);
        echo "<span>$month</span>";
        echo "<span>$year</span>";
        echo "<span>$day</span>";
      ?>
    </div>
    <div class="event__info">
      <h2><?= $e->title ?> </h2>
      <?= $e->text_area ?>
      <?php if($e->link) {
        echo "<a href='{$e->link->url}' class='button'>Book a place</a>";
      }
      echo "<button class='share-button button' data-id='event-$e->id'>Tell my crew!</a>";
      ?>
    </div>
    <div class="event__image">
    <?php
      $ratio = $e->image->width / $e->image->height ;
      $w = 840;
      $h = 840;
    ?>
      <img src="<?= $e->image->srcsetUrls['smallest']  ?>" data-srcset="<?= $e->image->srcset($w . 'x' . $h . ',/2,/3,/4') ?>" data-sizes="auto" src="" class="lazyload" alt=""/>
    </div>
  </div>
<?php }) ?>
</div>
</div>