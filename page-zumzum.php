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
		<main id="main" class="site-main" role="main">
		<div class="zumzum-all">
				<ul class='grid-zumzum'>
					<?php
						$first = true;
						$posts = new WP_Query(array(
							'post_type' => 'zumzum',
							'posts_per_page' => 8,
							'paged' => get_query_var( 'paged' ),
						));

						if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post();
							?>
							<li>
								<div class="content-zumzum">
						            <h2><?php echo $post->post_title ?></h2>
						            <p>Publicado em: <a href="<?= get_permalink() ?>"><?= get_the_date() ?></a></p>
						            <?php echo wp_trim_excerpt(the_content()); ?>
						            <br>
						            <br>
						            <a href="<?= get_permalink() ?>">leia mais</a>
						            <br>
						            <br>
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
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
