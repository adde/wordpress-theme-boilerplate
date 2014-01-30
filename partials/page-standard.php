<?php
/**
 * Standard page partial
 *
 * Contains html and wordpress-code for a single page.
 *
 */
?>

<article id="post-<?php the_ID(); ?>">
  <header>
    <h1><?php the_title(); ?></h1>
    <small><?php the_date(); ?></small>
  </header>
  <section class="post-body">
    <?php the_content(); ?>
  </section>
</article>