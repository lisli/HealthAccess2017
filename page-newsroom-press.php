<?php
/**
 * Template Name: Newsroom & Press Template
 *
 * 
 *
 * @package Health_Access2017
 */

get_header(); ?>

<?php mj_wp_breadcrumb( 'ul', 'breadcrumb', 'breadcrumbs', 'current', true ); ?>

<section id="primary" role="main" class="col pull-left s_span_8">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php comments_template( '', true ); ?>

		<?php endwhile; // end of the loop. ?>

</section><!-- #primary -->
<div id="secondary" class="col s_span_4" role="complementary">
	<?php dynamic_sidebar('newsroom-publications-sidebar'); ?>
</div>
<?php get_footer(); ?>