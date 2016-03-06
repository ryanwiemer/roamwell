<?php
/**
 * Archive Template
 */

get_header(); ?>
<div class="main">
	<?php if ( have_posts() ) : ?>
		<header class="page__header archive__header">
			<h2 class="page__title">
				 <?php
            if ( is_category() ) {
                printf( __( 'Category: %s' ), '<span>' . single_cat_title( '', false ) . '</span>' );

            } elseif ( is_tag() ) {
                printf( __( 'Tag: %s' ), '<span>' . single_tag_title( '', false ) . '</span>' );

            } elseif ( is_author() ) {
                /* Queue the first post, that way we know
                 * what author we're dealing with (if that is the case).
                */
                the_post();
                printf( __( 'Author: %s' ), '<span class="vcard"><a class="url fn n" href="' . get_author_posts_url( get_the_author_meta( "ID" ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
                /* Since we called the_post() above, we need to
                 * rewind the loop back to the beginning that way
                 * we can run the loop properly, in full.
                 */
                rewind_posts();

            } elseif ( is_day() ) {
                printf( __( 'Daily Archives: %s' ), '<span>' . get_the_date() . '</span>' );

            } elseif ( is_month() ) {
                printf( __( 'Monthly Archives: %s' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

            } elseif ( is_year() ) {
                printf( __( 'Yearly Archives: %s' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

            } else {
                _e( 'Archives' );

            }
        ?>
			</h2>
		</header>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>
<div class="page-nav">
	<?php posts_nav_link(' ','newer posts &#8594;','&#8592; older posts'); ?>
</div>
</div><!--main-->
<?php get_footer(); ?>
