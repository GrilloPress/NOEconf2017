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

<section class="page-home-card-section grey-section">
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

  <section class="pricing-container">
    <div class="container">
      
    
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
    </div>
  </section>

<section class="page-home-card-section page-home-card-team-section grey-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2 class="section-header">Our conference team</h2>
        <hr>
      </div>
    </div> 
    <div class="row">
      <div class="col-md-12">
        <h3>Hosted by the multi-award winning Sheffield Citywide 1:1 Team</h3>
        <p class="lead">The Citywide 1-1 Team, consisting of midwives Helen Dresner Barnes, Nicola Dawes and Sarah Martin were formed in 2012 to look after women seeking care outside usual recommended pathways or who have a range of maternal mental health needs. They are supported by multidisciplinary group including managers and obstetricians. The team works on a caseload model of care and are on call 24/7 for their caseload. Part of the service provided by the team is to give 1-1 care to those women with planned vaginal breech births in conjunction with Consultant Obstetrician Dr Julia Bodle.</p>
        
        <div class="row">
          
          <div class="col-md-3">
            <div class="profile-container">
              <img src="<?php echo get_template_directory_uri() . "/images/helend.png";?>" class="wt-image">
              <h4>Helen Dresner-Barnes</h4>
              <p>Helen Dresner Barnes was a Speech and Language Therapist and Researcher in Child Language prior to qualifying as a midwife in 2004. She has worked as a caseloading midwife in Sheffield since 2005 and is deeply committed to women’s choice.</p>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="profile-container">
              <img src="<?php echo get_template_directory_uri() . "/images/sarah.png";?>" class="">
              <h4>Sarah Martin</h4>
              <p>Sarah Martin qualified as a nurse in 1988, working both in the UK and Australia. Her interest has always been in women’s health and has worked in that field since 1990, first in gynae, then qualifying as a midwife in 1994.</p>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="profile-container">
              <img src="<?php echo get_template_directory_uri() . "/images/nicola.png";?>" class="">
              <h4>Nicola Dawes</h4>
              <p>Nicola Dawes qualified as a Staff Nurse in 2004, and then as a Midwife in 2007. She has always had a strong passion in promoting normality and is committed to women centred care. Nicola worked as a core member on the midwifery led care unit before joining the community Homebirth Team.</p>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="profile-container">
              <img src="<?php echo get_template_directory_uri() . "/images/julia.png";?>" class="">
              <h4>Dr Julia Bodle</h4>
              <p>Julia is a Consultant Obstetrician in Sheffield. A graduate of Leeds University in 1991, she returned to the city to undertake her research degree and teach at the Medical School. She has published original research in the field of Obstetrics and Gynaecology encompassing laboratory based observation, clinical practice and medical education.</p>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>


<div class="container">
  
  <section class="front-page-featured-thirds">
  </section>
  
  <section class="">
    <div class="row">
      
      <div class="col-md-6">
        <h2>Our section conference</h2>
        <p>This is the second North of England Breech Conference and we will both reviewing evidence to date, as well as exploring the many issues around the holistic care of women who have elected to have a vaginal breech birth.</p>
        <p>This is a multidisciplinary conference supporting women’s choice of birthing a breech baby vaginally. Our speakers are obstetric practitioners (midwives and doctors), managers, legal and a psychologist. We will of course hear from parents and we most definitely want this conference to be interactive with our delegates.</p>
        <p>The Sheffield Breech Team are 2016’s Royal College of Midwives’ winners for Excellence in Maternity Care for our collaborative care for women expecting breech babies. We think this team approach is both sustainable and replicable and is highly supportive of choice and physiological birth!</p>
      </div>
      
      <div class="col-md-6">
        <h2>A great venue in Sheffield</h2>
        <p>This year we are hosting the conference in the <strong>Mundella Building, Collegiete Cresent</strong> in Hallam University's Collegiete campus.</p>
        <p>You can find a map and directions below:</p>
        <a href="https://www.shu.ac.uk/visit-us/how-to-find-us/collegiate-campus-plan" target="_blank">
          <img class="img-responsive" src="<?php echo get_template_directory_uri() . "/images/872shuspacecollegiatemap.jpg";?>">
        </a>
      </div>
      
    </div>
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