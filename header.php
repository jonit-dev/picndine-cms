<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PicnDine
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="stylesheet" href="wp-content/themes/picndine-theme/css/style.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'picndine-theme' ); ?></a>
        <div class="header-background">
	<header id="masthead" class="site-header">
	
            <div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$picndine_theme_description = get_bloginfo( 'description', 'display' );
			if ( $picndine_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $picndine_theme_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-primary',
				'menu_id'        => 'primary-menu',
                                'menu_class'     => 'menu menu-primary',
			) );
			?>
		</nav><!-- #site-navigation -->
                <hr>
          
	</header><!-- #masthead -->
        </div>
	<div id="content" class="site-content">
