<?php
/**
 * Search Form
 */
?>
<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" class="search-form__field" autocomplete="off" name="s" id="s" placeholder="Type search term..." />
	<input type="submit" class="search-from__submit" name="submit"value="search" />
</form>
