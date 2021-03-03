<?php namespace Processwire; ?>

<div pw-replace="main" class="browse-all">
  <div class="intro">
    <?= $page->text_area ?>
  </div>
  <div class="view-designers-wrap">
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
