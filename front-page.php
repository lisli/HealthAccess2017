<?php
/**
 * Home Page
 *
 * @package Health_Access2017
 */

get_header(); ?>

<section id="primary" role="main" class="col pull-left s_span_8">

<?php while ( have_posts() ) : the_post(); ?>



	<article id="post-<?php the_ID(); ?>">

		<!-- <img src="<?php the_field('background_image'); ?>"> -->

		<div class="entry-content">
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

		$featHead1 = get_field('featured_item_1_header');
		$featTitle1 = get_field('featured_item_1_title');
		$featImg1 = get_field('featured_item_1_image');
		$featEx1 = get_field('featured_item_1_excerpt');
		$featLink1 = get_field('featured_item_1_link');

		$featHead2 = get_field('featured_item_2_header');
		$featTitle2 = get_field('featured_item_2_title');
		$featImg2 = get_field('featured_item_2_image');
		$featEx2 = get_field('featured_item_2_excerpt');
		$featLink2 = get_field('featured_item_2_link');

		$featHead3 = get_field('featured_item_3_header');
		$featTitle3 = get_field('featured_item_3_title');
		$featImg3 = get_field('featured_item_3_image');
		$featEx3 = get_field('featured_item_3_excerpt');
		$featLink3 = get_field('featured_item_3_link');


	?>

	<div class="featured-items">
		<article>
			<h3><?php echo $featHead1; ?></h3>
			<img class="s_span_5" src="<?php echo $featImg1; ?>" alt="<?php echo $featTitle1; ?>"/>
			<div class="text col s_span_7">
				<h3><a href="<?php echo $featLink1; ?>"><?php echo $featTitle1; ?></a></h3>
				<?php echo $featEx1; ?>
				<a class="read-more" href="<?php echo $featLink1; ?>">Read More</a>
			</div>
		</article>
		<article>
			<h3><?php echo $featHead2; ?></h3>
			<img class="s_span_5" src="<?php echo $featImg2; ?>" alt="<?php echo $featTitle2; ?>"/>
			<div class="text col s_span_7">
				<h3><a href="<?php echo $featLink2; ?>"><?php echo $featTitle2; ?></a></h3>
				<?php echo $featEx2; ?>
				<a class="read-more" href="<?php echo $featLink2; ?>">Read More</a>
			</div>
		</article>
		<article>
			<h3><?php echo $featHead3; ?></h3>
			<img class="s_span_5" src="<?php echo $featImg3; ?>" alt="<?php echo $featTitle3; ?>"/>
			<div class="text col s_span_7">
				<h3><a href="<?php echo $featLink3; ?>"><?php echo $featTitle3; ?></a></h3>
				<?php echo $featEx3; ?>
				<a class="read-more" href="<?php echo $featLink3; ?>">Read More</a>
			</div>
		</article>
	</div>

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
			<a href="<?php echo $link; ?>">Submit Your Story</a>
		</div>
	</article>



<?php endwhile; // end of the loop. ?>

</section><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>