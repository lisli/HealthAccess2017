<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Health_Access2017
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title s_span_8"><?php the_title(); ?></h1>
		<?php dynamic_sidebar('page-header-image'); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php if( have_rows('legislation_by_year') ): ?>
		<ul class="legislation-list">
		    <?php while ( have_rows('legislation_by_year') ) : the_row();
				$header = get_sub_field('early_legislation_header');
				$content = get_sub_field('early_legislation_content');
			?>
				<li class="legislation-by-year">
		       		<h2 class="early-legislation-header"><?php echo $header; ?></h2>
		      		<div class="early-legislation-content">
			      	 	<?php echo $content; ?>
			      	 </div>
		      	</li>

		    <?php endwhile; ?>
		</ul>

		<?php else :

		    // no rows found

		endif;

		?>
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'health-access2017' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
