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
  <script src="https://use.typekit.net/nek3xtt.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <?php wp_head(); ?>
  <!-- Google Analytics -->
</head>
<body <?php body_class('loading'); ?>>
<?php if( have_rows('category_navigation','option') ): ?>
  <nav class='explore-nav'>
    <ul>
      <button class="btn btn--close icon-cross"></button>
      <?php while( have_rows('category_navigation','option') ): the_row(); ?>
        <?php $cat_id = get_sub_field('category','option'); ?>
        <li style="background-image:url('<?php the_sub_field('thumbnail_image','option'); ?>');">
          <a href="<?php echo get_category_link($cat_id);?>">
            <?php echo get_cat_name($cat_id);?>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>
  </nav>
<?php endif; ?>

<div class="container">
  <header class="header">
    <nav class="nav">
      <a href="<?php echo get_site_url() ?>"><h1 class="logo"><?php echo get_bloginfo( 'name' ); ?></h1></a>
      <?php wp_nav_menu( array( 'menu' => 'Menu 1', 'container' => false, 'menu_class' => '', 'container_class' => '') ); ?>
      <button class="btn btn--explore">Explore</button>
    </nav>
  </header>
  <div class="overlay"></div>
