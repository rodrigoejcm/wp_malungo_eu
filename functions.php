<?php
/**
 * _s functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s
 */

if ( ! function_exists( '_s_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _s_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _s, use a find and replace
	 * to change '_s' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( '_s', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', '_s' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', '_s_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _s_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_s_content_width', 640 );
}
add_action( 'after_setup_theme', '_s_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _s_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', '_s' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', '_s' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', '_s_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _s_scripts() {

	global $template;

	wp_enqueue_style( '_s-style', get_stylesheet_uri() );

	wp_enqueue_style( 'malungo-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');

	wp_enqueue_style( 's-purecss-framework', 'http://yui.yahooapis.com/pure/0.6.0/menus-min.css');


	wp_enqueue_script( '_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	if (!is_admin() && $GLOBALS['pagenow'] != 'wp-login.php') {
        wp_deregister_script('malungo-jquery-js');
        wp_register_script('malungo-jquery-js', 'https://code.jquery.com/jquery-3.1.0.min.js', false, '3.1.0');
        wp_enqueue_script('malungo-jquery-js');

       
    }


	if (!is_admin() && $GLOBALS['pagenow'] != 'wp-login.php') {
        wp_deregister_script('malungo-jquery-ui-js');
        wp_register_script('malungo-jquery-ui-js', 'https://code.jquery.com/ui/1.12.0/jquery-ui.js', false, '3.1.0');
        wp_enqueue_script('malungo-jquery-ui-js');
    }


   	if ( trim(basename( $template )) == 'single-artista.php') {
   		wp_deregister_script('malungo-galleria-js');
        wp_register_script('malungo-galleria-js', 'http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js', false, '3.1.0');
        wp_enqueue_script('malungo-galleria-js');
        wp_enqueue_style( 'malungo-galleria-css', 'http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css');
/*
        wp_deregister_script('malungo-galleria-run-js');
        wp_register_script('malungo-galleria-run-js', get_template_directory_uri() . '/js/galleria-run.js', false, '3.1.0', true);
        wp_enqueue_script('malungo-galleria-run-js');*/
	}

	wp_enqueue_script( '_s-malungo-hamburguer', get_template_directory_uri() . '/js/malungo.js', array(), '20151215', true );

	wp_enqueue_script( '_s-malungo-jquery', get_template_directory_uri() . '/js/malungo_jquery.js', array(), '20151215', true );

	wp_enqueue_script( '_s-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'malungo-font-typekit', 'https://use.typekit.net/xuw0ghm.js'); 	

	wp_enqueue_script( 'malungo-font-typekit-load', get_template_directory_uri() . '/js/typekit-load.js', array(), '20151215', false );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );

/**
 * Define os parametros de URL
 */

function add_query_vars_filter( $vars ){
  $vars[] = "categoria_artista";
  return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );

/**
 * Remove a opcao de categoria do meunu admin para posts
 */


add_action('admin_menu', 'my_remove_sub_menus');

function my_remove_sub_menus() {
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=category');
}

function remove_my_post_metaboxes() {
  remove_meta_box( 'categorydiv','post','normal' ); // Categories Metabox
  
}
add_action('admin_menu','remove_my_post_metaboxes');


function src_img($name) {
    return get_template_directory_uri()."/img/$name";
}

function get_svg($name, $content = false) {
    $file = src_img("$name.svg");
    return $content? file_get_contents($file) : $file;
}

function get_imagem_categoria_artista( $categoria , $content = false){
    return get_svg("artistas-$categoria-icon", $content);
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// temporariamente removendo barra superior para debug
add_filter('show_admin_bar', '__return_false');

register_nav_menu('sobre', "Itens de menu abaixo de 'sobre'");
register_nav_menu('panorama-africa',
                  "Itens de menu abaixo de 'Panorama África'");
register_nav_menu('blog', "Itens de menu abaixo de 'blog'");
register_nav_menu('exposicao', "Itens de menu abaixo de 'exposição'");
