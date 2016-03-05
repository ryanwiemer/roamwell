<?php
/**
 * 404 Template
 */

get_header(); ?>

<div class="main">

	<header class="page__header">
		<h2 class="page__title"><?php _e( 'Uh oh!', 'themeTextDomain' ); ?></h2>
	</header>
	<article class="not-found">
			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps a search would help?', 'themeTextDomain' ); ?></p>
	</article>

</div>
<?php get_footer(); ?>
