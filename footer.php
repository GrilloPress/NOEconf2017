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
            
            <div class="col-md-3">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		          <?php endif; ?>
            </div>
            
            <div class="col-md-3">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		          <?php endif; ?>
            </div>
            
            <div class="col-md-3">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		          <?php endif; ?>
            </div>
            
            <div class="col-md-3">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer4') ) : ?>
		          <?php endif; ?>
            </div>

		      </div>
        </div>
        
        
      </div><!-- .site-info -->
      
      <footer class="sub-footer">
        <div class="container">
          <div class="col-md-12">
            <div class="row">
              <p>&copy; Sheffield Teaching Hospitals NHS Foundation Trust</p>
            </div>
          </div>
        </div>
      </footer>
      
      
      
    </footer><!-- #colophon -->
  </div><!-- #page -->

  <?php wp_footer(); ?>

  </body>
</html>