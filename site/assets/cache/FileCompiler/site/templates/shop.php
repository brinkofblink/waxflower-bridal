<?php namespace Processwire; ?>
<?php $category_id = $input->urlSegment2 ?: false;
$categories = $fields->get('categories');
$all_categories = $categories->type->getOptions($categories);
if ($category_id && $all_categories->eq($category_id - 1)) {
  $category = $all_categories->eq($category_id - 1)->title;
  $query = "template=shop-product,categories=$category_id";
} else {
  $category = '';
  $query = 'template=shop-product';
}
?>
<div pw-replace="main" class="shop">
<div class="intro">
  <h1>Products<?= $category ? ": $category" : '' ?></h1>
  <?= $page->text_area ?>
</div>
<div class="sidebar">
  <ul>
    <li><a href='/shop'>All products</a></li>
    <?php foreach($all_categories as $category) {
      $active = $category === $category_id ? ' class="active"'  : '';
      echo "<li$active><a href='/shop/category/$category'>$category->title</a></li>";
    } ?>
  </ul>
</div>
<div class="products">
<?php
$currency_formatter = new \NumberFormatter("en-GB", \NumberFormatter::CURRENCY);
$products = $page->children($query);
if ($products->count() > 0) {
  $products->each(function($p) use ($currency_formatter) { ?>
  <a class="product" href="<?= $p->url ?>">
    <div class="image">
    <img data-srcset="<?= $p->product_images->first->srcset('670x1000,/1.5,/2,/3,/4') ?>" data-sizes="auto" class="lazyload" width="<?= $p->product_images->first->width ?>" height="<?= $p->product_images->first->height ?>" alt="<?= $p->title ?>">
    </div>
    <p class="designer-name"><?= $p->designer ?></p>
    <h2><?= $p->title ?></h2>
    <?php if ($p->sale_price) {
      echo "<p class='price'><span class='strikethrough'>" . $currency_formatter->format($p->price) . "</span>" .  $currency_formatter->format($p->sale_price) . "</p>";
    } else {
      echo "<p>" . $currency_formatter->format($p->price) . "</p>";
    } ?>
    <?php if ($p->has('categories=1')) { ?><span>Exclusive</span><?php } ?>
  </a>
<?php });
} else { ?>
  <div class="no-items"><p>We don't have anything here at the moment. Get in touch if there's something you've got in mind.<a href="/contact" class="button">Get in touch</a></p></div>
<?php } ?>
</div>
</div>