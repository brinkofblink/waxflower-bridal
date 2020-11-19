<!DOCTYPE html>
<html data-current="<?= $page->template->name ?>" lang="en-GB">
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/globals/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
<body>
<div class="side-menu">
  <button class="hamburger">
  <span></span>
  <span></span>
  <span></span>
  Menu
  </button>
  <a href="tel:+441291621987"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.4 27.51"><g id="b79e548e-e255-4ace-a287-ee03e4d22b7e" data-name="Layer 2"><g id="be840243-b2d6-4fa2-bdb1-acb8b9e813ab" data-name="Layer 1"><rect x="0.5" y="0.5" width="13.4" height="26.51" rx="1.02" fill="none" stroke="#fff" stroke-miterlimit="10"/><line x1="5.2" y1="1.94" x2="5.2" y2="1.94" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"/><line x1="6.78" y1="1.94" x2="8.96" y2="1.94" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"/><line x1="0.5" y1="3.8" x2="13.9" y2="3.8" fill="none" stroke="#fff" stroke-miterlimit="10"/><line x1="0.5" y1="24.31" x2="14.22" y2="24.31" fill="none" stroke="#fff" stroke-miterlimit="10"/></g></g></svg></a>
</div>
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/globals/_header.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>

<main id="main" class="main <?php if ($page->template === "designer") { ?> designer<?php } ?>">
</main>

<footer class="footer">
  <div>
    <ul class="footer-sitemap">
      <li>
        <ul>
          <?php $pages->find('parent=1020')->each(function($d) { ?>
            <li>
            <a href="<?= $d->url ?>"><?= $d->title ?></a>
            <ul>
              <?php $d->find('template=designer')->each(function($p) { ?>
                <li>
                  <a href="<?= $p->url ?>"><?= $p->title ?><?php if ($p->exclusive) { echo " <span>//Exclusive</span>"; } ?></a>
                </li>
              <?php }) ?>
            </ul>
            </li>
          <?php }); ?>
        </ul>
      </li>
    </ul>
  </div>
  <div>
    <nav>
      <ul>
        <li>
          <a href="/faqs">
            FAQs
          </a>
        </li>
        <li>
          <a href="/shipping">
            Shipping
          </a>
        </li>
        <li>
          <a href="/about">
            About us
          </a>
        </li>
        <li>
          <a href="/events">
            Events
          </a>
        </li>
        <li>
          <a href="/shop">
            E-shop
          </a>
        </li>
        <li>
          <a href="/contact">
            Contact us
          </a>
        </li>
        <li>
          <a href="<?= $config->urls->templates ?>/images/global/terms-conditions.pdf" download="Waxflower Bridal Terms Conditions">Terms and conditions</a>
        </li>
      </ul>
    </nav>
  </div>
  <div>
    Waxflower Bridal
    <br> 4 St Mary Street
    <br>Chepstow
    <br>NP16 5 EU
    <br><br>01291 621 987
    <br>info@waxflowerbridal.co.uk
    <br>@waxflowerbridal<br>
    <ul class="footer-socials">
    <li>
        <a href="https://www.pinterest.co.uk/waxflowerbridal/" rel="noreferrer noopener" target="_blank">
          <img src="<?= $config->urls->templates ?>/images/icons/icon-pinterest.svg" width="50" height="50" alt="pinterest logo">
        </a>
      </li>
      <li>
        <a href="https://www.instagram.com/waxflowerbridal/" rel="noreferrer noopener" target="_blank">
          <img src="<?= $config->urls->templates ?>/images/icons/icon-instagram.svg" width="50" height="50" alt="instagram logo">
        </a>
      </li>
      <li>
        <a href="https://www.facebook.com/waxflowerbridal/" rel="noreferrer noopener" target="_blank">
          <img src="<?= $config->urls->templates ?>/images/icons/icon-facebook.svg" width="50" height="50" alt="facebook logo">
        </a>
      </li>
      <li>
        <a href="https://www.youtube.com/channel/UCmdQUJsvfQoihXUUoLyMXeA/" rel="noreferrer noopener" target="_blank">
          <img src="<?= $config->urls->templates ?>/images/icons/icon-youtube.svg" width="50" height="50" alt="youtube logo">
        </a>
      </li>
      </ul>
  </div>
</footer>

<!--[if lt IE 9]>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="bower_components/ie-love/dist/ie-love.min.js"></script>
  <![endif]-->
<script src="<?= $config->urls->templates ?>/assets/dist/main.js"></script>
<script async src="https://cdn.snipcart.com/themes/v3.0.24/default/snipcart.js"></script>
<div hidden id="snipcart" data-api-key="NzUzMWE0NDMtYTI2Yi00OGYzLWIzMjQtMDkwYWI3ZWE0YzliNjM1OTkxOTcwODk4NzAyNDcz"></div>
<script type="text/javascript">
(function(d){
    var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');
    p.type = 'text/javascript';
    p.async = true;
    p.src = '//assets.pinterest.com/js/pinit.js';
    p.dataset.pinHover = true;
    f.parentNode.insertBefore(p, f);
}(document));
</script>
</body>

</html>
