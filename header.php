<?php
/**
 * Header
 *
 * Displays the head section and beginning of body.
 *
 * Using WordPress title, description and stylesheets.
 * Including wp_head function.
 * Applying CSS-classes to body-tag.
 *
 */
?><!DOCTYPE html>
  <!--[if lt IE 7]> <html lang="sv" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
  <!--[if IE 7]> <html lang="sv" class="no-js lt-ie9 lt-ie8"> <![endif]-->
  <!--[if IE 8]> <html lang="sv" class="no-js lt-ie9"> <![endif]-->
  <!--[if gt IE 8]><!--> <html lang="sv" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?> <?php wp_title('&raquo;', true, 'left'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="keywords" content="keyword1, keyword2">

  <!-- Styles -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

  <!-- Modernizr -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/libs/modernizr.js"></script>

  <!-- Fav icon -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/ico/favicon.ico">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>