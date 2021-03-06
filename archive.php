<?php
/**
 * Main Template File
 *
 * This file is used to display a page when nothing more specific matches a query.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Health_Access2017
 */

get_header(); ?>

<?php mj_wp_breadcrumb( 'ul', 'breadcrumb', 'breadcrumbs', 'current', true ); ?>

<section id="primary" role="main" class="col pull-left s_span_8">

	<?php if ( have_posts() ) : ?>

		<?php get_template_part( 'inc/archive-header' ); ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

		<?php endwhile; ?>

		<?php get_template_part( 'inc/pagination' ); ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>