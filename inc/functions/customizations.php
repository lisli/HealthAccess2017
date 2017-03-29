<?php 
// Remove admin bar for all users
// show_admin_bar( false );

// Move ACF Options menu under Settings
//if( function_exists('acf_add_options_sub_page') )
//{
//    acf_add_options_sub_page(array(
//        'title' => __( 'Site Options', 'health-access2017' ),
//        'parent' => 'options-general.php',
//        'capability' => 'manage_options'
//    ));
//}

// Add TinyMCE buttons that are disabled by default
//function health_access2017_mce_buttons_2($buttons) {	
//	/**
//	 * Add in a core button that's disabled by default
//	 */
//	$buttons[] = 'justify'; // fully justify text
//	$buttons[] = 'hr'; // insert HR
//
//	return $buttons;
//}
//add_filter('mce_buttons_2', 'health_access2017_mce_buttons_2');


// Remove all colors except those custom colors specified from TinyMCE
//function health_access2017_change_mce_options( $init ) {
//	$custom_colors = '"#####1", "Color Name 1", "#####2", "Color Name 2", "#####3", "Color Name 3"';	
//	$init['textcolor_map'] = '['.$custom_colors.']';
//return $init;
//}
//add_filter('tiny_mce_before_init', 'health_access2017_change_mce_options');


// Modify the query on a given template (using conditionals)
//function health_access2017_custom_query($query) {
//    if ($query->is_search) {
//        $query->set('post_type', 'post');
//    }
//    return $query;
//}
//add_filter('pre_get_posts','health_access2017_custom_query');

//Read More Links on Archive Excerpts
function excerpt_read_more( $more ) {
	    return ' [...] <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'health-access2017') . '</a>';
	}
add_filter( 'excerpt_more', 'excerpt_read_more' );
?>