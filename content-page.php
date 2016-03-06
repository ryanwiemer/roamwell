<?php
/**
	* Content-Pgae
	*/
?>
	<header class="page__header">
		<h2 class="page__title"><?php the_title(); ?></h2>
	</header>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="post__content">
			<?php the_content(); ?>
		</div>
	</article>
