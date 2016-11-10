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
						Artes Visuais
					</a>
				</li>
				
			
				<li>
					<a  class="link-audiovisual <?php
							if($cat_string=='audiovisual') echo "active";
						?>"
				 href="<?=get_site_url() .'/artistas/?categoria_artista=audiovisual' ?>">
						Audiovisual
					</a>
				</li>
				<li>
					<a class="link-danca <?php
							if($cat_string=='danca') echo "active";
						?>"
				 href="<?=get_site_url() .'/artistas/?categoria_artista=danca' ?>">
						Danca
					</a>
				</li>
				<li>
					<a class="link-literatura <?php
							if($cat_string=='literatura') echo "active";
						?>"
				 href="<?=get_site_url() .'/artistas/?categoria_artista=literatura' ?>">
						Literatura
					</a>
				</li>
				<li>
					<a class="link-moda <?php
							if($cat_string=='moda') echo "active";
						?>"
				 href="<?=get_site_url() .'/artistas/?categoria_artista=moda' ?>">
						Moda
					</a>
				</li>
				<li>
					<a class="link-musica <?php
							if($cat_string=='musica') echo "active";
						?>"
				 href="<?=get_site_url() .'/artistas/?categoria_artista=musica' ?>">
						Musica
					</a>
				</li>
				<li>
					<a class="link-teatro <?php
							if($cat_string=='teatro') echo "active";
						?>"
				 href="<?=get_site_url() .'/artistas/?categoria_artista=teatro' ?>">
						Teatro
					</a>
				</li>
            </ul>
			<section id="main">
	    		<div id="content" class="collection"><section id="collection">
					<ul class="projects-list">
			    		<li>
			      			<?= $imagem ?>
			      			<p  class="nome_categoria_box"  style="<?= $estilo_cor_texto_categoria; ?>">
	                            <?= $categorias_do_artista->name; ?>
			      			</p>
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
										?>

									<?php echo '<a href="' . get_permalink($post->ID) . '" style="background-image: url(\'' . $thumb_url . '\')">';?>
									        <div class="box" style="<?= $estilo_cor_box_categoria; ?>">
									          <div class="title"><?php the_title(); ?></div>
									          <br>
									          <div class="pais">
									          	
									          		<?php
										          		$vari  = get_field('pais');

														if( $vari ){
															foreach( $vari as $pais){
																echo get_the_title( $pais->ID );
															} 

														}
													?>
									          </div>
									          <br>
									          <div class="descricao"><?php the_field('breve_descricao'); ?></div>
									        </div>
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
