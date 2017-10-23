<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Health_Access2017
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title s_span_12 m_span_8"><?php the_title(); ?></h1>
		<?php dynamic_sidebar('page-header-image'); ?>
	</header><!-- .entry-header -->
<div style="clear:both"></div>
	<div class="entry-content">

		<?php 
		if( has_post_thumbnail() ):
			    echo get_the_post_thumbnail();
			endif; 
		the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'health-access2017' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
