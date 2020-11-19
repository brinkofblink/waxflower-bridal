<?php namespace Processwire;
?>

<div pw-replace="main" class="contact">
  <div class="contact__title">
    <h1><?=$page->title?></h1>
  </div>
  <div class="contact__intro">
    <?=$page->text_area?>
  </div>
  <div class="contact__form" id="contact-form">
    <h2>Say hello...</h2>
    <p>Leave us a message and we'll get back to you soon to arrange a booking.</p>
    <form name="contact" action="https://formspree.io/info@waxflowerbridal.co.uk" method="post">
      <label for="first-name">First name<sup>*</sup></label>
      <input type="text" id="first-name" name="first-name" />
      <label for="last-name">Last name<sup>*</sup></label>
      <input type="text" required id="last-name"  name="last-name" />
      <label for="email">Your email address<sup>*</sup></label>
      <input type="email" required id="email" name="email" />
      <label for="phone">Your phone number<sup>*</sup></label>
      <input type="tel" id="phone" required name="phone" />
      <label for="wedding-date">Wedding date</label>
      <input type="text" id="wedding-date" name="wedding-date" placeholder="Spring next year" />
      <label for="appt-date">Preferred appointment date</label>
      <input type="text" id="appt-date" name="appt-date" placeholder="dd/mm" />
      <label for="pieces">Waxflower Bridal pieces you love so far 🖤</label>
      <textarea id="pieces" name="pieces" rows="2" placeholder="I love..."></textarea>
      <label for="message">Anything else you would like to add?</label>
      <textarea id="message" name="message" rows="2" placeholder="Hello..."></textarea>
      <label for="hear">Where did you hear about us?</label>
      <input type="text" id="hear" name="hear" placeholder="eg. event, blog, word of mouth?"/>
      <input type="submit" class="button" value="Send">
    </form>
  </div>
  <div class="contact__map">
      <iframe src="https://snazzymaps.com/embed/92396" width="100%" height="400px" style="border:none;"></iframe>
  </div>
  <div class="contact__location">
    <h2>Location</h2>
      <?=$page->address?>
  </div>
  <div class="contact__opening">
  <h2>Opening times</h2>
  <dl>
  <?php $page->opening_hours->each(function ($t) {
      echo "<dt>$t->day</dt>";
      echo "<dd>$t->times</dd>";
  });?>
    </dl>
    <p><?=$page->notes?></p>
  </div>
</div>
