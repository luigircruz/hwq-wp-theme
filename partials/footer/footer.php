<footer class="footer">
  <div class="footer__container container">
    <div class="footer__logo-row grid">
      <a class="footer__logo grid__col--span5" href="/">
        <img class="footer__logo-img" src="<?php echo get_stylesheet_directory_uri() ?>/src/images/logo.svg" alt="<?php echo get_bloginfo('name') ?>">
      </a>
    </div>
    <div class="footer__navs grid">
      <nav class="footer__primary-nav grid__col--span6">
        <?php render_menu('primary', 'footer__primary-nav', '-') ?>
      </nav>
    </div>
    <div class="footer__text grid">
      <!-- <div class="footer__copy grid__col--span3">
        &copy; <?php echo get_bloginfo('name') ?>. All rights reserved. 
      </div>
      <nav class="footer__menu grid__col--span7">
        <?php render_menu('footer', 'footer__menu', '-') ?>
      </nav> -->
      <div class="footer__social grid__col--span12">
        <a class="footer__social-link" href="#">
          <img class="footer__social-icon" src="<?php echo get_stylesheet_directory_uri() ?>/src/images/facebook-icon.svg?v=0.1.0">
        </a>
        <a class="footer__social-link" href="#">
          <img class="footer__social-icon" src="<?php echo get_stylesheet_directory_uri() ?>/src/images/twitter-icon.svg?v=0.1.0">
        </a>
        <a class="footer__social-link" href="#">
          <img class="footer__social-icon" src="<?php echo get_stylesheet_directory_uri() ?>/src/images/linkedIn-icon.svg?v=0.1.0">
        </a>
        <a class="footer__social-link" href="#">
          <img class="footer__social-icon" src="<?php echo get_stylesheet_directory_uri() ?>/src/images/instagram-icon.svg?v=0.1.0">
        </a>
      </div>
    <div>
  </div>
</footer>
<?php
get_template_part('partials/footer/footer', 'minimal');
?>
