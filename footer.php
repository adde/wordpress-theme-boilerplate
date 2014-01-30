<?php
/**
 * Footer
 *
 * Adds JavaScripts to the bottom of the page for faster loading
 * Includes wp_footer() function containing WordPress own JavaScript.
 *
 */
?>

  <script>
    var mainConfig = {
      jsUrl: '<?php echo get_template_directory_uri(); ?>/assets/js'
    };
  </script>
  <script data-main="<?php echo get_template_directory_uri(); ?>/assets/js/main" src="<?php echo get_template_directory_uri(); ?>/assets/js/require/require.js"></script>

  <?php wp_footer(); ?>

</body>
</html>