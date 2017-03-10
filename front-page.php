<?php
/**
 * Home Page
 *
 * @package Health_Access2017
 */

get_header(); ?>

<section id="primary" role="main" class="col pull-left s_span_8">

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

	<article class="testimonial">
		<div class="quote s_span_7">
			<div class="quote-inner">
				<?php echo $quote; ?>
				<?php echo $quoteName; ?>
			</div>
		</div>
		<div class="submit-yours col s_span_5">
			<h3><?php echo $rightHeader; ?></h3>
			<?php echo $rightContent; ?>
			<a href="<?php echo $link; ?>">Submit</a>
		</div>
	</article>



<?php endwhile; // end of the loop. ?>

</section><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>