<?php
/**
 * Archive Template
 */

get_header(); ?>
<div class="main">
	<?php if ( have_posts() ) : ?>
		<header class="page__header">
				 <?php
            if ( is_category() ) {
                printf( __( '%s' ), '<div><h2 class="page__title page__title--category"><span>' . single_cat_title( '', false ) . ' </span></div></h2>' );
								echo category_description( $category_id );
            } elseif ( is_tag() ) {
                printf( __( '<h2 class="page__title">Tag: %s' ), '<span>' . single_tag_title( '', false ) . '</span></h2>' );
            } else {
                _e( 'Archives' );
            }
        ?>
		</header>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>
<div class="page-nav">
	<?php posts_nav_link(' ','newer posts &#8594;','&#8592; older posts'); ?>
</div>
</div><!--main-->
<?php get_footer(); ?>
