<?php
/**
 * Archive Publications Template
 *
 * 
 *
 * @package Health_Access2017
 */

get_header(); ?>
<div class="breadcrumb"><?php get_breadcrumb(); ?></div>

<section id="primary" role="main" class="col pull-left s_span_8">

	<?php if ( have_posts() ) : ?>

		<?php //get_template_part( 'inc/archive-header' ); ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content-publications', get_post_format() ); ?>

		<?php endwhile; ?>

		<?php get_template_part( 'inc/pagination' ); ?>

	<?php else : ?>

		<?php get_template_part( 'content-publications', 'none' ); ?>

	<?php endif; ?>

</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>