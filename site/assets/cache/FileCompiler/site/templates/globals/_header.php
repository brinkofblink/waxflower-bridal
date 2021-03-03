<?php namespace Processwire; ?>
<header class="header">
  <div class="header__logo">
    <a href="/">
    <img src="<?= $config->urls->templates ?>images/global/waxflower-bridal-logo.svg" alt="">
    </a>
  </div>
  <div class="header__social">
    <ul>
      <li>
        <form action="/search/">
          <label for="q"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" role="img" aria-labelledby="menu-icon-title" viewBox="0 0 59.78 59.78"><title id="menu-icon-title">Search</title><g id="b99c4dc4-0ca2-44f0-a6d2-d74e1f79e96e" data-name="Layer 2"><g id="b5fff184-918f-41be-8b54-975c8034d4ff" data-name="Layer 1"><path d="M19.8,36.05A16.25,16.25,0,0,1,8.31,8.31a16.25,16.25,0,0,1,23,23A16.14,16.14,0,0,1,19.8,36.05Z" fill="#fff"/><path d="M19.8,4.05A15.74,15.74,0,0,1,30.93,30.93,15.74,15.74,0,0,1,8.67,8.67,15.6,15.6,0,0,1,19.8,4.05m0-1A16.75,16.75,0,1,0,31.64,8,16.69,16.69,0,0,0,19.8,3.05Z"/><path d="M19.8,39.1A19.3,19.3,0,0,1,6.15,6.15a19.3,19.3,0,1,1,13.65,33Z"/><path d="M19.8,1A18.8,18.8,0,0,1,33.09,33.09,18.79,18.79,0,0,1,6.51,6.51,18.68,18.68,0,0,1,19.8,1m0-1a19.8,19.8,0,1,0,14,5.8A19.72,19.72,0,0,0,19.8,0Z"/><path d="M19.8,36.43A16.63,16.63,0,0,1,8,8,16.63,16.63,0,0,1,31.56,31.56,16.53,16.53,0,0,1,19.8,36.43Z" fill="#fff"/><path d="M19.8,3.67A16.13,16.13,0,0,1,31.21,31.21,16.14,16.14,0,0,1,8.39,8.39,16,16,0,0,1,19.8,3.67m0-1a17.13,17.13,0,1,0,12.12,5,17.1,17.1,0,0,0-12.12-5Z"/><rect x="33.04" y="33.04" width="3.29" height="3.29" transform="translate(-14.37 34.68) rotate(-45)" fill="#fff"/><path d="M34.68,33.06l1.62,1.62L34.68,36.3l-1.62-1.62,1.62-1.62m0-1.41-3,3,3,3,3-3-3-3Z"/><polygon points="33.76 37.93 37.93 33.76 59.06 53.53 53.53 59.06 33.76 37.93"/><path d="M37.94,34.46,58.35,53.54l-4.81,4.81L34.46,37.94l3.48-3.48m0-1.39-4.85,4.85L53.52,59.78l6.26-6.26L37.92,33.07Z"/></g></g></svg></label>
          <input type="search" id="search" name="q" placeholder="Search dresses">
        </form>
      </li>
      <li class="pipe"></li>
      <li class="wardrobe-link">
        <a href="/wardrobe" class="nav__link">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" class="heart">
            <title>heart</title>
            <path d="M14 26c-0.25 0-0.5-0.094-0.688-0.281l-9.75-9.406c-0.125-0.109-3.563-3.25-3.563-7 0-4.578 2.797-7.313 7.469-7.313 2.734 0 5.297 2.156 6.531 3.375 1.234-1.219 3.797-3.375 6.531-3.375 4.672 0 7.469 2.734 7.469 7.313 0 3.75-3.437 6.891-3.578 7.031l-9.734 9.375c-0.187 0.187-0.438 0.281-0.688 0.281z"></path>
          </svg>
        </a>
      </li>
      <li class="pipe"></li>
      <li>
        <a href="/contact" class="nav__link button">
          Book Appointment
        </a>
      </li>
      <li class="pipe"></li>
      <li>
        <button class="snipcart-checkout"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.3 33.87"><g id="e5f6550a-f8b2-4407-88bc-cf7c681b7d70" data-name="Layer 2"><g id="ba409db7-3e68-4d38-b894-cd7432ca9bf6" data-name="Layer 1"><path d="M25.37,7.34a.47.47,0,0,0-.47-.44H20.16c0-.08,0-.16,0-.24a6.67,6.67,0,0,0-13.33,0c0,.08,0,.16,0,.24H2.4a.47.47,0,0,0-.47.44L0,33.36a.47.47,0,0,0,.47.51H26.83a.47.47,0,0,0,.47-.51ZM13.51,9.7c-2.71,0-4.91-.33-4.91-3a4.91,4.91,0,0,1,9.81,0C18.41,9.37,16.21,9.7,13.51,9.7Z"/></g></g></svg><span class="snipcart-items-count"></span></button>
      </li>
    </ul>
  </div>
  <nav class="nav" id="nav">
    <ul class="nav__container">
    <?php
    $home = $pages->get(1);
    $nav_items = $pages->find('show_in_menu=1,parent=1'); ?>
      <?php foreach($nav_items as $i) {
        if ($i->name === 'designers') { ?>
          <li class="nav__item has-children designers-nav">
            <a href="/designers/dresses/" class="nav__link">
              Designers
            </a>
            <ul class="designers-subnav">
              <?php $pages->find('parent=1020,show_in_menu=1')->each(function($d) { ?>
                <li class="nav__item">
                <a href="<?= $d->url ?>" class="nav__link"><?= $d->title ?></a>
                  <ul>
                    <?php $d->find('template=designer,show_in_menu=1')->each(function($p) { ?>
                      <li class="nav__item">
                        <a href="<?= $p->url ?>" class="nav__link"><?= $p->title ?><?php if ($p->exclusive) { echo " <span>//Exclusive</span>"; } ?></a>
                      </li>
                    <?php }) ?>
                    <li class="nav__item">
                      <a href="<?= $d->url ?>" class="nav__link">Browse All</a>
                    </li>
                  </ul>
                </li>
              <?php }); ?>
            </ul>
          </li>
        <?php } else {
          $output = '<li class="nav__item">';
          $active = $i->id === $page->id ? ' active' : '';
          $output .= '<a href="' . $i->url . '" class="nav__link' . $active . '">';
          $output .= $i->title;
          $output .= '</a>';
          $output .= '</li>';
          echo $output;
        }
      }  ?>
      <li class="nav__item">
        <a href="/wardrobe" class="nav__link">Wardrobe</a>
      </li>
      <li class="nav__item u-hide-desktop">
        <form action="/search/" class="nav__link">
          <label for="q">Search</label>
          <input type="search" id="search" name="q" placeholder="Search dresses">
        </form>
      </li>
    </ul>
  </nav>
</header>