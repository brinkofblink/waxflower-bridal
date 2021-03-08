<?php namespace Processwire; ?>

<div pw-replace="main" class="browse-all">
<div class="slider-wrap">
  <ul class="slider">
    <?php $page->carousel_images->each(function($child) { ?>
      <li class="slide">
        <!-- <img data-src="https://res.cloudinary.com/waxflower-bridal/image/upload/w_auto,c_scale,dpr_auto,q_auto/<?= $child->url ?>" class="cld-responsive" alt=""> -->
        <img src="<?= $child->srcsetUrls['smallest'] ?>" data-srcset="<?= $child->srcset('1930x1000,/1.5,/2,/3,/4') ?>" data-sizes="auto" class="lazyload" alt="">
      </li>
    <?php }) ?>
  </ul>
</div>
<div class="intro-block">
  <h1>Waxflower Bridal Designers</h1>
</div>
<div class="designer-details">
  <h2>Our Collection</h2>
  <?= $page->text_area ?>
</div>
  <div class="view-designers-wrap">
      <div class="view-designers">
      <div class="view-designers-slider">
        <?php $page->children()->each(function($p) { ?>
          <div class="dress">
            <div class="image">
              <?php if ($p->hasChildren) { ?>
              <img src="data:image/gif;base64,R0lGODdhQwBkAPAAAAAAACZFySH5BAEAAAEALAAAAABDAGQAAAJbjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/S4qAAA7" data-srcset="<?= $p->children->first->image->srcset('670x1000,/1.5,/2,/3,/4') ?>" data-sizes="auto" class="lazyload" alt="<?= $p->title ?>">
              <?php }
              else { ?>
              <img src="data:image/gif;base64,R0lGODdhQwBkAPAAAAAAACZFySH5BAEAAAEALAAAAABDAGQAAAJbjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/S4qAAA7" data-srcset="<?= $p->image->srcset('670x1000,/1.5,/2,/3,/4') ?>" data-sizes="auto" class="lazyload" alt="<?= $p->title ?>">
              <?php } ?>
            </div>
            <a href="<?= $p->url ?>" class="button"><?= $p->title ?></a>
            <?php echo $p->text_area ?>
          </div>
        <?php }) ?>
    </div>
    </div>
  </div>
</div>
