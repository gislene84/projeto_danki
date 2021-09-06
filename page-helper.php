<?php
    // Template Name: Helper
 ?>

 <?php
    // endwhile;
    //endif;
 ?>

 <?php
    //Retorne o título da página atual.
    //echo get_the_title();

    //Retorne o conteúdo da página atual.

        if(have_posts()) : while(have_posts()) : the_post();
        the_content();
        endwhile;
        endif;


    //the_title();
    //the_content();

    /*
    get_theme_root_uri();
    get_bloginfo('stylesheet_directory');
    echo bloginfo('title');
    echo bloginfo('description');
    wp_head();
    wp_footer();
    get_header();
    get_footer();
    global $post;
    $post_slug=$post->post_name;

    while(have_rows('nome_do_tipo_contato')){
        the_rows();
        echo get_sub_field('nome');

    }*/
 ?>