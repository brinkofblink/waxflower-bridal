<?php namespace Processwire; ?>

<div pw-replace="main">
<div class="shop-container row">
    <div class="shop-container__images">
        <div class="shop-container__images__featured">
            <a href="<?= $page->product_images->first->httpUrl ?>" data-gallery>
                <img data-srcset="<?= $page->product_images->first->srcset('100x100,*2,*4,*6,*8,*10') ?>" src="" data-sizes="auto" class="lazyload" alt="">
            </a>
        </div>
        <div class="shop-container__images__thumbs">
                <?php $page->product_images->slice(1)->each(function($i) { ?>
                  <a href="<?= $i->httpUrl ?>" data-gallery>
                      <img data-srcset="<?= $i->srcset('50x50,*2,*3,*4') ?>" src="" data-sizes="auto" class="lazyload" alt="">
                  </a>
                <?php }); ?>
        </div>
    </div>
    <div class="shop-container__info">
        <h1><?= $page->title ?></h1>
        <p class="price">£<?= $page->price ?> GBP</p>
        <?php $page->variations->each(function($v) {
          $variation_name = $this->sanitizer->name($v->title);
          ?>
          <h2><?= $v->title ?></h2>
          <div class="shop-variations <?= $variation_name ?>">
          <?php $v->options->each(function($key, $o) use ($variation_name) {
            $option_name = $this->sanitizer->name($o->title);
            $id = $variation_name . "-" . $option_name;
            ?>
            <div>
          <input type="radio" id="<?= $id ?>" name="<?= $variation_name ?>" value="<?= $option_name ?>"<?php if ($key == 0) { echo " checked"; }?>>
                <label for="<?= $id ?>"><?= $o->title ?></label>
            </div>
            <?php }) ?>
          </div>
            <?php if ($v->notes) {
              echo "<p class='helper'>$v->notes</p>";
            } ?>
          <?php }) ?>
          <button
          id="addtocart"
          class="button snipcart-add-item"
          data-item-id="<?= $page->id ?>"
          data-item-name="<?= $page->title ?>"
          data-item-price="<?= number_format($page->price, 2) ?>"
          data-item-url="<?= $page->httpUrl ?>"
          <?php $page->variations->each(function($key, $v) { ?>
          data-item-custom<?= $key ?>-name="<?= $v->title ?>"
          data-item-custom<?= $key ?>-options="<?= $v->options->implode("|", "title") ?>"
          <?php }) ?>
          data-item-description="<?= $page->heading ?>">
          Add to cart
        </button>
        <?= $page->text_area ?>
    <p class="smaller"><?= $page->notes ?></p>
    </div>
</div>


<script>
$(document).ready( function() {
  <?php $page->variations->each(function($key, $v) { ?>
    $('[name="<?= $this->sanitizer->name($v->title) ?>"]').change(function() {
        $('#addtocart').data('item-custom<?= $key ?>-value', $(this).val());
    })
  <?php }) ?>
});
</script>
</div>
