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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="malunguices-all">
			<h1>
				<img src="<?=get_template_directory_uri().
						'/img/titulo-mafuademalungos.svg'?>"
					alt="MALUNGUICES"
					/>
			</h1>
				<ul class='grid-malunguices'>
					<?php

						$posts = get_posts(array(
							'post_type' => 'malunguice',
						));


						if($posts)
						{
							foreach($posts as $post)
							{
								$thumb_id = get_post_thumbnail_id();
								$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
								$thumb_url = $thumb_url_array[0];
							?>
								<li
									<?php
											if(has_post_thumbnail($post)) {
											?>
												style="background: url('<?= $thumb_url ?>');"
										<?php }?>
								> 
									<a  href="<?=get_permalink();?>">
											<h2><?php the_title();?></h2>
									</a>
								</li>
							<?php
							}
						}
						else{
							echo "<h2> Nenhum malunguice ainda. </h2>";
						}
				?>
				</ul>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
