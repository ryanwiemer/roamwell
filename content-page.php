<?php
/**
	* Content-Pgae
	*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post__header">
		<h2 class="post__title"><?php the_title(); ?></h2>
	</header>

	<div class="post__content">
		<?php the_content(); ?>
	</div>
</article>
