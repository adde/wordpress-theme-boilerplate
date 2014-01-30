<?php
/**
 * The main template content
 *
 * In this file we will render the most generic content.
 *
 */
?>

<article id="post-<?php the_ID(); ?>">
  <header>
    <h1><?php the_title(); ?></h1>
    <small><?php the_data(); ?></small>
  </header>
  <section class="post-body">
    <?php the_content(); ?>
  </section>
</article>