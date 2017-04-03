<?php
/**
 * Single post template
 *
 * @package Health_Access2017
 */

get_header(); ?>
<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
<section id="primary" class="col pull-left s_span_8">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

		<?php comments_template( '', true ); ?>

	<?php endwhile; // end of the loop. ?>

</section><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>