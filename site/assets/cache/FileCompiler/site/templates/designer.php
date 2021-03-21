<?php namespace Processwire; ?>

<div pw-replace="main" class="designer">
<div class="hero">
    <img data-srcset="<?= $page->image->srcset('1930x800,/1.5,/2,/3,/4') ?>" data-sizes="auto" class="lazyload" alt="">
    <div class="intro-block">
        <h1<?php if ($page->light_text) { echo " class='light'"; }?>><?= $page->title ?></h1>
    </div>
</div>
<div class="designer-details">
    <div><?= $page->text_area ?></div>
    <p><?= $page->price_text ?></p>
</div>
<?php $linked_dress = $sanitizer->text($input->urlSegment(1)) ?: ""; ?>
<div class="dresses" data-lightbox="<?= $linked_dress ?>">
<?php $page->products->each(function($p) use($linked_dress, $page) { ?>
  <div class="dress<?php if ($p->big) { echo " big"; } ?>" id="<?= $p->name ?>">
    <?php if ($p->video) { ?>
    <a class="image" href="<?= $p->video->poster ?>" data-size="670x1000" data-gallery>
        <video src="<?= $p->video->url ?>" autoplay muted loop poster="<?= $p->video->poster ?>"></video>
    </a>
    <?php } else { ?>
    <a class="image" href="<?= $p->image->url ?>" data-size="670x1000" data-gallery>
      <img data-pin-description="<?= $p->title ?> dress by <?= $page->title ?> at Waxflower Bridal" data-pin-media="<?= $p->image->httpUrl ?>" data-srcset="<?= $p->image->srcset('670x1000,/1.5,/2,/3,/4') ?>" data-src="<?= $p->image->srcsetUrls['smallest'] ?>" width="<?= $p->image->width ?>" height="<?= $p->image->height ?>" data-sizes="auto" class="lazyload" alt="">
    </a>
    <?php } ?>
    <h2><?= $p->title ?></h2>
    <?php include './partials/_heart.php' ?>
    </div>
    <?php }) ?>
</div>
<div class="dress-booking">
    <p>To try on <?= $page->title ?></p>
    <a href="/contact" class="button">Book an appointment</a>
</div>
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