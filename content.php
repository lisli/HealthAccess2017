<?php
/**
 * The default template for displaying content
 *
 * @package Health_Access2017
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'health-access2017' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<span class="entry-author">By 
			<?php if ( function_exists( 'coauthors_posts_links' ) ) {
			    coauthors();
			} else {
			    the_author();
			} ?>
		</span>
		<span class="entry-date"><?php echo get_the_date(); ?></span>
	</header><!-- .entry-header -->
<div style="clear:both"></div>

	<div class="entry-content">
		<?php if ( is_home () || is_category() || is_archive() ) {
			if( has_post_thumbnail() ):
			    echo get_the_post_thumbnail();
			endif; 
		    the_excerpt('');
		} else {
			if( has_post_thumbnail() ):
			    echo get_the_post_thumbnail();
			endif; 
			the_content(); 
		} ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'health-access2017' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		
		<?php the_tags( '<div class="post-tags">' . __( 'Tagged: ', 'health-access2017' ) , ', ', '</div>' ); ?>
		
		<div class="comments-link">
			<?php comments_popup_link( 
				 __( 'Leave a comment', 'health-access2017' ), 
				 __( '1 comment', 'health-access2017' ), 
				 __( '% comments', 'health-access2017' ) ); 
			?>
		</div>
	</footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->