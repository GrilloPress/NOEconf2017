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

	 <div id="primary" class="container">
    <div class="row">
      
      <div class="col-md-12">
        <div class="jumbotron">
          <h1>Hello, world!</h1>
          <p>...</p>
          <p><a class="btn btn-primary" href="#" role="button">Learn more</a> <a class="btn btn-link" href="#" role="button">Learn more</a> </p>
        </div>
      </div>
      
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