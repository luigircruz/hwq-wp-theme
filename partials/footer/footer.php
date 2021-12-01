<div class="newsletter__form">
  <div class="container">
    <form method="post" action="https://hwqrevamp.kinsta.cloud/?na=s">
      
      <h2 class="newsletter__heading">Newsletter Sign up</h2>
      <input type="hidden" name="nlang" value="">
      <div class="newsletter__field newsletter__field-name">
        <input class="newsletter-name" type="text" name="nn" id="tnp-1" placeholder="Name" value="" required>
      </div>

      <div class="newsletter__field newsletter__field-email">
        <input class="newsletter-email" type="email" name="ne" id="tnp-2" placeholder="Email" value="" required>
      </div>
      <div class="newsletter__field newsletter__field-button">
        <input class="newsletter-submit" type="submit" value="Sign up" >
      </div>
    </form>
  </div>
</div>

<footer class="footer">
  <div class="footer__container">
    <div class="footer__upper-row">
      <div class="footer__upper-col">
        <Link href="/">
          <a class="footer__logo">
            <img class="footer__logo-img" src="<?php echo get_stylesheet_directory_uri() ?>/src/images/logo.svg" alt="<?php echo get_bloginfo('name') ?>">
          </a>
        </Link>
      </div>
      <nav class="footer__upper-col">
        <ul class="footer__upper-list">
            <?php render_menu('primary', 'main-nav__link', '-') ?>
        </ul>
      </nav>
      <div class="divider"></div>
      <nav class="footer__upper-col">
        <ul class="footer__upper-list footer__subscribe">
            <?php render_menu('footer-subscribe', 'footer__submenu-link', '-') ?>
        </ul>
      </nav>
      <div class="divider"></div>
      <div class="footer__upper-col">
        <div class="footer__social">
          <a class="footer__social-link" href="#">
            <img class="footer__social-icon" src="<?php echo get_stylesheet_directory_uri() ?>/src/images/linkedIn-icon.svg?v=0.1.0" alt="LinkedIn Icon">
          </a>
          <a class="footer__social-link" href="#">
            <img class="footer__social-icon" src="<?php echo get_stylesheet_directory_uri() ?>/src/images/twitter-icon.svg?v=0.1.0" alt="Twitter Icon">
          </a>
          <a class="footer__social-link" href="#">
            <img class="footer__social-icon" src="<?php echo get_stylesheet_directory_uri() ?>/src/images/facebook-icon.svg?v=0.1.0" alt="Facebook Icon">
          </a>
          <a class="footer__social-link" href="#">
            <img class="footer__social-icon" src="<?php echo get_stylesheet_directory_uri() ?>/src/images/instagram-icon.svg?v=0.1.0" alt="Instagram Icon">
          </a>
        </div>
      </div>
    </div>
    <div class="divider-desktop"></div>
    <div class="footer__bottom-row"></div>
  </div>
</footer>
<?php
get_template_part('partials/footer/footer', 'minimal');
?>
