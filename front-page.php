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

<section id="page-home-card-section" class="grey-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2 class="section-header">Main header</h2>
        <hr>
      </div>
    </div> 
    <div class="row">
      <div class="col-md-12">
        <h3>Long section title</h3>
        <div class="row">
          <div class="col-md-4">

            <img src="http://workingtogethernhs.co.uk/wp-content/uploads/2014/11/Doncaster4.jpg" class="img-responsive wt-image">
          </div>
          <div class="col-md-8">
                    <p class="lead">Collaborating on a number of common issues, the Working Together Vanguard aims to strengthen 
                        each organisation's ability to deliver safe, sustainable and local services as well as 
                        meet commissioner intentions to improve the health and well-being of people and
                        make collective efficiencies where the potential exists</p>
            <p><a href="#" class="btn btn-lg btn-warning">Further information</a></p>
            
          
                    </div>
          
        </div>
      </div>
    </div>
  </div>
</section>

<div id="primary" class="container">
  
  <section class="front-page-featured-thirds">
  </section>
  
  <section class="">
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
      
      <aside class="col-md-offset-1 col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
          </div>
          <div class="panel-body">
            Panel content
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
          </div>
          <div class="panel-body">
            Panel content
          </div>
        </div>
      </aside>
      
	  </div><!-- #primary -->
  </section>
  
</div>

<?php get_footer(); ?>