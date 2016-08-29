<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Malungo EU">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	<div class="header">
	    <div class=" cor-scroll home-menu home-menu-fb pure-menu pure-menu-horizontal pure-menu-fixed">
	       <div class="logo-malungo">
	       	<a href="<?php echo get_home_url(); ?>" >
        		<img src="<?=get_template_directory_uri().'/img/LOGO_fb.png' ?>" >
				</img>
            </a>	
	       </div>
	        <ul class="pure-menu-list">
	            <li class="pure-menu-item">
	            	<a href="#" class="pure-menu-link">
	            		<img src="<?=get_template_directory_uri().'/img/ICONES_header_fb_compartilhe.png' ?>" >
						</img>
	            	</a>
	            </li>
	           	<li class="pure-menu-item">
	            	<a href="#" class="pure-menu-link">
	            		<img src="<?=get_template_directory_uri().'/img/ICONES_header_fb_busca.png' ?>" >
						</img>
	            	</a>
	            </li>
	        </ul>
	    </div>
	</div>


	 <div class="full-menu">
	
		<nav id="menu" class="menu">
			
			<header id="masthead" class="site-header" role="banner">
				<img src="<?=get_template_directory_uri().'/img/menu_01.jpg' ?>" ></img>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', '_s' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
		</nav>
	</div>


	<div class="hamburguer pure-menu-fixed">
			<div class="lines-fb line-top"></div>
			<div class="lines-fb line-mid"></div>
			<div class="lines-fb line-bottom"></div>
	</div>



	<div id="content" class="site-content">




