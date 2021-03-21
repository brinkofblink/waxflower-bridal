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
          <input type="search" id="search" name="q" placeholder="Search pieces">
        </form>
      </li>
      <li class="pipe"></li>
      <li class="wardrobe-link">
        <a href="/wardrobe" class="nav__link">
        <svg xmlns="http://www.w3.org/2000/svg" width="36.7" height="24.3" overflow="visible">
  <defs/>
  <style>
    .st2{fill:none;stroke:#000;stroke-linejoin:round;stroke-miterlimit:10}
  </style>
  <path d="M29.4 7.6c0-4.4-3-5.3-5.5-5.3-2.3 0-5 2.5-5.8 3.5-.4.5-1.2.5-1.5 0-.8-1-3.4-3.5-5.8-3.5-2.5 0-5.5.9-5.5 5.3 0 2.9 2.9 5.5 2.9 5.5l9.1 8.8 9.1-8.7c.1 0 3-2.7 3-5.6zm2 0c0 3.8-3.4 6.9-3.6 7L18.1 24c-.2.2-.4.3-.7.3s-.5-.1-.7-.3L7 14.6c-.1-.1-3.6-3.2-3.6-7C3.4 3 6.2.3 10.9.3c2.7 0 5.3 2.2 6.5 3.4C18.6 2.5 21.2.3 23.9.3c4.7 0 7.5 2.8 7.5 7.3z"/>
  <path fill="none" stroke="#000" stroke-width="1.4" stroke-miterlimit="10" d="M29.3 4.9l5.5-3.3"/>
  <path fill="none" stroke="#000" stroke-width="1.4" stroke-linejoin="round" stroke-miterlimit="10" d="M1.3 21.5l8.1-4.8"/>
  <path class="st2" d="M.1 19l4 .7-1.2 4"/>
  <path class="st2" d="M2.4 17.6l4.1.8-1.2 3.9"/>
  <path stroke="#000" stroke-miterlimit="10" d="M31.8.6l4.2.3-1.7 3.9z"/>
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
    $nav_items = $pages->find('show_in_menu=1,parent=1,sort=sort');
    $nav_items->prepend($home);
    ?>
      <?php foreach($nav_items as $i) {
        if ($i->name === 'designers') { ?>
          <li class="nav__item has-children designers-nav">
            <a href="/designers/dresses/" class="nav__link">
              Designers
            </a>
            <ul class="designers-subnav">
              <?php $pages->find('parent=1020,show_in_menu=1,sort=sort')->each(function($d) { ?>
                <li class="nav__item">
                <a href="<?= $d->url ?>" class="nav__link"><?= $d->title ?></a>
                  <ul>
                    <?php $d->find('template=designer,show_in_menu=1,sort=sort')->each(function($p) { ?>
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
          <input type="search" id="search" name="q" placeholder="Search pieces">
        </form>
      </li>
    </ul>
  </nav>
</header>