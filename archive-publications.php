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

	<div class="publications-search">
		<h3>Search Publications</h3>
		<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<label for="s" class="assistive-text"><?php _e( 'Search', 'health-access2017' ); ?></label>
			<input type="text" class="field" name="s" id="s" placeholder="" />
			<input type="hidden" name="post_type" value="publications" />
			<!-- <input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'SEARCH', 'health-access2017' ); ?>" /> -->
			<button type="submit" class="search-submit"><span class="fa fa-search"></span></button>
		</form>


		<?php
		  $categories = get_categories('taxonomy=publication-category');
		  $select = "<select name='cat' id='cat' class='postform'>n";
		  $select.= "<option value='-1'>Select category</option>n";
		 
		  foreach($categories as $category){
		    if($category->count > 0){
		        $select.= "<option value='".$category->slug."'>".$category->name."</option>";
		    }
		  }
		 
		  $select.= "</select>";
		 
		  echo $select;
		?>
	 	<!-- I am not totally certain this is the best thing to do, but it works -->
		<script type="text/javascript">
		    var dropdown = document.getElementById("cat");
		    function onCatChange() {
		        if ( dropdown.options[dropdown.selectedIndex].value != -1 ) {
		            location.href = "<?php echo home_url();?>/publication-category/"+dropdown.options[dropdown.selectedIndex].value+"/";
		        }
		    }
		    dropdown.onchange = onCatChange;
		</script>
		
	</div>

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