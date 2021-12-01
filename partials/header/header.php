<?php
get_template_part('partials/header/header', 'minimal');

$classes = array();
if(array_key_exists('class', $args)) {
  $classed = array_merge($classes, $args['class']);
}
$is_overlay = get_field('overlay_header_over_content');
if($is_overlay) $classes[] = 'header--overlay';
?>
<header class="header">
  <!-- TOPBAR -->
  <?php get_template_part('partials/topbar/topbar'); ?>
  <div class="main-nav">
    <!-- DESKTOP -->
    <div class="main-nav-desktop">
      <div class="main-nav__logo">
        <a class="" href="/">
          <img class="main-nav__logo-img" src="<?php echo get_stylesheet_directory_uri() ?>/src/images/logo.svg" alt="<?php echo get_bloginfo('name') ?>">
        </a>
      </div>
      <nav class="main-nav-desktop__menu">
        <ul class="main-nav-desktop__menu-list">
          <li class="main-nav__item">
            <?php render_menu('primary', 'main-nav__link', '-'); ?>
          </li>   
        </ul>
      </nav>
    </div>
  
    <!-- MOBILE -->
    <div class="main-nav-mobile">
      <div class="main-nav-mobile__container">
        <button>
          <svg
            width="22"
            height="19"
            viewBox="0 0 22 19"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <rect y="0.00317383" width="22" height="2.00032" fill="white" />
            <rect y="8.00464" width="22" height="2.00032" fill="white" />
            <rect y="16.0061" width="22" height="2.00032" fill="white" />
          </svg>
        </button>
        <div class="main-nav__logo">
          <Link href="/">
            <a>
              <img class="main-nav__logo-img" src="<?php echo get_stylesheet_directory_uri() ?>/src/images/logo.svg" alt="<?php echo get_bloginfo('name') ?>">
            </a>
          </Link>
        </div>
        <nav class="main-nav-mobile__menu">
          <ul class="main-nav-mobile__menu-list">
              <?php render_menu('primary', 'main-nav__link', '-'); ?>
          </ul>
        </nav>
        <button>
          <svg
            width="25"
            height="25"
            viewBox="0 0 25 25"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M10.5834 20.1728C15.8762 20.1728 20.1669 15.8815 20.1669 10.5878C20.1669 5.2942 15.8762 1.00287 10.5834 1.00287C5.29065 1.00287 1 5.2942 1 10.5878C1 15.8815 5.29065 20.1728 10.5834 20.1728Z"
              stroke="white"
              stroke-width="1.5"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M23.9997 24.0069L17.3552 17.3613"
              stroke="white"
              stroke-width="1.5"
              stroke-winecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </button>
      </div>
    </div>
  </div>
</header>
