<?php
/**
 * Home Page
 *
 * @package Health_Access2017
 */

get_header(); ?>

<section id="primary" role="main" class="col pull-left span_8">

<?php while ( have_posts() ) : the_post(); ?>



	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->
		
		<div class="entry-content" style="background-image: url(<?php the_field('background_image'); ?>);">
			FRONT PAGE TEMPLATE
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'health-access2017' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->

	<?php 	
		$quote = get_field('quote');
		$quoteName = get_field('name');
		$rightHeader = get_field('header_right');
		$rightContent = get_field('content_right');
		$submitLink = get_field('submit_link');

	?>

	

<?php endwhile; // end of the loop. ?>

</section><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>