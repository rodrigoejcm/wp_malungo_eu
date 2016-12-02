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

    <div id="primary" class="content-area malungo-post">
        <main id="main" class="site-main main-zumzum mafua-content" role="main">
            <?php
                $thumb_id = get_post_thumbnail_id();
                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                $thumb_url = $thumb_url_array[0];
            ?>
            <h2><?php echo $post->post_title ?></h2>
            <img src="<?= $thumb_url ?>" class="featured-img">
            <?php echo apply_filters('the_content', $post->post_content); ?>
            <?php echo apply_filters('the_content', get_field('para_escurecer')); ?>
            <?php echo apply_filters('the_content', get_field('referencias')); ?>
            <div class="autor">
                <?php
                    $autor = get_field('autor');
                    $thumb_id = get_post_thumbnail_id($autor->ID);
                    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                    $thumb_url = $thumb_url_array[0];
                ?>
                <img src="<?= $thumb_url ?>">
                <div class="content-autor">
                    <h3><?= $autor->post_title ?></h3>
                    <?php echo apply_filters('the_content', $autor->post_content); ?>
                </div>
            </div>
        </main><!-- #main -->
    </div>
<?php

get_footer();
