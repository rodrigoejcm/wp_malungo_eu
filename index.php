<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<div class="splash-container">
				<div id="carousel-home" class="carousel slide"
					data-interval="3000"
					data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-home" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-home" data-slide-to="1"></li>
						<li data-target="#carousel-home" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
						  <img src="<?= get_template_directory_uri()
						  			.'/img/home-img01-banner.jpg' ?>"
						  			alt="Slide 1">
							  <div class="carousel-caption">
							  	foto por <strong>Tete Kitissou</strong>
							  </div>
						</div>
						<div class="item">
						  <img src="<?= get_template_directory_uri()
						  			.'/img/home-img02-banner.jpg' ?>"
						  			alt="Slide 2">
							  <div class="carousel-caption">
							  	foto por: <strong>Leandro Aragonez</strong>
							  </div>
						</div>
						<div class="item">
						  <img src="<?= get_template_directory_uri()
						  			.'/img/home-img03-banner.jpg' ?>"
						  			alt="Slide 3">
							  <div class="carousel-caption">
							  	foto por <strong>Tete Kitissou</strong>
							  </div>
						</div>
					</div>
				</div>
			    <div class="splash">
			    	<img class="img-yaon" src="<?=get_template_directory_uri().'/img/Simbolobannerhome.png' ?>" >
					</img>
					<br><br><br>
			    	<img class="img-cultura" src="<?=get_template_directory_uri().'/img/Culturaemmovimento.png' ?>" >
					</img>

					<br><br>
			    	<!-- <div class="splash-head">VEM BRINCÁ MAIS EU MANO MEU!</div> -->
			    	<div class="splash-subhead" style="font-weight:bold;">VEM BRINCÁ MAIS EU MANO MEU!</div>
			    	<br>
			    	<div class="splash-subhead">
			    		Em terreiro de Malungo Eu cabe você, eu e o seu vizinho.
			    		<br>
			    		Fazemos do longe perto, do tempo agora e despertamos malungos por aí.
			    		<br>
			    		<br>
			    		Vem pra roda, contá a sua história!
			    	</div>
			    </div>
			</div>


			<div class="content-wrapper">
				<div class="container">
				    <div class="rol">
				    	<div class="col-md-12 header-center">
			               <h1 class="header-home">ENCONTROS COM ÁFRICA: ENTRE LÁ E CÁ</h1>
			            </div>
				    </div>
				    <div class="row">
				    	<div class="home-post">
					    	<div class="col-md-8 col-sm-12">
				                <div class="imagem-h-400">
					                <img src="<?=get_template_directory_uri().'/img/DESTAQUE_01.jpg' ?>" >
									</img>
								</div>
				            </div>
				            <div class="col-md-4 col-sm-12 col-h-400">
				            	<a href="" class="hover-artesvisuais">
				            		<h3 class="categoria cor-artesvisuais">Artes Visuais</h3>
				               		<h2 class="titulo">Conheça o Land Art com o coletivo Site Specific.</h2>
				               		<p class="resumo">O coletivo Site_Specific teve início em 2011 como um esforço colaborativo dos sul-africanos Strijdom van der Merwe, Anni Snyman, PC van Rensburg, Heather Greig, Erica Lüttich, entre outros artistas, amigos e simpatizantes. Lançado durante a “International Land Art Biennale” na baía de Plettenberg na África do Sul, o coletivo, devotado...</p>
				            	</a>
					        </div>
			            </div>
				    </div>
				    <br>
				    <div class="row">
				    	<div class="col-md-6">

				    		<div class="home-post">
					    		<div class="imagem-h-300">
						    		<img src="<?=get_template_directory_uri().'/img/DESTAQUE_02.jpg' ?>" >
									</img>
								</div>
								<a href="" class="hover-danca">
					            	<h3 class="categoria cor-danca">Dança</h3>
					               	<h2 class="titulo">Tradição e contemporâneo juntos!.</h2>
					               	<p class="resumo">O grupo de dança contemporânea cabo-verdiano Raiz di Polon foi fundado em 1991, pelos coreógrafos José Emanuel Brandão (Mano Preto) e Zezinho Semedo. Sua formação é composta ainda pelo diretor musical e compositor Mário Lúcio, pelos bailarinos Carlos Oliveira, Bety Fernandes, Luís da Rosa, Rosy Timas, Djemilson Barreto, e pelo produtor executivo Jeff Hessney...</p>
				               </a>
				            </div>
			            </div>
			            <div class="col-md-6">
			               	<div class="home-post">
			               	<div class="imagem-h-300">
				               	<img src="<?=get_template_directory_uri().'/img/DESTAQUE_03.png' ?>" >
								</img>
							</div>
								<a href="" class="hover-musica">
					            	<h3 class="categoria cor-musica">Música</h3>
					               	<h2 class="titulo"> De Moçambique aos festivais de São Paulo.</h2>
					               	<p class="resumo">A cantora Lenna Bahule nasceu em 1989, em Maputo, e hoje reside no Brasil, na cidade de São Paulo. Sua iniciação musical teve início aos cinco anos, quando ingressou na Escola Nacional de Música (ENM), estudando piano. A carreira como vocalista solo se deu a partir de 2006, quando Lenna passa a compor, participar de festivais, fazer parcerias e experimentações com artistas moçambicanos e de outros países...</p>
				               </a>
				            </div>
			            </div>
				    </div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php
/*get_sidebar();*/
get_footer();
