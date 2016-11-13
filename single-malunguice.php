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
		</main><!-- #main -->
	</div>#primary

<?php

get_footer();
