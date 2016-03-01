<?php
/**
 * The template for displaying all single posts.
 *
 * @package sth
 */

get_header(); ?>

	<div id="primary" class="container">
    <div class="row">
      <main id="main" class="col-md-8" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template-parts/content', 'single' ); ?>

          <?php the_post_navigation(); ?>

        <?php endwhile; // End of the loop. ?>

        </main><!-- #main .container -->
      
      <aside class="col-md-4">
        <?php get_sidebar(); ?>
      </aside>
    </div>
	</div><!-- #primary-->

<?php get_footer(); ?>