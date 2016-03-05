<?php
/**
 * Content-Single
 */
?>

<article <?php post_class('post__active'); ?>>
	<?php  if ( has_post_thumbnail() ) {
		the_post_thumbnail();
	} ?>
	<header class="post__header">
		<div class="post__info">
			<h2 class="post__title">
				<?php the_title(); ?>
			</h2>
			<div class="post__comments">
				<?php
					comments_popup_link( '0 Comments', '1 Comment', '% Comments', 'post__comments__link', 'Comments closed');
				?>
			</div>
		</div>
			<div class="post__category">
				<?php $category_list = get_the_category_list();  printf($category_list); ?>
			</div>
	</header>

	<div class="post__content">
		<?php the_content(); ?>
	</div>

	<footer class="post__tags">
		<?php $tag_list = get_the_tag_list();  printf($tag_list); ?>
	</footer>
</article>
