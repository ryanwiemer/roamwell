<?php
/**
 * Search Form
 */
?>
<section class="search">
	<div class="search__overlay overlay--search">
		<form method="get" class="search__form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input type="text" class="search__form__field" autocomplete="off" name="s" id="s" placeholder="Type search term..." />
			<input type="submit" class="search__from__submit" name="submit"value="search" />
		</form>
	</div>
</section>
