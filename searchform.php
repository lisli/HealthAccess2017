<?php
/**
 * Search form template
 *
 * @package Health_Access2017
 */
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="s" class="assistive-text"><?php _e( 'Search', 'health-access2017' ); ?></label>
	<input type="text" class="field" name="s" id="s" placeholder="" />
	<!-- <input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'SEARCH', 'health-access2017' ); ?>" /> -->
	<button type="submit" class="search-submit"><span class="fa fa-search"></span></button>
</form>
