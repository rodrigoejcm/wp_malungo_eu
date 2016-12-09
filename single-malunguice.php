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
    <script type="text/javascript">
        $('.cor-scroll').css("background-color", "#303331");
        zumzum = true;
    </script>
	<div id="primary" class="content-area content-malunguice">
		<main id="main" class="site-main main-malunguice" role="main">
            <img src="<?=get_template_directory_uri().
                    '/img/titulo-malunguices.svg'?>"
                alt="MALUNGUICES"
                class="img-zumzum"
                />
            <p class="uau">Uau! Descobertas mundo afora e brasil adentro.</p>
            <div class="autor">
                <?php
                    $autor = get_field('__autor', $post->ID);

                    $thumb_id = get_post_thumbnail_id($autor->ID);
                    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                    $thumb_url = $thumb_url_array[0];
                ?>
                <img src="<?= $thumb_url ?>"/>
                <div class="content-autor">
                    <h3><?= $autor->post_title ?></h3>
                    <br>
                    <?php echo apply_filters('the_content', $autor->post_content); ?>
                    <a href="<?=site_url('em-breve')//get_post_permalink($autor->ID)?>">Mais posts de <?= $autor->post_title ?></a>
                </div>
            </div>
            <br>
            <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { 
                ADDTOANY_SHARE_SAVE_KIT( array( 
                    'buttons' => array( 'facebook', 'twitter', 'google_plus'),
                ) );
            }
            ?>
            <?php
                $galeria = get_field('galeria', $post->ID);
                if($galeria){
                ?>
                <ul class="galeria-malunguice">
                            <?php 
                                $acf_photo_gallery_attachments = explode(',', $galeria);
                                foreach($acf_photo_gallery_attachments as $id):
                                    
                                /*$img = wp_get_attachment_image($image);*/
                                $imagem_infos = wp_prepare_attachment_for_js( $id );
                                
                            ?>
                            <li id="li-<?= $id ?>" class="js-modal-dispara" data-target="#modal-<?=$id?>">
                                <img class="item-galeria-malunguice"
                                    src=" <?php echo $imagem_infos['url']; ?> "/>
                                <style>
                                    #li-<?=$id?>:after{
                                        content: '<?= get_post($id)->post_title?>';
                                    }
                                </style>
                            </li>
                            <?php endforeach; ?>
                </ul>
                <?php
                    foreach($acf_photo_gallery_attachments as $id):
                            $imagem_infos = wp_prepare_attachment_for_js( $id );?>
                        <div class="modal fade modal-malunguice" id="modal-<?=$id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <button type="button" class="fecha-modal" data-dismiss="modal">x</button>
                                <h3><?=$post->post_title?></h3>
                                <img class="item-modal-malunguice"
                                src=" <?php echo $imagem_infos['url']; ?> "/>
                                <h4><?=get_post($id)->post_title?></h4>
                                <p><?=get_post($id)->post_content?></p>
                                </div>
                              </div>
                    <?php endforeach; ?>
            <?php } ?>
		</main><!-- #main -->
	</div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php

get_footer();
