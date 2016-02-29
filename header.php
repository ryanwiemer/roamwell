<?php
/**
 * Header
 */
?><!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
  <title><?php wp_title('|', true, 'right'); ?></title>
  <!-- Typekit -->
  <?php wp_head(); ?>
  <!-- Google Analytics -->
</head>
<body <?php body_class('loading'); ?>>
<div class="container">
  <header class="header">
    <nav class="nav">
      <a class="logo" href="<?php echo get_site_url() ?>"><h1><?php echo get_bloginfo( 'name' ); ?></h1><img src="http://placehold.it/200x200" /></a>
      <?php wp_nav_menu( array( 'menu' => 'Menu 1', 'container' => false, 'menu_class' => '', 'container_class' => '') ); ?>
      <button class="btn btn--explore">Explore</button>
    </nav>
  </header>
