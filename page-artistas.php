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

$imagem = '';

switch ($categoria) {
    case 'artes-visuais' :
        $imagem = 'ARTISTAS_simbolos-01.png';
    	break;
    case 'audiovisual' :
    	$imagem = 'ARTISTAS_simbolos-02.png';
    	break;
    case 'danca' :
    	$imagem = 'ARTISTAS_simbolos-03.png';
    	break;
    case 'literatura' :
    	$imagem = 'ARTISTAS_simbolos-04.png';
    	break;
    case 'moda' :
    	$imagem = 'ARTISTAS_simbolos-05.png';
    	break;
    case 'musica' :
    	$imagem = 'ARTISTAS_simbolos-06.png';
    	break;
    case 'teatro' :	
    	$imagem = 'ARTISTAS_simbolos-07.png';
    	break;
	}       



		    			

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="artistas">

			<h1>Artistas</h1>
			<p>Quem pensa, Quem faz, Quem dança, Quem canta...</p>

			

			<br>

		<section id="main">
    		<div id="content" class="collection"><section id="collection">
				<ul class="projects-list">
		    		<li>



		      			<a href="http://relampago.co/descomplica/" style="background-image: url('<?=get_template_directory_uri().'/img/'. $imagem ?>');" name="Descomplica" ajax="">
			          		<!-- <img class="hover" src="http://relampago.co/wp-content/uploads/portfolio_relampago_descomplica_02.gif"> -->
			        		<!-- <div class="box" style="transform: translate(12px, 233px);">
			          		
			        		</div> -->
		      			</a>
		    		</li>
      				

					<?php

							$posts = get_posts(array(
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
								        <div class="box">
								          <div class="title"><?php the_title(); ?></div>
								          <div class="title">
								          	
								          		<?php
									          		$vari  = get_field('pais');

													if( $vari ){
														foreach( $vari as $pais){
															echo get_the_title( $pais->ID );
														} 

													}
												?>
								          </div>
								          <div class="box-artista-descricao"><?php the_field('breve_descricao'); ?></div>
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
