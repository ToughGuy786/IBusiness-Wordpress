<?php 
    add_action( 'wp_enqueue_scripts',  function() {

        wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
        wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/css/fonts.css' );
        wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.min.css' );
 
    });

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support( 'menus' );
?>





