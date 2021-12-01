<?php
define('EVOLUT_THEME_SLUG', 'hwq-theme');
define('EVOLUT_THEME_TEXT_DOMAIN', EVOLUT_THEME_SLUG);
define('EVOLUT_THEME_VERSION' , '0.1.3');
define('EVOLUT_DEV_ENVIRONMENT', true);

require('includes/gutenberg-styles.php');
require('includes/render-menu.php');
require('blocks/blocks.php');

// Support
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

register_nav_menus(
  array(
    'primary' => __('Primary', EVOLUT_THEME_TEXT_DOMAIN),
    'topbar' => __('Top Bar', EVOLUT_THEME_TEXT_DOMAIN),
    'footer'  => __('Footer Menu', EVOLUT_THEME_TEXT_DOMAIN),
  )
);

add_action(
    'wp_enqueue_scripts',
    function() {
      if(EVOLUT_DEV_ENVIRONMENT) {
        wp_enqueue_style(EVOLUT_THEME_SLUG . '-css', get_stylesheet_directory_uri() . '/src/styles/styles.css', array(), EVOLUT_THEME_VERSION);
      } else {
        wp_enqueue_style(EVOLUT_THEME_SLUG . '-css', get_stylesheet_directory_uri() . '/src/styles/_combined.css', array(), EVOLUT_THEME_VERSION);
      }
    }
);
?>
