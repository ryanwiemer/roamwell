<?php
/**
 * Index
 */
get_header(); ?>

<div class="main">
	<?php if ( have_posts() ) : ?>

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
