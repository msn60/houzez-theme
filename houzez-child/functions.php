<?php

/*
==================================
Hooks
==================================
*/

/*Enqueueing parent styles and child styles*/
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}



/*Add custom JS file to run in houzez theme*/
function msn_add_houzez_js() {

    wp_enqueue_script('msn-houzez-custom.script', get_stylesheet_directory_uri().'/msn-houzez-1-0-0.js',array('jquery'),2,true);
}

add_action( 'wp_enqueue_scripts', 'msn_add_houzez_js', 100 );



/*Add Language subdirectory in Child theme*/
function msn_houzez_languages_theme_setup() {
    load_child_theme_textdomain( 'houzez', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'msn_houzez_languages_theme_setup' );


/*
==================================
Small functions
==================================
*/



/*
==================================
Set up
==================================
*/


/*
==================================
Includes 
==================================
*/

//require_once get_stylesheet_directory_uri().'/inc/header/header-3.php';

//add_action('init','PostType::make_houzez_neighborhood_info');
include "app/autoloader.php";
include "app/classes/class-posttypes.php";
add_action('init','PostTypes::make_n_info_post_type');


/*
==================================
Shortcodes
==================================
*/


