<?php
/**
 * About Page
 */

get_header(); ?>

<div class="container">
	<header class="page__header">
		<h2 class="page__title">About</h2>
	</header>
		<?php while ( have_posts() ) : the_post(); ?>
				<div class="hero">
					<?php if ( has_post_thumbnail() ) {  the_post_thumbnail(); } ?>
				</div>
				<div class="main">
					<div class="page__content">
						<?php the_content(); ?>
					</div>
				</div>
		<?php endwhile; ?>

</div>

<?php get_footer(); ?>
