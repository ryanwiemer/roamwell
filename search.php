<?php
/**
 * Search
 */
get_header(); ?>

<div class="main">
	<?php if ( have_posts() ) : ?>

		<header class="page__header">
			<h2 class="page__title"><?php printf( __( 'Search Results for: %s', 'themeTextDomain' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
		</header>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php
				get_template_part( 'content');
			?>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

</div> <!--main-->
<div class="page-nav">
	<?php posts_nav_link(' ','newer posts &#8594;','&#8592; older posts'); ?>
</div>

<?php get_footer(); ?>
