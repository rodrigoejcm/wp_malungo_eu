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
		<section class="artistas-categorias">
			<img src="<?=get_template_directory_uri().
					'/img/titulo-artes.svg'?>"
				alt="ARTES"
				class="img-zumzum"
				/>
			<div class="categoria-grid">
				<a  class="link-artesvisuais" href="<?=get_site_url() .'/artistas/?categoria_artista=artes-visuais' ?>">
					<div class="box-categoria">
						<?= get_imagem_categoria_artista('artesvisuais', true) ?>
						<p>artes visuais</p>
					</div>
				</a>
				
			
				<a  class="link-audiovisual" href="<?=get_site_url() .'/artistas/?categoria_artista=audiovisual' ?>">
					<div class="box-categoria">
						<?= get_imagem_categoria_artista('audiovisual', true) ?>
						<p>audiovisual</p>
					</div>
				</a>
				<a class="link-danca" href="<?=get_site_url() .'/artistas/?categoria_artista=danca' ?>">
					<div class="box-categoria">
						<?= get_imagem_categoria_artista('danca', true) ?>
						<p>dança</p>
					</div>
				</a>					
				<a class="link-literatura" href="<?=get_site_url() .'/artistas/?categoria_artista=literatura' ?>">
					<div class="box-categoria">
						<?= get_imagem_categoria_artista('literatura', true) ?>
						<p>literatura</p>
					</div>
				</a>				
				<a class="link-moda" href="<?=get_site_url() .'/artistas/?categoria_artista=moda' ?>">
					<div class="box-categoria">
						<?= get_imagem_categoria_artista('moda', true) ?>
						<p>moda</p>
					</div>
				</a>
				<a class="link-musica" href="<?=get_site_url() .'/artistas/?categoria_artista=musica' ?>">
					<div class="box-categoria">
						<?= get_imagem_categoria_artista('musica', true) ?>
						<p>Música</p>
					</div>
				</a>
				<a class="link-teatro" href="<?=get_site_url() .'/artistas/?categoria_artista=teatro' ?>">
					<div class="box-categoria">
						<?= get_imagem_categoria_artista('teatro', true) ?>
						<p>Teatro</p>
					</div>
				</a>
				<a class="link-indicacao" href="#">
					<div class="box-categoria">
						<?= get_imagem_categoria_artista('participe', true) ?>
						<p>Indique um artista</p>
					</div>
				</a>
			</div>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
