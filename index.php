<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<div class="splash-container">
				<div id="carousel-home" class="carousel slide"
					data-interval="6000"
					data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-home" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-home" data-slide-to="1"></li>
						<li data-target="#carousel-home" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
						  <img src="<?= get_template_directory_uri()
						  			.'/img/home-img01-banner.jpg' ?>"
						  			alt="Slide 1">
							  <div class="carousel-caption">
							  	foto por Tete Kitissou
							  </div>
						</div>
						<div class="item">
						  <img src="<?= get_template_directory_uri()
						  			.'/img/home-img02-banner.jpg' ?>"
						  			alt="Slide 2">
							  <div class="carousel-caption">
							  	foto por: Leandro Aragonez
							  </div>
						</div>
						<div class="item">
						  <img src="<?= get_template_directory_uri()
						  			.'/img/home-img03-banner.jpg' ?>"
						  			alt="Slide 3">
							  <div class="carousel-caption">
							  	foto por Tete Kitissou
							  </div>
						</div>
					</div>
				</div>
			    <div class="splash splash-home">
			    	<img class="img-yaon" src="<?=get_template_directory_uri().'/img/Simbolobannerhome.png' ?>" />
					</img>
					<img class="img-logo-grande active" src="<?=get_template_directory_uri().'/img/malungo-logo.svg' ?>"/>
					<img class="img-cultura" src="<?=get_template_directory_uri().'/img/Culturaemmovimento.png' ?>" />
					<br><br>
			    	<!-- <div class="splash-head">VEM BRINCÁ MAIS EU MANO MEU!</div> -->
			    	<div class="splash-subhead maior" style="font-weight:bold;">Vem brincá mais eu, mano meu!</div>
			    	<br>
			    	<div class="splash-subhead menor">
			    		Em terreiro de Malungo Eu cabe você, eu e o seu vizinho.
			    		<br>
			    		Fazemos do longe perto, do tempo agora e despertamos malungos por aí.
			    		<br>
			    		<br>
			    		Vem pra roda, contá a sua história!
			    	</div>
			    </div>
			</div>


			<div class="content-wrapper">
		    	<div class="col-md-12 header-center">
	               <h1 class="header-home">ENCONTROS COM ÁFRICA: ENTRE LÁ E CÁ</h1>
	            </div>
				<ul class="home-noticias">
	            <?php
	            	$noticias = new WP_Query(array(
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
	            	if ( $noticias->have_posts() ) : while ( $noticias->have_posts() ) : $noticias->the_post();
							$thumb_id = get_post_thumbnail_id();
							$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
							$thumb_url = $thumb_url_array[0];
	            ?>
					<li class="home-post">
	               		<?php if(has_post_thumbnail($noticia)) { ?>
	               				<img src="<?=$thumb_url ?>" />
						<?php
							}
							$categoria = get_the_category()[0];
							$cat_string = preg_replace('/-/', "", $categoria->slug);
							$cat_string = empty($cat_string)? "cinza" : $cat_string;
						?>
						<a href="<?= get_permalink() ?>"
							class="link-noticia hover-<?=$cat_string?>">
			            	<h3 class="categoria cor-<?=$cat_string?>">
			            		<?= $categoria->name ?>
			            	</h3>
			               	<h2 class="titulo"><?php the_title(); ?></h2>
			               	<p class="resumo">
			               		<?php $post_text = wp_strip_all_tags(get_the_content()); ?>
			               		<?= substr($post_text, 0, 420) ?>
			               		<span class="reticencias
			               					reticencias-<?=$cat_string?>">
			               		 	<?= (strlen($post_text)>=420? '...':'')?>
			               		</span>
			               	</p>
		               	</a>
					</li>
		               	<?php endwhile; else : ?>
							<h2> Nenhum post em destaque ainda. Volte mais tarde. </h2>
						<?php endif; ?>
	            </ul>
	            <ul class="pagination">
					<li><?php
						previous_posts_link( '<<' );
					?></li>
					<li><?php
						next_posts_link( '>>', $noticias->max_num_pages );
					?></li>
				</ul>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php
/*get_sidebar();*/
get_footer();
