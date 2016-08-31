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
		<div class="artistas-categorias">
			<h1>Artistas</h1>
			<p>Quem pensa, Quem faz, Quem dança, Quem canta...</p>

			<br>

			<div class="row">
				
				<div class="col-md-2 col-md-offset-2">
					<a  class="link-artesvisuais" href="<?=get_site_url() .'/artistas/?categoria_artista=artes-visuais' ?>">
					<div class="box-categoria">
						
						<img class="img-yaon" src="<?=get_template_directory_uri().'/img/ARTISTAS_simbolos-01.png' ?>" >
						</img>
						<p>artes visuais</p>
					</div>
					</a>
				
				</div>
				<div class="col-md-2">
					<a  class="link-audiovisual" href="<?=get_site_url() .'/artistas/?categoria_artista=audiovisual' ?>">
						<div class="box-categoria">
							<img class="img-yaon" src="<?=get_template_directory_uri().'/img/ARTISTAS_simbolos-02.png' ?>" >
							</img>
							<p>audiovisual</p>
						</div>
					</a>				
				</div>
				<div class="col-md-2">
					<a class="link-danca" href="<?=get_site_url() .'/artistas/?categoria_artista=danca' ?>">
						<div class="box-categoria">
							<img class="img-yaon" src="<?=get_template_directory_uri().'/img/ARTISTAS_simbolos-03.png' ?>" >
							</img>
							<p>dança</p>
						</div>
					</a>					
				</div>
				<div class="col-md-2">
					<a class="link-literatura" href="<?=get_site_url() .'/artistas/?categoria_artista=literatura' ?>">
						<div class="box-categoria">
							<img class="img-yaon" src="<?=get_template_directory_uri().'/img/ARTISTAS_simbolos-04.png' ?>" >
							</img>
							<p>literatura</p>
						</div>
					</a>				
				</div>
				
			</div>
			<br><br>
			<div class="row">
				<div class="col-md-2 col-md-offset-2">
					<a class="link-moda" href="<?=get_site_url() .'/artistas/?categoria_artista=moda' ?>">
						<div class="box-categoria">
							<img class="img-yaon" src="<?=get_template_directory_uri().'/img/ARTISTAS_simbolos-05.png' ?>" >
							</img>
							<p>moda</p>
						</div>
					</a>
				</div>
				<div class="col-md-2">
				<a class="link-musica" href="<?=get_site_url() .'/artistas/?categoria_artista=musica' ?>">
					<div class="box-categoria">
						<img class="img-yaon" src="<?=get_template_directory_uri().'/img/ARTISTAS_simbolos-06.png' ?>" >
						</img>
						<p>música</p>
					</div>
				</a>
				</div>
				<div class="col-md-2">
					<a class="link-teatro" href="<?=get_site_url() .'/artistas/?categoria_artista=teatro' ?>">
						<div class="box-categoria">
							<img class="img-yaon" src="<?=get_template_directory_uri().'/img/ARTISTAS_simbolos-07.png' ?>" >
							</img>
							<p>teatro</p>
						</div>
					</a>				
				</div>
				<div class="col-md-2">
					<div class="box-categoria">
						<div class="indique">
							<p>INDIQUE<br>UM<br>ARTISTA</p>
						</div>
					</div>				
				</div>
				
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
