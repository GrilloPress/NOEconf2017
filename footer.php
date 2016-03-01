<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sth
 */

?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
      <div class="site-info container">
        <div class="row">
          <div id="widget-footer">
		        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		        <?php endif; ?>
		        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		        <?php endif; ?>
		        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		        <?php endif; ?>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer4') ) : ?>
		        <?php endif; ?>
		      </div>
        </div>
        
        <div class="row">
          <div class="col-md-12">
            <p>&copy; Sheffield Teaching Hospitals NHS Foundation Trust</p>
          </div>
        </div>
      </div><!-- .site-info -->
    </footer><!-- #colophon -->
  </div><!-- #page -->

  <?php wp_footer(); ?>

  </body>
</html>