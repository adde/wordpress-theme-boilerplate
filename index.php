<?php
/**
 * The main template file
 *
 */

get_header(); ?>

  <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
      <?php get_template_part( 'content', 'standard' ); ?>
    <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>