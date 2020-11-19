<?php namespace Processwire; ?>

<div pw-replace="main" class="search">
<form action="/search/">
<label for="search">Search</label>
<input type="search" name="q" id="search">
<input type="submit" value="Search">
</form>
<?php $search = $sanitizer->text($input->get('q')); ?>
<div class="search-results">
<?php $results = $pages->find("title~=$search"); ?>
  <?php if ($results->count > 0) { ?>
    <h2>We found <?= $results->count() ?> results</h2>
    <?php foreach($results as $r) { ?>
      <div><?= $r->title; ?></div>
    <?php } ?>
</div>
<?php } ?>
</div>

