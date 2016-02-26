<?php
/**
 * Content-Single
 */
?>

<article <?php post_class('post__active'); ?>>
	<header class="post__header">
			<h2 class="post__title">
				<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'themeTextDomain' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
			<span class="post__date"><?php echo get_the_date(); ?></span>
	</header>

	<div class="post__content">
		<?php the_content(); ?>
	</div>

	<footer class="post__meta">
		<?php $category_list = get_the_category_list();  printf($category_list); ?>
	</footer>
</article>
