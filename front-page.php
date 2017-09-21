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
		$shareStoryImg = get_field('share_your_story_image');
		$shareStoryTRText = get_field('share_your_story_top_right_text');
		$shareStoryBRText = get_field('share_your_story_bottom_right_text');
		$shareStoryLink = get_field('share_your_story_link');

		$featHead1 = get_field('featured_item_1_header');
		$featTitle1 = get_field('featured_item_1_title');
		$featImg1 = get_field('featured_item_1_image');
		$featEx1 = get_field('featured_item_1_excerpt');
		$featLink1 = get_field('featured_item_1_link');
		$featExtra1 = get_field('featured_item_1_extra');

		$featHead2 = get_field('featured_item_2_header');
		$featTitle2 = get_field('featured_item_2_title');
		$featImg2 = get_field('featured_item_2_image');
		$featEx2 = get_field('featured_item_2_excerpt');
		$featLink2 = get_field('featured_item_2_link');
        $featExtra2 = get_field('featured_item_2_extra');

		$featHead3 = get_field('featured_item_3_header');
		$featTitle3 = get_field('featured_item_3_title');
		$featImg3 = get_field('featured_item_3_image');
		$featEx3 = get_field('featured_item_3_excerpt');
		$featLink3 = get_field('featured_item_3_link');
		$featExtra3 = get_field('featured_item_3_extra');


	?>

	<div class="featured-items">
		<article><div class="featwrap">
			<!--<h3><?php echo $featHead1; ?></h3>-->
			<img class="s_span_5" src="<?php echo $featImg1; ?>" alt="<?php echo $featTitle1; ?>"/>
			<div class="text col s_span_7">
				<h3><a href="<?php echo $featLink1; ?>"><?php echo $featTitle1; ?></a></h3>
				<!--<p><?php echo $featEx1; ?></p>
				<a class="read-more" href="<?php echo $featLink1; ?>">Read More</a>-->
       				<?php echo $featExtra1; ?>
			</div><div style="clear:both"></div> 
			</div>
		</article>
		<article><div class="featwrap">
			<!--<h3><?php echo $featHead2; ?></h3>-->
			<img class="s_span_5" src="<?php echo $featImg2; ?>" alt="<?php echo $featTitle2; ?>"/>
			<div class="text col s_span_7">
				<h3><a href="<?php echo $featLink2; ?>"><?php echo $featTitle2; ?></a></h3>
				<!--<?php echo $featEx2; ?>
				<a href="<?php echo $featLink2; ?>">Read More</a>-->
				<?php echo $featExtra2; ?>
			</div><div style="clear:both"></div> 
			</div>
		</article>
		<article><div class="featwrap">
			<!--<h3><?php echo $featHead3; ?></h3>-->
			<img class="s_span_5" src="<?php echo $featImg3; ?>" alt="<?php echo $featTitle3; ?>"/>
			<div class="text col s_span_7">
				<h3><a href="<?php echo $featLink3; ?>"><?php echo $featTitle3; ?></a></h3>
				<!--<?php echo $featEx3; ?>
				<a class="read-more" href="<?php echo $featLink3; ?>">Read More</a>-->
   				<?php echo $featExtra3; ?>
                        </div><div style="clear:both"></div> 
			</div>
		</article>      
<div style="clear:both"></div> 
	</div>

	 <article class="share-story row">
		<a href="<?php echo $shareStoryLink; ?>"><img class="col s_span_6" src="<?php echo $shareStoryImg; ?>" alt="Share Your Story"/></a>

		<div class="submit-yours col s_span_6">
			<div class="top"><?php echo $shareStoryTRText; ?></div>
			<div class="bottom"><a href="<?php echo $shareStoryLink; ?>"><?php echo $shareStoryBRText; ?></a></div>
		</div>
	</article>



<?php endwhile; // end of the loop. ?>

</section><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>