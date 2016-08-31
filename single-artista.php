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
										$categoria_image = get_field('icone', $categoria_principal);
										$estilo_cor_texto_categoria = "color: " . get_field('cor', $categoria_principal) . ";";
										
			?>

			<div class="splash-container-artista" style="background-image: url('<?=$thumb_url;?>')">
				<div class="splash-container-artista-opacity">
				</div>
			    <div class="splash-artista">
			    	<img  style="height:150px;" src="<?= $categoria_image['url']; ?>" >
					</img>
			    	<div class="splash-subhead-artista-categoria" style="<?= $estilo_cor_texto_categoria ;?>">
			    		<?= esc_html($categoria) ; ?>

			    	</div>
			    	<div class="splash-head-artista">
			    		<?= the_title(); ?>
			    	</div>
			    	<div class="splash-subhead-artista">
			    		<?php
			          		$pais_artista  = get_field('pais');

							if( $pais_artista ){
								foreach( $pais_artista as $pais){
									echo get_the_title( $pais->ID );
								} 

							}
						?>
			    	</div>
			    </div>
			</div>


			<div class="content-wrapper-artista">
				<div class="container">
					<br>
					<br>
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="descricao-artistas">
								<?php echo apply_filters('the_content', $post->post_content); ?>
							</div>
						</div>
						<div class="col-md-3"></div>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
