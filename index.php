<?php get_template_part('partials/header/header'); ?>


<?php if(have_posts()): ?>
<?php while(have_posts()): the_post();?>
<h1><?php the_title() ?></h1>
<p><?php the_content(); ?></p>
<?php endwhile; ?>
<?php else: ?>
No posts found!
<?php endif; ?>


<?php get_template_part('partials/footer/footer'); ?>
