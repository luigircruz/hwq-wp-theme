<?php
$text_content = get_field('text_content');
$image_content = get_field('image_content');

$block_text_with_image__text = function($text_content) {
  if($text_content['size'] === '0') return;
?>
<div class="grid__col--span<?php echo $text_content['size'] ?>">
  <?php if($text_content['sub_title']): ?>
  <h3 class="text-with-image__sub-title"><?php echo $text_content['sub_title'] ?></h3>
  <?php endif; ?>

  <div class="text-with-image__text" style="column-count: <?php echo $text_content['text_columns'] ?>;">
  <?php echo $text_content['text'] ?>
  </div>

  <?php if($text_content['button_text']): ?>
  <div>
    <a class="text-with-image__btn btn" href="<?php echo $text_content['button_link'] ?>"><?php echo $text_content['button_text'] ?></a>
  </div>
  <?php endif; ?>
</div> 
<?php
};

$block_text_with_image__gap = function($gap_size) {
  if($gap_size === '0') return;
?>
<div class="grid__col--span<?php echo $gap_size ?>"></div>
<?php
};

$block_text_with_image__image = function($i) {
  if($i['size'] === '0') return;
?>
<div class="grid__col--span<?php echo $i['size'] ?>">
  <img class="text-with-image__image" src="<?php echo $i['image']['url'] ?>" alt="<?php echo $i['image']['alt'] ?>">
</div>
<?php 
};
?>

<section class="text-with-image container">
  <?php if(get_field('title')): ?>
  <h1 class="text-with-image__title"><?php the_field('title') ?></h1>
  <?php endif; ?>
  <div class="text-with-image__container grid">
    <?php if(!get_field('reverse_order')): ?>

    <?php $block_text_with_image__text($text_content) ?>
    <?php $block_text_with_image__gap(get_field('gap_size')) ?>
    <?php $block_text_with_image__image($image_content) ?>

    <?php else: ?>

    <?php $block_text_with_image__image($image_content) ?>
    <?php $block_text_with_image__gap(get_field('gap_size')) ?>
    <?php $block_text_with_image__text($text_content) ?>

    <?php endif; ?>
  </div>
</section>

