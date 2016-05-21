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
          <h1>Hello, world!</h1>
          <p class="lead">...</p>
          <p><a class="btn btn-primary" href="#" role="button">Learn more</a> <a class="btn btn-link" href="#" role="button">Learn more</a></p>
     </div>
  </div>
</div>

	 <div id="primary" class="container">     
     <div class="row">
      <div class="col-md-4">
        <div class="text-center">
          <img src="http://placehold.it/150x150" alt="..." class="img-circle">
          <h4>Title</h4>
          <p>words</p>
          <a href="#" class="btn btn-warning" role="button">Click me</a>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="text-center">
          <img src="http://placehold.it/150x150" alt="..." class="img-circle">
          <h4>Title</h4>
          <p>words</p>
          <a href="#" class="btn btn-warning" role="button">Click me</a>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="text-center">
          <img src="http://placehold.it/150x150" alt="..." class="img-circle">
          <h4>Title</h4>
          <p>words</p>
          <a href="#" class="btn btn-warning" role="button">Click me</a>
        </div>
      </div>
     </div>
       
     <section>
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
      
      <main id="main" class="col-md-8 col-sm-8" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		  </main><!-- #main -->
      
      <aside class="col-md-4 col-sm-4">
        <?php get_sidebar(); ?>
      </aside>
      
	  </div><!-- #primary -->
  </div>

<?php get_footer(); ?>