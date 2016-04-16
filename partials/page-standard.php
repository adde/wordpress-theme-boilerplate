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
  </header>
  <section class="post-body">
    <?php the_content(); ?>
  </section>
</article>