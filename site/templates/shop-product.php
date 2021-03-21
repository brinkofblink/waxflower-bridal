<?php namespace Processwire; ?>

<div pw-replace="main">
<div class="shop-container row">
    <div class="shop-container__images">
        <div class="shop-container__images__featured">
            <a href="<?= $page->product_images->first->httpUrl ?>" data-luminous>
                <img data-srcset="<?= $page->product_images->first->srcset('100x100,*2,*4,*6,*8,*10') ?>" src="" data-sizes="auto" class="lazyload" alt="">
            </a>
        </div>
        <div class="shop-container__images__thumbs">
                <?php $page->product_images->slice(1)->each(function($i) { ?>
                  <a href="<?= $i->httpUrl ?>" data-luminous>
                      <img data-srcset="<?= $i->srcset('50x50,*2,*3,*4') ?>" src="" data-sizes="auto" class="lazyload" alt="">
                  </a>
                <?php }); ?>
        </div>
    </div>
    <div class="shop-container__info">
      <?php $currency_formatter = new \NumberFormatter("en-GB", \NumberFormatter::CURRENCY); ?>

        <h1><?= $page->designer ?><br><?= $page->title ?></h1>
        <?php if ($page->sale_price) { ?>
          <p class="price"><span class="strikethrough"><?= $currency_formatter->format($page->price) ?></span><?= $currency_formatter->format($page->sale_price) ?></p>
        <?php } else { ?>
          <p class="price"><?= $currency_formatter->format($page->price) ?></p>
        <?php } ?>
        <?php if ($page->size_chart) {
          echo "<a href='" . $page->size_chart->url . "' data-luminous>See size guide</a>";
        } ?>
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
          data-item-price="<?= $page->sale_price ? number_format($page->sale_price, 2) : number_format($page->price, 2) ?>"
          data-item-image="<?= $page->product_images->first->httpUrl ?>"
          data-item-url="<?= $page->httpUrl ?>"
          <?php $page->variations->each(function($key, $v) { ?>
          data-item-custom<?= $key ?>-name="<?= $v->title ?>"
          data-item-custom<?= $key ?>-options="<?= $v->options->implode("|", "title") ?>"
          <?php }) ?>
          data-item-description="<?= $page->heading ?>">
          Add to bag
        </button>
        <?= $page->text_area ?>
    <p class="smaller"><?= $page->notes ?></p>
    </div>
</div>


<script>

  <?php $page->variations->each(function($key, $v) { ?>
    document.querySelectorAll('[name="<?= $this->sanitizer->name($v->title) ?>"]').forEach(el => {
      el.addEventListener('change', (e) => {
        document.querySelector('#addtocart').dataset.itemCustom<?= $key ?>Value = e.target.value
      })
    })
  <?php }) ?>
</script>
</div>
