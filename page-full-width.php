<?php
/**
 * Template Name: Full Width Page
 *
 * @package Health_Access2017
 */

get_header(); ?>

<?php mj_wp_breadcrumb( 'ul', 'breadcrumb', 'breadcrumbs', 'current', true ); ?>

<section id="primary" class="row" role="main">

	<?php while ( have_posts() ) : the_post(); ?>
	
		<?php get_template_part( 'content', 'page' ); ?>
	
	<?php endwhile; // end of the loop. ?>

</section><!-- #primary -->

<?php get_footer(); ?>