<?php
get_template_part('partials/header/header', 'minimal');
get_template_part('partials/topbar/topbar');

$classes = array();
if(array_key_exists('class', $args)) {
  $classed = array_merge($classes, $args['class']);
}
$is_overlay = get_field('overlay_header_over_content');
if($is_overlay) $classes[] = 'header--overlay';
?>
<header class="header">
  <div class="header__container container">
    <a class="header__logo" href="/">
      <img class="header__logo-img" src="<?php echo get_stylesheet_directory_uri() ?>/src/images/logo.svg" alt="<?php echo get_bloginfo('name') ?>">
    </a>
    <nav class="header__menu">
      <?php render_menu('primary', 'header__menu', '-'); ?>
    </nav>
  </div>
</header>
