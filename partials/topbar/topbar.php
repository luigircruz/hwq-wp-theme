<?php
$classes = array();
if(array_key_exists('class', $args)) {
  $classed = array_merge($classes, $args['class']);
}
$is_overlay = get_field('overlay_header_over_content');
if($is_overlay) $classes[] = 'topbar--overlay';
?>
<section class="topbar <?php echo implode(' ', $classes) ?>">
  <div class="topbar__container">
    <nav class="topbar__nav">
      <a href="#">
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
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </svg>
      </a>
      <ul class="topbar__nav-links">
          <?php render_menu('topbar', 'topbar__link', '-') ?>
      </ul>
    </nav>
  </div>
</section>