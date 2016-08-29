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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
										$thumb_id = get_post_thumbnail_id();
										$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
										$thumb_url = $thumb_url_array[0];
										
			?>

			<div class="splash-container-pais" style="background-image: url('<?=$thumb_url;?>')" >
				<div class="splash-container-pais-opacity">
				</div>
			    <div class="splash-pais">
			    	<div class="splash-head-pais">
			     		<?= the_title(); ?>	
			    	</div>
			    </div>
			</div>

			<div class="content-wrapper-pais">
				<div class="container">
					<br>
					<br>
					<div class="row">
						<div class="col-md-5 col-md-offset-1">
							<img class="img-cultura" src="<?php echo get_field('imagem_mapa_completo')['url']; ?>" alt="<?php echo get_field('imagem_mapa_completo')['alt']; ?>" >
							</img>
						</div>
						<div class="col-md-5">
							<div class="descricao-pais">
								<div class="informacoes-pais">
									<img class="bandeira" src="<?php echo get_field('bandeira')['url']; ?>" alt="<?php echo get_field('bandeira')['alt']; ?>" >
									</img>
									<br><br>			
								</div>
								<div class="informacoes-pais">
									<b> Língua </b>
									<p> <?= get_field('lingua'); ?> </p>	
								</div>
								<div class="informacoes-pais">
									<b> Capital </b>
									<p> <?= get_field('capital'); ?> </p>	
								</div>
								<div class="informacoes-pais">
									<b> Domínio na web </b>
									<p> <?= get_field('dominio_da_web'); ?> </p>	
								</div>
					          	<div class="informacoes-pais">
									<b> Religião </b>
									<p> <?= get_field('religiao'); ?> </p>	
								</div>
								<div class="informacoes-pais">
									<b> Etnias </b>
									<p> <?= get_field('etnia'); ?> </p>	
								</div>
								<div class="informacoes-pais">
									<b> Governo </b>
									<p> <?= get_field('governo'); ?> </p>	
								</div>
								<div class="informacoes-pais">
									<b> Independência </b>
									<p> <?= get_field('independencia'); ?> </p>	
								</div>
								<div class="informacoes-pais">
									<b> Expectativa de Vida </b>
									<p> <?= get_field('expectativa_de_vida'); ?> </p>	
								</div>
								
							</div>
						</div>
					</div>
						<br><br><br>
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<?php echo apply_filters('the_content', $post->post_content); ?>
							</div>
						</div>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
