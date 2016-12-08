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
	<script type="text/javascript">
	$('.cor-scroll').css("background-color", "#303331");
	zumzum = true;
	</script>
	<div id="primary" class="content-area container-zumzum">
		<main id="main" class="site-main main-zumzum" role="main">
		<img src="<?=get_template_directory_uri().
			'/img/titulo-zumzum.svg'?>"
			class="img-zumzum"/>
		<p class="burburinho">Fala tu! Bem-vindo ao nosso burburinho.</p>
		<div class="zumzum-all">
				<div class="zumzum-posts-pages">
					<ul class='grid-zumzum'>
						<?php
							$first = true;
							$posts = new WP_Query(array(
								'post_type' => 'zumzum',
								'posts_per_page' => 8,
								'paged' => get_query_var( 'paged' ),
							));

							if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post();
								$thumb_id = get_post_thumbnail_id();
								$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
								$thumb_url = $thumb_url_array[0];
								$autor = get_field('__autor');
								?>
								<li>
									<div class="content-zumzum">
							            <h2><?php echo $post->post_title ?></h2>
							            <p class="post-meta-data">
							            	<a href="authorlink" class="authorlink hover-roxo__">Por <?= $autor->post_title ?></a>
							            	<span class="data-publicacao"><?= get_the_date() ?></span>
							            </p>
							            <img src="<?= $thumb_url ?>" class="featured-img">

							            <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
							            <br>
							            <br>
							            <a href="<?= get_permalink() ?>" class="veja-mais">Continue o papo</a>
							            <br>
							            <br>
							            <!-- 
							            <h3>Tags</h3>
							            <?php
										if(get_the_tag_list()) {
										    echo get_the_tag_list('<ul class="tags-content"><li>','</li><li>','</li></ul>');
										}
										?>
										 -->
										<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { 
										    ADDTOANY_SHARE_SAVE_KIT( array( 
										        'buttons' => array( 'facebook', 'twitter', 'google_plus'),
										    ) );
										} ?>
								    </div>
								</li>
							<?php endwhile; else : ?>
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
				<div class="zumzum-sidebar">
					<h3>Destaque</h3>
					<ul class="lista-destaques">
						<?php
							$destaques = new WP_Query(array(
		                        'post_type' => array(
		                                             'post',
		                                             'malunguice',
		                                             'zumzum'
	                                        ),
								'posts_per_page' => 10,
								'meta_key' => 'destaque',
								'meta_value' => 's',
								'orderby' => 'ordem_do_destaque',
								'paged' => get_query_var( 'paged' ),
							));
			            	if ( $destaques->have_posts() ) : while ( $destaques->have_posts() ) : $destaques->the_post();
									$thumb_id = get_post_thumbnail_id();
									$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
									$thumb_url = $thumb_url_array[0];
						?>
						<li><a href="<?= get_permalink() ?>" class="link-post">
			               	<h4 class="titulo hover-roxo"><?php the_title(); ?></h4>
			               	<a href="authorlink" class="authorlink hover-roxo">Por <?= get_the_author() ?></a>
			            	<p class="data-publicacao"><?= get_the_date() ?></p>
		               	</a></li>
						<?php endwhile; endif; ?>
					</ul>
					<!-- <section class="tags">
						<h3>Dê uma volta</h3>
						<ul class="tags-list">
							<?php
							$tags = get_tags();
							foreach ( (array) $tags as $tag ) {
								?>
								<li>
									<a href="<?=get_tag_link ($tag->term_id)?>"
										class="tag-link">
										<?=$tag->name?>
									</a>
								</li>
								<?php
							}
							?>
							<li>
								<a href="asd" class="tag-link">
									tag da hora
								</a>
							</li>
						</ul>
					</section> -->
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
