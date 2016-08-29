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

get_header('paises'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="paises-lista">
			<h1>Países</h1>
			<p>Explore a morada de nossos Malungos...</p>

			
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<ul>


						<?php

							$posts = get_posts(array(
								'numberposts' => -1,
								'post_type' => 'pais',
								'order' => 'ASC',
								'orderby' => 'title'
							));


							if($posts)
							{
								foreach($posts as $post)
								{
								?>
									<li> 
										<?php
											$thumb_id = get_post_thumbnail_id();
											$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
											$thumb_url = $thumb_url_array[0];
										?>



										<a  href="<?=get_permalink();?>">
											<div class="box-pais">
												<img src="<?php echo get_field('imagem_mapa')['url']; ?>" >
												</img>
												<p><?php the_title();?></p>
											</div>
										</a>
									</li>
								<?php
								}
							}
					?>

					</ul>
				</div>

			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
