<!DOCTYPE html>
<html lang="en-GB">
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/globals/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
<body>
<div class="page-wrap" data-current="<?= $page->template->name ?>">
<div class="side-menu">
  <a class="hamburger" href="#nav">
  <span></span>
  <span></span>
  <span></span>
  </a>
  <a href="tel:+441291621987"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.4 27.51"><g id="b79e548e-e255-4ace-a287-ee03e4d22b7e" data-name="Layer 2"><g id="be840243-b2d6-4fa2-bdb1-acb8b9e813ab" data-name="Layer 1"><rect x="0.5" y="0.5" width="13.4" height="26.51" rx="1.02" fill="none" stroke="#fff" stroke-miterlimit="10"/><line x1="5.2" y1="1.94" x2="5.2" y2="1.94" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"/><line x1="6.78" y1="1.94" x2="8.96" y2="1.94" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"/><line x1="0.5" y1="3.8" x2="13.9" y2="3.8" fill="none" stroke="#fff" stroke-miterlimit="10"/><line x1="0.5" y1="24.31" x2="14.22" y2="24.31" fill="none" stroke="#fff" stroke-miterlimit="10"/></g></g></svg></a>
  <a class="envelope-icon" href="mailto:info@waxflowerbridal.co.uk"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.97 235.5"><g data-name="Layer 2"><g data-name="Layer 1" fill="none" stroke="#ffffff" stroke-miterlimit="10" stroke-width="16"><rect x="8" y="8" width="326.97" height="219.5" rx="8.36"/><path d="M209.55 117.75L330.7 226.43M10.01 224.57l123.95-108.21M8 16.36l163.49 136.82L334.97 16.36"/></g></g></svg></a>
</div>
<div class="ticker"><?php if ($pages->get('1')->news_banner) {
  echo $pages->get('1')->news_banner;
} ?></div>
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/globals/_header.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
<main id="main" class="main <?php if ($page->template === "designer") { ?> designer<?php } ?>">
</main>
<div id="mc_embed_signup" class="signup">
<form action="https://waxflowerbridal.us2.list-manage.com/subscribe/post?u=01d0898a25c396f24d815b2a1&amp;id=72a7fd0681" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
  <div class="form-intro"><h2>Subscribe</h2>
  <p>Be <span class="c-pink">in the know</span> with our Sample Sales, events and occasional Waxflower Bridal updates</p>
</div><div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-FNAME">First Name </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Last Name </label>
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
<div class="mc-submit">
<input type="submit" value="Sign up" name="subscribe" id="mc-embedded-subscribe" class="button">
</div>

<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_01d0898a25c396f24d815b2a1_72a7fd0681" tabindex="-1" value=""></div></div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
<footer class="footer">
  <div>
  <h3>Waxflower Bridal</h3>
  <address>4 St.Mary Street
  Chepstow
  Monmouthshire
  NP16 5EU
  </address>
  <a href="tel:01291621987">01291 621987</a>
  <a href="mailto:info@waxflowerbridal.co.uk">info@waxflowerbridal.co.uk</a>
  <ul class="footer-socials">
    <li>
        <a href="https://www.pinterest.co.uk/waxflowerbridal/" rel="noreferrer noopener" target="_blank">
          <img src="<?= $config->urls->templates ?>images/icons/icon-pinterest.svg" width="50" height="50" alt="pinterest logo">
        </a>
      </li>
      <li>
        <a href="https://www.instagram.com/waxflowerbridal/" rel="noreferrer noopener" target="_blank">
          <img src="<?= $config->urls->templates ?>images/icons/icon-instagram.svg" width="50" height="50" alt="instagram logo">
        </a>
      </li>
      <li>
        <a href="https://www.facebook.com/waxflowerbridal/" rel="noreferrer noopener" target="_blank">
          <img src="<?= $config->urls->templates ?>images/icons/icon-facebook.svg" width="50" height="50" alt="facebook logo">
        </a>
      </li>
      <li>
        <a href="https://www.youtube.com/channel/UCmdQUJsvfQoihXUUoLyMXeA/" rel="noreferrer noopener" target="_blank">
          <img src="<?= $config->urls->templates ?>images/icons/icon-youtube.svg" width="50" height="50" alt="youtube logo">
        </a>
      </li>
      </ul>
  </div>
  <div>
  <h3>Information</h3>
    <nav>
      <ul>
        <li>
          <a href="/book-an-appointment">
            Appointments
          </a>
        </li>
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
          <a href="/contact">
            Contact us
          </a>
        </li>
        <li>
          <a href="<?= $config->urls->templates ?>images/global/terms-conditions.pdf" download="Waxflower Bridal Terms Conditions">Terms and conditions</a>
        </li>
      </ul>
    </nav>
  </div>
  <div>
  <h3>Stay in touch</h3>
  <p>Be in the know with our updates</p>
  <a href="#mc_embed_signup" class="button">Sign up</a>
  </div>
</footer>

<!--[if lt IE 9]>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="bower_components/ie-love/dist/ie-love.min.js"></script>
  <![endif]-->
<script src="<?= $config->urls->templates ?>assets/dist/main.js"></script>
<script async src="https://cdn.snipcart.com/themes/v3.0.31/default/snipcart.js"></script>
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
<!-- Pinterest Tag -->
<script>
!function(e){if(!window.pintrk){window.pintrk = function () {
window.pintrk.queue.push(Array.prototype.slice.call(arguments))};var
  n=window.pintrk;n.queue=[],n.version="3.0";var
  t=document.createElement("script");t.async=!0,t.src=e;var
  r=document.getElementsByTagName("script")[0];
  r.parentNode.insertBefore(t,r)}}("https://s.pinimg.com/ct/core.js");
pintrk('load', '2613481208736', {em: 'info@waxflowerbridal.co.uk'});
pintrk('page');
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt=""
  src="https://ct.pinterest.com/v3/?event=init&tid=2613481208736&pd[em]=<hashed_email_address>&noscript=1" />
</noscript>
<!-- end Pinterest Tag -->
</div>
</body>

</html>
