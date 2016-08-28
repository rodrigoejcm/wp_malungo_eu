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
		<div class="paises-lista">
			<h1>Países</h1>
			<p>Explore a morada de nossos Malungos...</p>

			<br>

			<div class="row">
				
				<div class="col-md-2  col-md-offset-2">
					<a  class="link-artesvisuais" href="<?=get_site_url() .'/artistas/?categoria_artista=audiovisual' ?>">
					<div class="box-pais">
						
						<img class="img-yaon" src="<?=get_template_directory_uri().'/img/PAISES_africa-do-sul.png' ?>" >
						</img>
						<p>Africa do Sul</p>
					</div>
					</a>
				
				</div>
				<div class="col-md-2">
					<a  class="link-audiovisual" href="#">
						<div class="box-pais">
							<img class="img-yaon" src="<?=get_template_directory_uri().'/img/PAISES_africa-do-sul.png' ?>" >
							</img>
							<p>Moçambique</p>
						</div>
					</a>				
				</div>
				<div class="col-md-2">
					<a  class="link-artesvisuais" href="<?=get_site_url() .'/artistas/?categoria_artista=audiovisual' ?>">
					<div class="box-pais">
						
						<img class="img-yaon" src="<?=get_template_directory_uri().'/img/PAISES_africa-do-sul.png' ?>" >
						</img>
						<p>Africa do Sul</p>
					</div>
					</a>
				
				</div>
				<div class="col-md-2">
					<a  class="link-audiovisual" href="#">
						<div class="box-pais">
							<img class="img-yaon" src="<?=get_template_directory_uri().'/img/PAISES_africa-do-sul.png' ?>" >
							</img>
							<p>Moçambique</p>
						</div>
					</a>				
				</div>
				
			</div>
			<br><br>
						<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-2">
					<a  class="link-artesvisuais" href="<?=get_site_url() .'/artistas/?categoria_artista=audiovisual' ?>">
					<div class="box-pais">
						
						<img class="img-yaon" src="<?=get_template_directory_uri().'/img/PAISES_africa-do-sul.png' ?>" >
						</img>
						<p>Africa do Sul</p>
					</div>
					</a>
				
				</div>
				<div class="col-md-2">
					<a  class="link-audiovisual" href="#">
						<div class="box-pais">
							<img class="img-yaon" src="<?=get_template_directory_uri().'/img/PAISES_africa-do-sul.png' ?>" >
							</img>
							<p>Moçambique</p>
						</div>
					</a>				
				</div>
				<div class="col-md-2">
					<a  class="link-artesvisuais" href="<?=get_site_url() .'/artistas/?categoria_artista=audiovisual' ?>">
					<div class="box-pais">
						
						<img class="img-yaon" src="<?=get_template_directory_uri().'/img/PAISES_africa-do-sul.png' ?>" >
						</img>
						<p>Africa do Sul</p>
					</div>
					</a>
				
				</div>
				<div class="col-md-2">
					<a  class="link-audiovisual" href="#">
						<div class="box-pais">
							<img class="img-yaon" src="<?=get_template_directory_uri().'/img/PAISES_africa-do-sul.png' ?>" >
							</img>
							<p>Moçambique</p>
						</div>
					</a>				
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
