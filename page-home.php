<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sth
 * 
 * 
 * 
 * Template Name: Homepage
 */

get_header(); ?>

<div class="jumbotron">
  <div class="container">
    <div class="col-md-12 text-center">
      <?php if( get_field('headline') ): ?>
        <h1><?php the_field('headline'); ?></h1>
      <?php endif; ?>
      
      <?php if( get_field('subtitle') ): ?>
        <p class="lead"><?php the_field('subtitle'); ?></p>
      <?php endif; ?>
      
      <?php if( get_field('left_button') ): ?>
        <a class="btn btn-warning" href="<?php the_field('left_button'); ?>" role="button">Find tickets</a>
      <?php endif; ?>
      
      <?php if( get_field('right_button') ): ?>
        <a class="btn btn-primary" href="<?php the_field('right_button'); ?>" role="button">Learn more</a>
      <?php endif; ?>
     </div>
  </div>
</div>

<div id="primary" class="container">
  <section class="front-page-featured-thirds">
    <div class="row">

      <div class="col-md-4">
        <div class="front-page-feature-block">
          <?php if( get_field('featured_top_block_one_image') ): ?>
            <img src="<?php the_field('featured_top_block_one_image'); ?>" class="img-circle">
          <?php endif; ?>
          
          <?php if( get_field('featured_top_block_one_heading') ): ?>
            <h4><?php the_field('featured_top_block_one_heading'); ?></h4>
          <?php endif; ?>
          
          <?php if( get_field('featured_top_block_one_text') ): ?>
            <p><?php the_field('featured_top_block_one_text'); ?></p>
          <?php endif; ?>
          
          <?php if( get_field('featured_top_block_one_link') ): ?>
            <a class="btn btn-primary" href="<?php the_field('featured_top_block_one_link'); ?>" alt="<?php the_field('featured_top_block_one_text'); ?>" role="button">Learn more</a>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-md-4">
        <div class="front-page-feature-block">
          <?php if( get_field('featured_top_block_two_image') ): ?>
            <img src="<?php the_field('featured_top_block_two_image'); ?>" class="img-circle">
          <?php endif; ?>
          
          <?php if( get_field('featured_top_block_two_heading') ): ?>
            <h4><?php the_field('featured_top_block_two_heading'); ?></h4>
          <?php endif; ?>
          
          <?php if( get_field('featured_top_block_two_text') ): ?>
            <p><?php the_field('featured_top_block_two_text'); ?></p>
          <?php endif; ?>
          
          <?php if( get_field('featured_top_block_two_link') ): ?>
            <a class="btn btn-primary" href="<?php the_field('featured_top_block_two_link'); ?>" alt="<?php the_field('featured_top_block_two_text'); ?>" role="button">Learn more</a>
          <?php endif; ?>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="front-page-feature-block">
          <?php if( get_field('featured_top_block_three_image') ): ?>
            <img src="<?php the_field('featured_top_block_three_image'); ?>" class="img-circle">
          <?php endif; ?>
          
          <?php if( get_field('featured_top_block_three_heading') ): ?>
            <h4><?php the_field('featured_top_block_three_heading'); ?></h4>
          <?php endif; ?>
          
          <?php if( get_field('featured_top_block_three_text') ): ?>
            <p><?php the_field('featured_top_block_three_text'); ?></p>
          <?php endif; ?>
          
          <?php if( get_field('featured_top_block_three_link') ): ?>
            <a class="btn btn-primary" href="<?php the_field('featured_top_block_three_link'); ?>" alt="<?php the_field('featured_top_block_three_text'); ?>" role="button">Learn more</a>
          <?php endif; ?>
        </div>
      </div>
      
      
     </div>
  </section>
  
  <section class="front-page-featured-about">
    <div class="row">
      <div class="col-md-6">

        <?php if( get_field('featured_about_title') ): ?>
          <h2><?php the_field('featured_about_title'); ?></h2>
        <?php endif; ?>
        <?php if( get_field('featured_about_body') ): ?>
          <h2><?php the_field('featured_about_body'); ?></h2>
        <?php endif; ?>
        <?php if( get_field('featured_about_button') ): ?>
          <a class="btn btn-warning" href="<?php the_field('featured_about_button'); ?>" alt="<?php the_field('featured_about_title'); ?>" role="button">Learn more</a>
        <?php endif; ?>
      </div>
        
      <div class="col-md-offset-1 col-md-5">
        <?php if( get_field('featured_about_image') ): ?>
          <img src="<?php the_field('featured_about_image'); ?>" class="img-responsive">
        <?php endif; ?>
      </div>
    </div>
  </section>
  
  <div class="row">
    <main id="main" class="col-md-6" role="main">
      <?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="entry-content">
            <?php the_content(); ?>
            <?php
              wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sth' ),
                'after'  => '</div>',
              ) );
            ?>
          </div><!-- .entry-content -->

          <footer class="entry-footer">
            <?php edit_post_link( esc_html__( 'Edit', 'sth' ), '<span class="edit-link">', '</span>' ); ?>
          </footer><!-- .entry-footer -->
        </article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		  </main><!-- #main -->
      
      <aside class="col-md-offset-1 col-md-5">
      </aside>
      
	  </div><!-- #primary -->
  
  <section class="front-page-featured-reasons">

    <div class="row">
      <div class="col-md-5 col-md-offset-2">
        <div class="media">
          <div class="media-left">      
            <?php if( get_field('reasons_link_one') ): ?>
              <a href="<?php the_field('reasons_link_one'); ?>">
                 <?php if( get_field('reasons_image_one') ): ?>
                    <img src="<?php the_field('reasons_image_one'); ?>" class="img-circle" width="50" height="50">
                  <?php endif; ?>
              </a>
            <?php endif; ?>
          </div>
          
          <?php if( get_field('reasons_heading_one') ): ?>
              <div class="media-body">
                <h4 class="media-heading"><?php the_field('reasons_heading_one'); ?></h4>
                <?php if( get_field('reasons_body_one') ): ?>
                  <?php the_field('reasons_body_one'); ?>
                <?php endif; ?>
              </div>        
          <?php endif; ?>
        </div>
      </div>
        
      <div class="col-md-5">
        <div class="media">
          <div class="media-left">      
            <?php if( get_field('reasons_link_two') ): ?>
              <a href="<?php the_field('reasons_link_two'); ?>">
                 <?php if( get_field('reasons_image_two') ): ?>
                    <img src="<?php the_field('reasons_image_two'); ?>" class="img-circle" width="50" height="50">
                  <?php endif; ?>
              </a>
            <?php endif; ?>
          </div>
          
          <?php if( get_field('reasons_heading_two') ): ?>
              <div class="media-body">
                <h4 class="media-heading"><?php the_field('reasons_heading_two'); ?></h4>
                <?php if( get_field('reasons_body_two') ): ?>
                  <?php the_field('reasons_body_two'); ?>
                <?php endif; ?>
              </div>        
          <?php endif; ?>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-5 col-md-offset-2">
        <div class="media">
          <div class="media-left">      
            <?php if( get_field('reasons_link_three') ): ?>
              <a href="<?php the_field('reasons_link_three'); ?>">
                 <?php if( get_field('reasons_image_three') ): ?>
                    <img src="<?php the_field('reasons_image_three'); ?>" class="img-circle" width="50" height="50">
                  <?php endif; ?>
              </a>
            <?php endif; ?>
          </div>
          
          <?php if( get_field('reasons_heading_three') ): ?>
              <div class="media-body">
                <h4 class="media-heading"><?php the_field('reasons_heading_three'); ?></h4>
                <?php if( get_field('reasons_body_three') ): ?>
                  <?php the_field('reasons_body_three'); ?>
                <?php endif; ?>
              </div>        
          <?php endif; ?>
        </div>
      </div>
        
      <div class="col-md-5">
        <div class="media">
          <div class="media-left">      
            <?php if( get_field('reasons_link_four') ): ?>
              <a href="<?php the_field('reasons_link_four'); ?>">
                 <?php if( get_field('reasons_image_four') ): ?>
                    <img src="<?php the_field('reasons_image_four'); ?>" class="img-circle" width="50" height="50">
                  <?php endif; ?>
              </a>
            <?php endif; ?>
          </div>
          
          <?php if( get_field('reasons_heading_four') ): ?>
              <div class="media-body">
                <h4 class="media-heading"><?php the_field('reasons_heading_four'); ?></h4>
                <?php if( get_field('reasons_body_four') ): ?>
                  <?php the_field('reasons_body_four'); ?>
                <?php endif; ?>
              </div>        
          <?php endif; ?>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-5 col-md-offset-2">
        <div class="media">
          <div class="media-left">      
            <?php if( get_field('reasons_link_five') ): ?>
              <a href="<?php the_field('reasons_link_five'); ?>">
                 <?php if( get_field('reasons_image_five') ): ?>
                    <img src="<?php the_field('reasons_image_five'); ?>" class="img-circle" width="50" height="50">
                  <?php endif; ?>
              </a>
            <?php endif; ?>
          </div>
          
          <?php if( get_field('reasons_heading_five') ): ?>
              <div class="media-body">
                <h4 class="media-heading"><?php the_field('reasons_heading_five'); ?></h4>
                <?php if( get_field('reasons_body_five') ): ?>
                  <?php the_field('reasons_body_five'); ?>
                <?php endif; ?>
              </div>        
          <?php endif; ?>
        </div>
      </div>
        
      <div class="col-md-5">
        <div class="media">
          <div class="media-left">      
            <?php if( get_field('reasons_link_six') ): ?>
              <a href="<?php the_field('reasons_link_six'); ?>">
                 <?php if( get_field('reasons_image_six') ): ?>
                    <img src="<?php the_field('reasons_image_six'); ?>" class="img-circle" width="50" height="50">
                  <?php endif; ?>
              </a>
            <?php endif; ?>
          </div>
          
          <?php if( get_field('reasons_heading_six') ): ?>
              <div class="media-body">
                <h4 class="media-heading"><?php the_field('reasons_heading_six'); ?></h4>
                <?php if( get_field('reasons_body_six') ): ?>
                  <?php the_field('reasons_body_six'); ?>
                <?php endif; ?>
              </div>        
          <?php endif; ?>
        </div>
      </div>
    </div>
    
     <div class="row">
      <div class="col-md-5 col-md-offset-2">
        <div class="media">
          <div class="media-left">      
            <?php if( get_field('reasons_link_seven') ): ?>
              <a href="<?php the_field('reasons_link_seven'); ?>">
                 <?php if( get_field('reasons_image_seven') ): ?>
                    <img src="<?php the_field('reasons_image_seven'); ?>" class="img-circle" width="50" height="50">
                  <?php endif; ?>
              </a>
            <?php endif; ?>
          </div>
          
          <?php if( get_field('reasons_heading_seven') ): ?>
              <div class="media-body">
                <h4 class="media-heading"><?php the_field('reasons_heading_seven'); ?></h4>
                <?php if( get_field('reasons_body_seven') ): ?>
                  <?php the_field('reasons_body_seven'); ?>
                <?php endif; ?>
              </div>        
          <?php endif; ?>
        </div>
      </div>
        
      <div class="col-md-5">
        <div class="media">
          <div class="media-left">      
            <?php if( get_field('reasons_link_eight') ): ?>
              <a href="<?php the_field('reasons_link_eight'); ?>">
                 <?php if( get_field('reasons_image_eight') ): ?>
                    <img src="<?php the_field('reasons_image_eight'); ?>" class="img-circle" width="50" height="50">
                  <?php endif; ?>
              </a>
            <?php endif; ?>
          </div>
          
          <?php if( get_field('reasons_heading_eight') ): ?>
              <div class="media-body">
                <h4 class="media-heading"><?php the_field('reasons_heading_eight'); ?></h4>
                <?php if( get_field('reasons_body_eight') ): ?>
                  <?php the_field('reasons_body_eight'); ?>
                <?php endif; ?>
              </div>        
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  
  
  <section class="related-pages">
    <div class="row">
      
      <?php
      $related_pages = array("one", "two", "three");

      foreach ($related_pages as $rp) { ;?>
        
      <div class="col-md-4">
        <div class="page-feature-block">
          
          <?php if( get_field('related_pages_image_' . $rp) ): ?>
            <img src="<?php the_field('related_pages_image_' . $rp); ?>" alt="<?php get_field('related_pages_title_' . $rp) ?: the_field('related_pages_title_' . $rp);?>" class="img-circle img-responsive">
          <?php endif; ?>

          <?php if( get_field('related_pages_title' . $rp) ): ?>
            <h4><?php the_field('related_pages_title_' . $rp); ?></h4>
          <?php endif; ?>

          <?php if( get_field('related_pages_body_' . $rp) ): ?>
            <p><?php the_field('related_pages_body_' . $rp); ?></p>
          <?php endif; ?>

          <?php if( get_field('related_pages_link_' . $rp) ): ?>
            <a href="<?php the_field('related_pages_link_' . $rp); ?>" role="button" title="<?php get_field('related_pages_title_' . $rp) ?: the_field('related_pages_title_' . $rp);?>" class="btn btn-primary"><?php get_field('related_pages_title_' . $rp) ?: the_field('related_pages_title_' . $rp);?></a>
          <?php endif; ?>
        </div>
      </div>
      
      <?php }
      reset($related_pages);?>
      
    </div>
  </section>
     
     <section class="front-page-sponsors">
       <div class="col-md-12">
         <h2>Our sponsors</h2>
       </div>
     
       <div class="row">
         <div class="col-md-3">
           <img src="http://placehold.it/150x50" alt="..." class="">
         </div>
         
         <div class="col-md-3">
           <img src="http://placehold.it/150x50" alt="..." class="">
         </div>
         
         <div class="col-md-3">
           <img src="http://placehold.it/150x50" alt="..." class="">
         </div>
         
         <div class="col-md-3">
           <img src="http://placehold.it/150x50" alt="..." class="">
         </div>
         
       </div>
     </section>
     
     
     
     
     
</div>

<?php get_footer(); ?>