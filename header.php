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
  <script type="text/javascript">
    var woffEnabled = true;
    var customPath = "<?php echo get_site_url(); ?>/wp-content/themes/roamwell/build/fonts";
  </script>
  <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/roamwell/build/js/vendor/fonts.min.js"></script>
  <?php wp_head(); ?>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75580000-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body <?php body_class(); ?>>
  <?php get_search_form(); ?>
  <div class="wrapper">
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
  <div class="canvas">
  <header class="header">
    <nav class="nav">
      <a href="<?php echo get_site_url() ?>"><h1 class="logo">Roam <span>Well</span></h1></a>
      <?php wp_nav_menu( array( 'menu' => 'Menu 1', 'container' => false, 'menu_class' => '', 'container_class' => '') ); ?>
      <button class="btn btn--explore">Explore</button>
    </nav>
  </header>
  <div class="overlay--nav"></div>
