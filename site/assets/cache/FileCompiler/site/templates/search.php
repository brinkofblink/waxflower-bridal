<?php namespace Processwire; ?>

<div pw-replace="main" class="search">
<form action="/search/">
<label for="search">Search</label>
<input type="search" name="q" id="search">
<input type="submit" value="Search" class="button">
</form>
<?php $search = $sanitizer->text($input->get('q')); ?>
<div class="search-results">
  <?php if ($search) { ?>
    <?php $dresses = $pages->find("template=product,title|dress_tags|parent.title|parent.text_area%=$search"); ?>
    <?php $collections = $pages->find("template=designer,title|dress_tags|text_area%=$search"); ?>
    <h1>You searched for <?= $search ?></h1>
  <?php if ($dresses->count > 0 && $search) { ?>
    <h2>We found <?php if ($dresses->count() == 1) {
      echo $dresses->count() . " dress";
    } else {
      echo $dresses->count() . " dresses";
    } ?></h2>
    <?php foreach($dresses as $r) { ?>
      <a class="search-result" href="<?= $r->parent->url ?>#<?= $r->name ?>">
        <h2><?= $r->title; ?></h2>
        <p><?php if ($r->parent->title === "Sample Sale") {
          echo "Sample Sale";
        } else {
          echo "dress by " . $r->parent->title;
        } ?>
        </p>
        <img data-srcset="<?= $r->image->srcset('670x1000,/1.5,/2,/3,/4') ?>" data-src="<?= $r->image->srcsetUrls['smallest'] ?>" data-sizes="auto" class="lazyload" alt="">
      </a>
      <?php } ?>
      <?php } ?>
</div>
<?php } elseif (!$search) { ?>
  <p>Search for dress names or styles</p>
<?php } else { ?>
  <p>We couldn't find any pages matching your search. Try another search, or you're welcome to give us a call if you are looking for something particular.</p>
<?php } ?>
</div>

