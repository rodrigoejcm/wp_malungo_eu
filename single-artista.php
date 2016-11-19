<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */


get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				/*url da Featured image do artista*/
				$thumb_id = get_post_thumbnail_id();
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
				$thumb_url = $thumb_url_array[0];

				/*Nome Categoria - Para uma lista de categorias, usar the_category*/	
				$categoria = get_the_category()[0]->name;
				
				/*Imagem da categoria*/
				$categorias_do_artista = get_the_terms( get_the_ID(), 'category');
				$categoria_principal = array_pop($categorias_do_artista);
				$cat_string = preg_replace("/-/", "", $categoria_principal->slug);
				$categoria_imagem = get_imagem_categoria_artista($cat_string, true);
			?>

			<div class="splash-container-artista" style="background-image: url('<?=$thumb_url;?>')">
				<div class="splash-container-artista-opacity">
				</div>
			    <div class="splash-artista splash-artista-<?= $cat_string ?>">
			    	<a class="link-categoria"
			    		href='<?=get_site_url() ."/artistas/?categoria_artista=$categoria_principal->slug" ?>'>
				    	<?= $categoria_imagem ?>
			    	<br>
			    	<br>
			    		<span class="title-categoria splash-subhead-artista-categoria title-artista-<?= $cat_string ?>">
			    			<?= esc_html($categoria) ; ?>
		    			</span> 
			    	</a>
			    	<h1 class="splash-head-artista title-artista-<?= $cat_string ?>">
			    		<?= the_title(); ?>
			    	</h1>
			    	<div class="splash-subhead-artista">
			    		———<?php
			          		$pais_artista  = get_field('pais');

							if( $pais_artista ){
								foreach( $pais_artista as $pais){
									echo get_the_title( $pais->ID );
								} 

							}
						?>———
						<p class="data_publicacao">Publicado em: <?php the_modified_date(); ?></p>
			    	</div>
			    	<div class="arrow-down">
			    		<!-- triangulo equilatero,
			    			formando um V com 5 de largura -->
			    		<svg class="svg-arrow" width="50" height="20">
							<polygon
							points="0 0, 3 0, 25 17, 47 0, 50 0, 25 20">
							</polygon>
						</svg>
			    	</div>
			    </div>
			</div>

			<div class="content-wrapper-artista content-artista content-artista-<?= $cat_string ?>">
				<div class="container">
					<br>
					<br>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="descricao-artistas" >
								<?php echo apply_filters('the_content', $post->post_content); ?>
								<?php
									$has_rede = false;
									$redes = array(
								               "blog",
								               "facebook",
								               "flickr",
								               "instagram",
								               "site",
								               "soundcloud",
								               "twitter",
								               "vimeo",
								               "youtube",
							                );
									foreach($redes as $name){
										$rede = get_field($name, $post->ID);
										if($rede){
											$has_rede = true;
											break;
										}
									}
									if($has_rede){
										?>
										<h2 class="explore-mais">Explore mais</h2>
										<br>
										<?php
									}
								?>
							</div>
						</div>
					</div>
					<ul class="social col-md-8 col-md-offset-2">
						<?php
						foreach($redes as $name){
							$rede = get_field($name, $post->ID);
							if($rede){
								?>
								<li>
									<a href="<?=$rede?>" class="link-<?= $cat_string?>">
										<?=get_icone_social_artista($name, true)?>
									</a>
								</li>
								<?php
							}
						}
						?>
					</ul>
					<?php
					$galeria = get_field('galeria', $post->ID);
					if($galeria){
					?>
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div 	class="fotorama"
									data-allowfullscreen="true"
							 		data-nav="thumbs" >
								<?php 
									$acf_photo_gallery_attachments = explode(',', $galeria);
									foreach($acf_photo_gallery_attachments as $id):
										
									/*$img = wp_get_attachment_image($image);*/
									$imagem_infos = wp_prepare_attachment_for_js( $id );
									
								?>

									<img src=" <?php echo $imagem_infos['url']; ?> " />

								<?php endforeach; ?>
							</div>

							
						</div>
					</div>
				<?php				} ?>
				</div>
			</div>

			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
