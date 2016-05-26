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
          <img src="http://placehold.it/150x150" alt="..." class="img-circle">
          <h4>Title</h4>
          <p>words</p>
          <a href="#" class="btn btn-primary" role="button">Click me</a>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="front-page-feature-block">
          <img src="http://placehold.it/150x150" alt="..." class="img-circle">
          <h4>Title</h4>
          <p>words</p>
          <a href="#" class="btn btn-primary" role="button">Click me</a>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="front-page-feature-block">
          <img src="http://placehold.it/150x150" alt="..." class="img-circle">
          <h4>Title</h4>
          <p>words</p>
          <a href="#" class="btn btn-primary" role="button">Click me</a>
        </div>
      </div>
     </div>
  </section>
  
  <section class="front-page-featured-about">
    <div class="row">
      <div class="col-md-6">
        <h2>About the conference</h2>
          <p>100-200 words about why this conference, what the last one taught and why this next one will be even better etc.</p>
          <a href="#" class="btn btn-warning" role="button">Click me</a>
      </div>
        
      <div class="col-md-offset-1 col-md-5">
          there
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
              <a href="#">
                <img src="http://placehold.it/50x50" alt="..." class="img-circle">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              ...
            </div>
          </div>
        </div>
        
        <div class="col-md-5">
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img src="http://placehold.it/50x50" alt="..." class="img-circle">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              ...
            </div>
          </div>
        </div>
      </div>
       
       <div class="row">
        <div class="col-md-5 col-md-offset-2">
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img src="http://placehold.it/50x50" alt="..." class="img-circle">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              ...
            </div>
          </div>
        </div>
        
        <div class="col-md-5">
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img src="http://placehold.it/50x50" alt="..." class="img-circle">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              ...
            </div>
          </div>
        </div>
      </div>
       
       <div class="row">
        <div class="col-md-5 col-md-offset-2">
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img src="http://placehold.it/50x50" alt="..." class="img-circle">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              ...
            </div>
          </div>
        </div>
        
        <div class="col-md-5">
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img src="http://placehold.it/50x50" alt="..." class="img-circle">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              ...
            </div>
          </div>
        </div>
      </div>
       
       <div class="row">
        <div class="col-md-5 col-md-offset-2">
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img src="http://placehold.it/50x50" alt="..." class="img-circle">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              ...
            </div>
          </div>
        </div>
        
        <div class="col-md-5">
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img src="http://placehold.it/50x50" alt="..." class="img-circle">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              ...
            </div>
          </div>
        </div>
      </div>
     </section>
     
     <section>
          <div class="row">
            <div class="col-md-4">
              <div class="front-page-feature-block">
                <img src="http://placehold.it/150x150" alt="..." class="img-circle">
                <h4>Title</h4>
                <p>words</p>
                <a href="#" class="btn btn-primary" role="button">Click me</a>
              </div>
            </div>

            <div class="col-md-4">
              <div class="front-page-feature-block">
                <img src="http://placehold.it/150x150" alt="..." class="img-circle">
                <h4>Title</h4>
                <p>words</p>
                <a href="#" class="btn btn-primary" role="button">Click me</a>
              </div>
            </div>

            <div class="col-md-4">
              <div class="front-page-feature-block">
                <img src="http://placehold.it/150x150" alt="..." class="img-circle">
                <h4>Title</h4>
                <p>words</p>
                <a href="#" class="btn btn-primary" role="button">Click me</a>
              </div>
            </div>
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