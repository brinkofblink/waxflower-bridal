<?php namespace ProcessWire;

    $blog = $modules->get("MarkupBlog");
    $date = $page->getUnformatted('blog_date');
    $year = date('Y', $date);
    $month = date('n', $date);
    $day = date('d', $date);

?><div pw-replace="main" class="blog-post">
<div class="blog__heading">
<h1><?= $page->title ?></h1>
<date>Posted <?= "$day/$month/$year" ?></date>
</div>
<div  class="blog__body">
<?= $page->blog_body ?>
</div>
<div  class="blog__sidebar">
<?= wireRenderFile('blog-recent-posts.php', ['blog' => $blog]); ?>
</div>
</div>