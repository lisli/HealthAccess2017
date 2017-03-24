<?php
/**
 * The header template
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Health_Access2017
 */
?>

<!DOCTYPE html>
 
<!--[if lt IE 9]>
<html id="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    
    <!-- favicon & links -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-- stylesheets are enqueued via functions.php -->

    <!-- all other scripts are enqueued via functions.php -->
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/html5shiv.js" type="text/javascript"></script>
    <![endif]-->

    <?php // Lets other plugins and files tie into our theme's <head>:
    wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>
    <div class="top-bar">
        <div class="container">
            <?php dynamic_sidebar('top-bar'); ?>
        </div>
    </div>
	<div id="page">
		<header id="site-header" role="banner" class="row"> 
            <nav class="access top-nav-bar">   
                <?php wp_nav_menu( array( 'theme_location' => 'top-nav' ) ); ?>
                <?php dynamic_sidebar('top-nav-search'); ?>   
            </nav>     
			<a href="<?php echo esc_url( home_url() ); ?>/" class="logo">
				<img class="s_span_6" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png'" alt="<?php bloginfo('name'); ?>">
			</a>
            <?php wp_nav_menu( array( 'theme_location' => 'donate-link' ) ); ?>

			<nav class="access" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'main-nav' ) ); ?>
			</nav><!-- #access -->  
		</header><!-- #branding -->


		<div id="main" class="row">