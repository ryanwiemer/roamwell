<?php
/**
 * Footer
 */
?>
  <footer class="footer">
    <div class="footer__copyright">
      &copy; <?php echo date("Y") ?> <?php echo get_bloginfo( 'name' ); ?>. All rights reserved.
    </div>
    <?php if( have_rows('social_media_links','option') ): ?>
    <div class="footer__social">
      <?php while( have_rows('social_media_links','option') ): the_row(); ?>
      <a href="<?php the_sub_field('social_media_url','option'); ?>" target="_blank"><?php the_sub_field('social_media_title','option'); ?></a>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </footer>
</div><!--canvas-->
</div><!--wrapper-->
<?php wp_footer(); ?>
</body>
</html>
