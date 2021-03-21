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
<h2>Our Bridalwear Designers</h2>
<div class="view-designers">
        <?php
        $collection_pages = $page->children('template=designer,parent=1021')->count() > 0 ? $page->children('template=designer,parent=1021') : $pages->find('template=designer,parent=1021');
        $collection_pages->each(function($p) { ?>
          <div class="dress">
            <div class="image">
              <?php if ($p->hasChildren) { ?>
              <img src="data:image/gif;base64,R0lGODdhQwBkAPAAAAAAACZFySH5BAEAAAEALAAAAABDAGQAAAJbjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/S4qAAA7" data-srcset="<?= $p->children->first->image->srcset('700x1000,/1.5,/2,/3,/4') ?>" data-sizes="auto" class="lazyload" alt="<?= $p->title ?>">
              <?php }
              else { ?>
              <img src="data:image/gif;base64,R0lGODdhQwBkAPAAAAAAACZFySH5BAEAAAEALAAAAABDAGQAAAJbjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/S4qAAA7" data-srcset="<?= $p->image->srcset('700x1000,/1.5,/2,/3,/4') ?>" data-sizes="auto" class="lazyload" alt="<?= $p->title ?>">
              <?php } ?>
              <a href="<?= $p->url ?>"><?= $p->title ?></a>
            </div>
          </div>
        <?php }) ?>
      </div>
      <h2>Our Accesssory Designers</h2>
      <div class="view-designers">
        <?php
        $collection_pages = $page->children('template=designer,parent=1070')->count() > 0 ? $page->children('template=designer,parent=1070') : $pages->find('template=designer,parent=1070');
        $collection_pages->each(function($p) { ?>
          <div class="dress">
            <div class="image">
              <?php if ($p->hasChildren) { ?>
              <img src="data:image/gif;base64,R0lGODdhQwBkAPAAAAAAACZFySH5BAEAAAEALAAAAABDAGQAAAJbjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/S4qAAA7" data-srcset="<?= $p->children->first->image->srcset('700x1000,/1.5,/2,/3,/4') ?>" data-sizes="auto" class="lazyload" alt="<?= $p->title ?>">
              <?php }
              else { ?>
              <img src="data:image/gif;base64,R0lGODdhQwBkAPAAAAAAACZFySH5BAEAAAEALAAAAABDAGQAAAJbjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/S4qAAA7" data-srcset="<?= $p->image->srcset('700x1000,/1.5,/2,/3,/4') ?>" data-sizes="auto" class="lazyload" alt="<?= $p->title ?>">
              <?php } ?>
              <a href="<?= $p->url ?>"><?= $p->title ?></a>
            </div>
          </div>
        <?php }) ?>
      </div>
</div>
