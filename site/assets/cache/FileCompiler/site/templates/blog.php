<?php namespace ProcessWire;

function truncateText($text, $maxlength = 120) {
  // truncate to max length
  $text = substr(strip_tags($text), 0, $maxlength);
  // check if we've truncated to a spot that needs further truncation
  if(strlen(rtrim($text, ' .!?,;')) == $maxlength) {
    // truncate to last word
    $text = substr($text, 0, strrpos($text, ' '));
  }
  return trim($text);
}
?>
<div pw-replace="main" class="blog-post">
<div class="blog__heading">
<h1><?= $page->title ?></h1>
</div>
<div  class="blog__body">
<?php echo $pagination; ?>
<?php $posts = $pages->find("template=blog-post, sort=-blog_date, start=0, limit=9");
$pagination = $posts->renderPager();
    foreach ($posts as $post):
      $date = $page->getUnformatted('blog_date');
      $year = date('Y', $date);
      $month = date('n', $date);
      $day = date('d', $date);
      $dateOutput = "$day/$month/$year";
      ?>
    <article class="article-listing__post">
    <div class="article-listing__post__text">
      <h2><?= $post->title ?></h2>
      <date><?=$dateOutput?></date>
      <a href="<?=$post->url?>">Read more</a>
      <a href="<?=$post->url?>">
      <span class="u-expander"></span>
      </a>
      </div>
    <?php
      if ($post->blog_images->first):
          $m = $post->blog_images->first->size(300, 300)->url; ?>
          <div class="article-listing__post__image">
          <img src="<?= $m ?>" />
          </div>
          <?php endif;
  ?>
  </article>
    <?php endforeach;?>
    <?php echo $pagination; ?>
</div>
<div  class="blog__sidebar">

</div>
</div>
