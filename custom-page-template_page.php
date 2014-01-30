<?php
/*
Template Name: Custom page template
Description: This is a custom page template that can be chosen in the administration.
*/

get_header(); ?>

  <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
      <?php get_template_part( 'partials/page', 'custom-page-template' ); ?>
    <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>