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
    <div id="primary" class="content-area malungo-post">
        <main id="main" class="site-main main-zumzum mafua-content page-msg" role="main">
            <h1><?php echo $post->post_title ?></h1>
            <?php echo apply_filters('the_content', $post->post_content); ?>
        </main><!-- #main -->
    </div>
<?php

get_footer();
