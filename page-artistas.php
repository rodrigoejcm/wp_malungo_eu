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


$categoria =  get_query_var( 'categoria_artista', 1 ); 


/*Imagem da categoria*/
$categorias_do_artista = get_category_by_slug( $categoria );

$estilo_cor_box_categoria = "background-color: "
                            .get_field('cor', $categorias_do_artista) . ";";
$estilo_cor_texto_categoria = "color: "
                            .get_field('cor', $categorias_do_artista) . ";";

$cat_string = preg_replace('/-/', "", $categoria);
$imagem = get_imagem_categoria_artista($cat_string, true);

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="artistas">
			<h1>
                <a href="<?= site_url().'/categoria-artistas' ?>">
                	<img src="<?=get_template_directory_uri().
                        '/img/titulo-artes.svg'?>"
                    alt="ARTES"
                    />
                </a>
            </h1>
            <ul class="menu-categorias">
            	<li>
            		<a  class="link-artesvisuais <?php
            				if($cat_string=='artesvisuais') echo "active";
        				?>"
            	 href="<?=get_site_url() .'/artistas/?categoria_artista=artes-visuais' ?>">
						<span>Artes Visuais</span>
					</a>
				</li>
				
			
				<li>
					<a  class="link-audiovisual <?php
							if($cat_string=='audiovisual') echo "active";
						?>"
				 href="<?=get_site_url() .'/artistas/?categoria_artista=audiovisual' ?>">
						<span>Audiovisual</span>
					</a>
				</li>
				<li>
					<a class="link-danca <?php
							if($cat_string=='danca') echo "active";
						?>"
				 href="<?=get_site_url() .'/artistas/?categoria_artista=danca' ?>">
						<span>Danca</span>
					</a>
				</li>
				<li>
					<a class="link-literatura <?php
							if($cat_string=='literatura') echo "active";
						?>"
				 href="<?=get_site_url() .'/artistas/?categoria_artista=literatura' ?>">
						<span>Literatura</span>
					</a>
				</li>
				<li>
					<a class="link-moda <?php
							if($cat_string=='moda') echo "active";
						?>"
				 href="<?=get_site_url() .'/artistas/?categoria_artista=moda' ?>">
						<span>Moda</span>
					</a>
				</li>
				<li>
					<a class="link-musica <?php
							if($cat_string=='musica') echo "active";
						?>"
				 href="<?=get_site_url() .'/artistas/?categoria_artista=musica' ?>">
						<span>Musica</span>
					</a>
				</li>
				<li>
					<a class="link-teatro <?php
							if($cat_string=='teatro') echo "active";
						?>"
				 href="<?=get_site_url() .'/artistas/?categoria_artista=teatro' ?>">
						<span>Teatro</span>
					</a>
				</li>
            </ul>
			<section id="main">
	    		<div id="content" class="collection"><section id="collection">
					<ul class="projects-list">
			    		<li class="li-img-categoria">
			      			<?= $imagem ?>
			    		</li>

						<?php

								$posts = get_posts(array(
									'numberposts' => -1 ,
									'post_type' => 'artista',
									'category_name'  => $categoria
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
											/*
											* O prazo está MUITO apertado.
											* seja eu ou outra pessoa, eu peço
											* desculpas já de adianto pelo pecado
											* capital que você está prestes a ler
											*/
										?>

									<a href="<?=get_permalink($post->ID)?>"
										class="link-artista link-artista-<?=$post->ID?>">
										<style type="text/css">
											.link-artista-<?= $post->ID ?>:before{
												background: url("<?=$thumb_url?>");
											}
										</style>
									        <section class="box <?= 'box-'.$cat_string ?>" 
									        	style="<?= $estilo_cor_box_categoria; ?>">
									          <h3><?php the_title(); ?></h3>
									          <p class="pais">
									          	
									          		<?php
										          		$vari  = get_field('pais');

														if( $vari ){
															foreach( $vari as $pais){
																echo get_the_title( $pais->ID );
															} 

														}
													?>
									          </p>
									          <p class="descricao"><?php the_field('breve_descricao'); ?></p>
									        </section>
									      </a>
										</li>
									<?php
									}
								}
						?>    
			  
					</ul>
				</div>
			</section>
			
			
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
