<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area malungo-post">
		<main id="main" class="site-main" role="main">
			<div class="cabecalho-mafua">
				<img src="<?= src_img('mafua-banner.jpg')?>">
				<?= get_svg('titulo-mafuademalungos', true) ?>
			</div>
			<div class="mafua-content">
				<?php
				while ( have_posts() ) : the_post();

					the_content();

				endwhile; // End of the loop.
				?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
