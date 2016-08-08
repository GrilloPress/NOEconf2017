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
      
      <?php // if( get_field('left_button') ): ?>
        <a class="btn btn-lg btn-warning" target="_blank" href="https://www.eventbrite.co.uk/e/north-of-england-breech-conference-ii-uk-tickets-25481488819#tickets<?php // the_field('left_button'); ?>" role="button">Get tickets</a>
      <?php // endif; ?>
      
      <?php // if( get_field('right_button') ): ?>
      <?php //  <a class="btn btn-primary" href="  the_field('right_button');" role="button">Learn more</a> ;?>
      <?php // endif; ?>
     </div>
  </div>
</div>

<div id="primary" class="container">
  
  <section class="front-page-featured-thirds">
  </section>
  
  <section class="">
    <div class="row">
    <main id="main" class="col-md-6 col-md-offset-3" role="main">
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
  </section>
  
</div>

<?php get_footer(); ?>