<?php
/**
 * Content
 */
?>

<article <?php post_class(); ?>>
  <a href="<?php the_permalink(); ?>">
    <?php  if ( has_post_thumbnail() ) {
    	the_post_thumbnail();
      }
      else {
  	    echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/build/img/placeholder.png"/>';
  	  }
	   ?>
  </a>
  <header class="post__header">
      <h2 class="post__title">
        <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'themeTextDomain' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
      </h2>
      <div class="post__category">
        <?php $category_list = get_the_category_list();  printf($category_list); ?>
      </div>
  </header>

  <section class="post__content">
    <?php the_excerpt(); ?>
  </section>

</article>
