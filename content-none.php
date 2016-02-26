<?php
/**
	* Content-None
	*/
?>

<header class="page__header">
	<h2 class="page__title"><?php _e( 'Nothing Found', 'themeTextDomain' ); ?></h2>
</header>

<article class="no-results not-found">

	<div class="post__content">
		<?php if ( is_archive() ) : ?>

			<p><?php _e( 'There are no published posts for this archive. Try searching using keywords instead.', 'themeTextDomain' ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'No matches were found for your search terms. Please try again with different keywords.', 'themeTextDomain' ); ?></p>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps a search would help?', 'themeTextDomain' ); ?></p>

		<?php endif; ?>
	</div>
</article>
