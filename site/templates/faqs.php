<?php namespace Processwire;
?>

<div pw-replace="main" class="<?= $page->name ?>">
<div class="faq__title">
    <h1><?= $page->title ?></h1>
</div>
<div class="faq__questions">
    <ul>
        <?php $page->faqs->each(function($faq) { ?>
          <li>
            <h2><?= $faq->title ?></h2>
            <?= $faq->text_area ?>
          </li>
        <?php }) ?>
    </ul>
</div>
</div>