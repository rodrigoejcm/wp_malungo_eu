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
	    <div class=" cor-scroll home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
	       <div class="logo-malungo">
	       	<a href="<?php echo get_home_url(); ?>" >
        		<img src="<?=get_template_directory_uri().'/img/LOGO_fp.png' ?>" >
				</img>
            </a>	
	       </div>
	        <ul class="pure-menu-list">
	            <li class="pure-menu-item">
	            	<a href="#" class="pure-menu-link">
	            		<img src="<?=get_template_directory_uri().'/img/colabore.png' ?>" >
						</img>
	            	</a>
	            </li>
	           	<li class="pure-menu-item">
	            	<a href="#" class="pure-menu-link">
	            		<img src="<?=get_template_directory_uri().'/img/busca.png' ?>" >
						</img>
	            	</a>
	            </li>
	        </ul>
	    </div>
	</div>


	 <div class="full-menu">
	
		<nav id="menu" class="menu">
			<div class="container">
				<div class="row">
					<header id="masthead" class="site-header img-full" role="banner">
						
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav><!-- #site-navigation -->
					</header><!-- #masthead -->	
				</div>
			</div>
		</nav>
	</div>


	<div class="hamburguer pure-menu-fixed">
			<div class="lines line-top"></div>
			<div class="lines line-mid"></div>
			<div class="lines line-bottom"></div>
	</div>



	<div id="content" class="site-content">




