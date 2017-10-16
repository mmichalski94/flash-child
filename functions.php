<?php

/* Rejestracja styli i skryptów */

function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'flash-style' for the Flash theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/css/font-awesome.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/css/font-awesome.min.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/css/message.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/css/responsive.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/css/responsive.min.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/css/swiper.min.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/css/welcome.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

