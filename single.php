<?php
/**
 * Single
 */
get_header(); ?>

	<div class="main">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php comments_template(); ?>

		<?php endwhile; // end of the loop. ?>
	</div><!--main-->
<?php get_footer(); ?>
