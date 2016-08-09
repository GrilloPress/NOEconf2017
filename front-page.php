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
        <h2 class="section-header">About our conference</h2>
        <hr>
      </div>
    </div> 
    <div class="row">
      <div class="col-md-12">
        <h3>Engage with world-class speakers and instructors talk about breech birth</h3>
        <div class="row">
          <div class="col-md-4">

            <img src="<?php echo get_template_directory_uri() . "/images/citywideteam2.jpg";?>" class="img-responsive wt-image">
          </div>
          <div class="col-md-8">
            <p class="lead">The North of England Breech Conference builds on our 2014 event, including discussions and talks covering the evidence and physiology of vaginal breech birth, upright vs supine breech birth, developing a robust breech pathway, debriefing the unexpected, supporting colleagues and parents.</p>
            <p>
              <a target="_blank" href="https://www.eventbrite.co.uk/e/north-of-england-breech-conference-ii-uk-tickets-25481488819" class="btn btn-lg btn-warning">Buy ticket</a>
            </p>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>

<div id="primary" class="container">
  
  <section class="pricing-container">
    <div class="row">
      
      <div class="col-md-3 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Sponsor the event?</h3>
          </div>
          <div class="panel-body">
            <p>Are you interested in supporting us host an event that aims to develop skills and support choice?</p>
            <p>If yes, you can <a href="mailto:sheffieldconferences@sth.nhs.uk">get in touch with the conference team via email</a></p>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="panel panel-primary panel-featured">
          <div class="panel-heading">
            <h3 class="panel-title">Early-bird tickets</h3>
          </div>
          <div class="panel-body">
            <p>We have opened up a small selection of "early-bird" tickets for North of England Breech Conference 2017.</p>
            <p>These tickets are limited to a select number of customers so get them today!</p>
            <div class="panel-pricing">
              <p class="price">£160</p>
              <p class="sub">(+£43.15 Fee and VAT)</p>
            </div>
            <p>
              <a role="button" target="_blank" href="https://www.eventbrite.co.uk/e/north-of-england-breech-conference-ii-uk-tickets-25481488819" class="btn btn-block btn-warning">Buy ticket</a>
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Regular ticket</h3>
          </div>
          <div class="panel-body">
            <p>Grab yourself a ticket to our two-day breech conference in Sheffield</p>
            <div class="panel-pricing">
              <p class="price">£195</p>
              <p class="sub">(+£52.46 Fee and VAT)</p>
            </div>
            <p>
              <a role="button" target="_blank" href="https://www.eventbrite.co.uk/e/north-of-england-breech-conference-ii-uk-tickets-25481488819" class="btn btn-block btn-default">Buy ticket</a>
            </p>
          </div>
        </div>
      </div>
      
    </div>
  </section>
  
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