<?php namespace Processwire;
?>

<div pw-replace="main" class="<?= $page->name ?>">
  <div class="intro">
    <?= $page->text_area ?>
  </div>
  <?php if ($page->name == 'wardrobe') {
    $dressIds = $sanitizer->array(json_decode($input->cookie('favouriteDresses'))); ?>
    <div class='wardrobe dresses' data-lightbox>
    <?php
    $dressIds = $dressIds ? implode("|", $dressIds) : "";
    if ($dressIds === "") { ?>
      <p>You can add pieces to your wardrobe by clicking the hearts next to their names.</p>
    <?php } else {
    $dresses = $pages->find("template=product,id=$dressIds");
    $dresses->each(function($p) { ?>
      <div class="dress">
      <?php if ($p->video) { ?>
        <a class="image" href="<?= $p->video->poster ?>" data-size="670x1000" data-gallery>
            <video src="<?= $p->video->url ?>" autoplay muted loop poster="<?= $p->video->poster ?>"></video>
        </a>
        <?php } else { ?>
        <a class="image" href="<?= $p->image->url ?>" data-size="670x1000" data-gallery>
          <img data-pin-description="<?= $p->title ?> dress by <?= $p->parent->title ?> at Waxflower Bridal" data-pin-media="<?= $p->image->httpUrl ?>" data-srcset="<?= $p->image->srcset('670x1000,/1.5,/2,/3,/4') ?>" data-src="<?= $p->image->srcsetUrls['smallest'] ?>" data-sizes="auto" class="lazyload" alt="">
        </a>
        <?php } ?>
        <a href="<?= $p->parent->url ?>"><h2><?= $p->title ?></h2></a>
        <?php include './partials/_heart.php' ?>
        </div>
      <?php }) ?>
  <?php } ?>
    </div>
  <?php }
  ?>
</div>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides.
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>