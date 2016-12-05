<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */

get_header(); ?>

	<script type="text/javascript">
	$('.cor-scroll').css("background-color", "#303331");
	zumzum = true;
	</script>
	<div id="primary" class="content-area malungo-post">
		<main id="main" class="site-main main-zumzum mafua-content page-msg" role="main">
			<h1>Página não encontrada</h1>
			<h3>Não achamos o que você estava procurando. Use o menu ali de cima ou volte pra <a href="<?=home_url()?>">home</a> </h3>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
