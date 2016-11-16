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
			<h1>Zumzum</h1>
				<ul class='grid-malunguices'>
					<?php
						$first = true;
						$posts = new WP_Query(array(
							'post_type' => 'zumzum',
							'posts_per_page' => 12,
							'paged' => get_query_var( 'paged' ),
						));


						if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post();
							$thumb_id = get_post_thumbnail_id();
							$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
							$thumb_url = $thumb_url_array[0];
							if($first){
								$first = false;
								?>
								<div id="primary" class="content-area content-zumzum">
							        <main id="main" class="site-main" role="main">
							            <h1><?php echo $post->post_title ?></h1>
							            <?php echo apply_filters('the_content', $post->post_content); ?>
							        </main>
							    </div>
							    <h2>Mais posts</h2>
							    <?php
							} else {
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
						<?php } endwhile; else : ?>
							<h2> Nenhum post ainda. </h2>
						<?php endif; ?>
				</ul>
				<ul class="pagination">
					<li><?php
						previous_posts_link( '<<' );
					?></li>
					<li><?php
						next_posts_link( '>>', $posts->max_num_pages );
					?></li>
				</ul>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
