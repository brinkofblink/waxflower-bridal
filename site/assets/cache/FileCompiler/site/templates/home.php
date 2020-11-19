<?php namespace Processwire; ?>

<div pw-replace="main" class="index">
<div class="slider-wrap">
  <ul class="slider">
    <?php $page->carousel_images->each(function($child) { ?>
      <li class="slide">
        <!-- <img data-src="https://res.cloudinary.com/waxflower-bridal/image/upload/w_auto,c_scale,dpr_auto,q_auto/<?= $child->url ?>" class="cld-responsive" alt=""> -->
        <img data-srcset="<?= $child->srcset('1930x800,/1.5,/2,/3,/4') ?>" data-sizes="auto" class="lazyload" alt="">
      </li>
    <?php }) ?>
  </ul>
</div>
<div class="intro-block">
  <h1>Waxflower Bridal</h1>
  <a href="/designers/dresses/" class="button">View our collection</a>
</div>
<div class="designer-details"><?= $page->text_area ?></div>

<div class="homepage-details">
  <div class="homepage-details__image">
    <!-- <img data-src="https://res.cloudinary.com/waxflower-bridal/image/upload/w_auto,c_scale,dpr_auto,q_auto/homepage/shop-front-02.jpg"  class="cld-responsive" alt=""/> -->
    <?php $ratio = $page->shop_image->width / $page->shop_image->height;
    $w = 1200;
    $h = 1200/$ratio;
    ?>
    <img data-srcset="<?= $page->shop_image->srcset($w . 'x' . $h . ',/2,/3,/4') ?>" data-sizes="auto" src="" class="lazyload" alt=""/>
    <p class="photo-credit">Photo credit: <a href="https://www.larissajoice.co.uk" target="_blank">Larissa Joice Photography</a></p>
    </div>
  </div>
  <div class="homepage-details__buttons">
    <h2><?= $page->call_to_action_text ?></h2>

    <a href="tel:01291621987" class="button">Call 01291 621 987</a>
    <a href="/contact/" class="button">Book an appointment</a>
  </div>
<?php $feed = $modules->get('InstagramFeed')->getRecentMedia(); ?>

<div class="instagram">
  <h2><a href="https://instagram.com/waxflowerbridal">Follow Waxflower Bridal on social media @waxflowerbridal</a></h2>
  <?php $count = 0; ?>
  <?php foreach ($feed as $media): ?>
    <?php if ($media['type'] === 'image' || $media['type'] === 'carousel' && $count < 9): ?>
    <figure class="instagram-item">
    <a href="https://www.instagram.com/p/BxbtpfNBmVu/">
    <picture>
    <source media="(min-width: 55rem)" srcset="<?= $media['images']['standard_resolution']['url']; ?>">
    <source media="(min-width: 45rem)" srcset="<?= $media['images']['low_resolution']['url']; ?>">
    <source srcset="<?= $media['images']['thumbnail']['url']; ?>">
    <img src="<?= $media['images']['thumbnail']['url']; ?>" alt="">
    </picture>
    </a>
    <figcaption><?= $sanitizer->truncate($media['caption']['text'], 120) ?></figcaption>
    </figure>
    <?php $count++; ?>
    <?php endif; ?>
    <?php if ($media['type'] === 'video' && $count < 9): ?>
    <figure class="instagram-item">
    <video controls poster="<?= $media['images']['thumbnail']['url'] ?>" src="<?= $media['videos']['standard_resolution']['url'] ?>"></video>
    <figcaption><?= $sanitizer->truncate($media['caption']['text'], 120) ?></figcaption>
    <?php $count++; ?>
    </figure>
    <?php endif; ?>
  <?php endforeach; ?>
</div>
</div>
</div>

