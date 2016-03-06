<?php
/**
 * 404 Template
 */

get_header(); ?>

<div class="main">

	<header class="page__header">
		<h2 class="page__title"><?php _e( 'Error 404', 'themeTextDomain' ); ?></h2>
	</header>
	<article class="not-found">
			<p><?php _e( 'Oops! That page can&rsquo;t be found. Please check the URL and try again. To return to the homepage click <a href="/">here</a>.', 'themeTextDomain' ); ?></p>
	</article>

</div>
<?php get_footer(); ?>
