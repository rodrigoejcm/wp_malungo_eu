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
    <div id="primary" class="content-area malungo-post container-zumzum">
        <img src="<?=get_template_directory_uri().
            '/img/titulo-zumzum.svg'?>"
            class="img-zumzum"/>
        <p class="burburinho">Fala tu! Bem-vindo ao nosso burburinho.</p>
        <main id="main" class="site-main main-zumzum mafua-content" role="main">
            <?php
                $thumb_id = get_post_thumbnail_id();
                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                $thumb_url = $thumb_url_array[0];
            ?>
            <h1><?php echo $post->post_title ?></h1>
            <img src="<?= $thumb_url ?>" class="featured-img">
            <?php echo apply_filters('the_content', $post->post_content); ?>
            <div class="pra-escurecer">
                <?php echo apply_filters('the_content', get_field('para_escurecer')); ?>
            </div>
            <div class="referencias">
                <?php echo apply_filters('the_content', get_field('referencias')); ?>
            </div>
            <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { 
                ADDTOANY_SHARE_SAVE_KIT( array( 
                    'buttons' => array( 'facebook', 'twitter', 'google_plus'),
                ) );
            } ?>
            <div class="autor">
                <?php
                    $autor = get_field('__autor', $post->ID);

                    $thumb_id = get_post_thumbnail_id($autor->ID);
                    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                    $thumb_url = $thumb_url_array[0];
                ?>
                <img src="<?= $thumb_url ?>">
                <div class="content-autor">
                    <h3><?= $autor->post_title ?></h3>
                    <?=$autor->post_content ?>
                    <a href="<?=site_url('em-breve')//get_post_permalink($autor->ID)?>">Mais posts de <?= $autor->post_title ?></a>
                </div>
            </div>
        </main><!-- #main -->
    </div>
<?php

get_footer();
