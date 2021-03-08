<?php namespace Processwire; ?>

<div pw-replace="main" class="index">
<div class="slider-wrap">
  <ul class="slider">
    <?php $page->carousel_images->each(function($child) { ?>
      <li class="slide">
        <!-- <img data-src="https://res.cloudinary.com/waxflower-bridal/image/upload/w_auto,c_scale,dpr_auto,q_auto/<?= $child->url ?>" class="cld-responsive" alt=""> -->
        <img src="<?= $child->srcsetUrls['smallest'] ?>" data-srcset="<?= $child->srcset('1930x1000,/1.5,/2,/3,/4') ?>" data-sizes="auto" class="lazyload" alt="">
      </li>
    <?php }) ?>
  </ul>
  <div class="intro-block">
    <h1>Celebrating individuality</h1>
  </div>
</div>
<div class="designer-details">
  <h2>About Waxflower Bridal</h2>
  <?= $page->text_area ?>
  <a href="/designers/dresses/" class="button">View our collection</a>
</div>

<div class="whats-new-wrap">
  <div class="whats-new">
    <div>
      <h2>What's new?</h2>
      <p>See what's new in our world.</p>
    </div>
    <div class="whats-new-slider">
      <?php foreach($page->whats_new as $w) { ?>
        <div>
          <a href="<?= $w->link->url ?>">
            <img src="<?= $w->image->srcsetUrls['smallest'] ?>" srcset="<?= $w->image->srcset('600x800,/1.5,/2,/3,/4') ?>" sizes="auto" class="lazyload" alt="">
            <h3><?= $w->heading ?></h3>
          </a>
      </div>
      <?php } ?>
      </div>
  </div>
</div>
<div class="sample-sale-wrap">
  <div class="sample-sale">
    <div class="slide">
    <?php
      $ratio = $page->sample_sale_image->width / $page->sample_sale_image->height;
      $w = 1200;
      $h = 1200/$ratio;
    ?>
      <img src="<?= $page->sample_sale_image->srcsetUrls['smallest']  ?>" data-srcset="<?= $page->sample_sale_image->srcset($w . 'x' . $h . ',/2,/3,/4') ?>" data-sizes="auto" src="" class="lazyload" alt=""/>
      <h2>Shop our sample sale</h2>
      <a href="/designers/dresses/sample-sale" class="button">Shop our sample sale</a>
    </div>
  </div>
</div>

<div class="homepage-reviews">
  <h2>Reviews</h2>
  <div class="previous-review">
    <img src="<?= $config->urls->templates ?>images/hand-pointing-left.png" width="100" height="46" alt="previous">
  </div>
  <div class="homepage-review-cards">
    <?php foreach($page->reviews as $r) { ?>
      <div>
        <?= $r->text_area ?>
      </div>
    <?php } ?>
  </div>
  <div class="next-review">
    <img src="<?= $config->urls->templates ?>images/hand-pointing-right.png" width="100" height="46" alt="previous">
  </div>
</div>
<div class="visit-showroom-wrap">
  <div class="visit-showroom">
    <div class="slide">
    <?php
      $ratio = $page->shop_image->width / $page->shop_image->height;
      $w = 1200;
      $h = 1200/$ratio;
    ?>
      <img src="<?= $page->shop_image->srcsetUrls['smallest']  ?>" data-srcset="<?= $page->shop_image->srcset($w . 'x' . $h . ',/2,/3,/4') ?>" data-sizes="auto" src="" class="lazyload" alt=""/>
      <h2>Visit our showroom</h2>
      <a href="/contact" class="button">Make a bridal appointment</a>
    </div>
  </div>
</div>
<?php

function renderInstagramImage($src, $alt, $href = null) {
	if(is_null($href)) $href = $src;
  $caption = wire('sanitizer')->truncate($alt, 120);
  return "<figure class='instagram-item'>
  <a href='https://www.instagram.com/p/BxbtpfNBmVu/'>
    <picture>
      <img src='$src' alt='$alt'>
    </picture>
  </a>
  <figcaption>$caption</figcaption>
</figure>";
}

function renderInstagramVideo($src, $alt, $href = null) {
	if(is_null($href)) $href = $src;
  $caption = wire('sanitizer')->truncate($alt, 120);
  return "<figure class='instagram-item'>
    <video controls poster='$src' src='$href'></video>
    <figcaption>$caption</figcaption>
    </figure>'";
}



$instagram = $modules->get('InstagramBasicDisplayApi');

$items = [];
foreach($instagram->getMedia(8) as $item) {
	switch($item->type) {
		case 'VIDEO':
			$items[] = renderInstagramVideo($item->poster, $item->alt, $item->src);
			break;
		default: // IMAGE
			$items[] = renderInstagramImage($item->src, $item->alt);
			break;
	}
}

?>

<div class="instagram">
  <?php foreach($items as $item) {
	  echo $item;
  } ?>
  <h2><a href="https://instagram.com/waxflowerbridal">Join our world</a></h2>
</div>
</div>
</div>

