<?php
/**
 * Search Form
 */
?>
<section class="search__container">
		<div class="search__overlay overlay--search"></div>
		<form method="get" class="search__form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input type="text" class="search__form__field" name="s" id="s" autocomplete="off" placeholder="Type search term..." />
			<a onclick="event.preventDefault();" class="btn btn--close--search icon-cross"></a>
		</form>
</section>
