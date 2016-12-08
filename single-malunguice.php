<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header(); 

/*while ( have_posts() ) {*/
?>

	<div id="primary" class="content-area content-malunguice">
		<main id="main" class="site-main" role="main">
			<h1><?php echo $post->post_title ?></h1>
			<?php echo apply_filters('the_content', $post->post_content); ?>
            <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { 
                ADDTOANY_SHARE_SAVE_KIT( array( 
                    'buttons' => array( 'facebook', 'twitter', 'google_plus'),
                ) );
            }
            $autor = get_field('__autor');
            ?>
            <div class="content-autor">
                <h3><?= $autor->post_title ?></h3>
                <?php echo apply_filters('the_content', $autor->post_content); ?>
            </div>
		</main><!-- #main -->
	</div>
<?php

get_footer();
