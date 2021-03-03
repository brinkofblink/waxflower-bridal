<?php namespace Processwire; ?>

<?php
  $redirect = $page->page_to_link_to->url;
  $session->redirect($redirect);
?>