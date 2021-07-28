<?php 
/**
 * 
 * Template Name:Functions.php
 * 
 * 
 * Description:Add Features to wordpress theme 
 * 
 * 
 * 
 */

    //  add customizer .php file

    require_once("templates/helpers/customizer.php");

    function fn_theme_scripts(){
    /** Include style files */

    // adding font awsome icons file


    wp_enqueue_style('fontawesome', get_template_directory_uri(  ).'./vendor/css/all.min.css');


    // Custom Style Sheet

    wp_enqueue_style('custom-style',get_stylesheet_uri(  ));


    // @media Query responsive file

    wp_enqueue_style('media_responsive',get_template_directory_uri(  ).'./assests/css/_media.css');

    // Scripts Files

    wp_enqueue_script( 'jquery-file', get_template_directory_uri().'/assets/js/main.js' );
    
    // Scripts Files

    wp_enqueue_script( 'jquery-file', get_template_directory_uri().'/assets/js/jquery.js' );
    wp_enqueue_script( 'main-file', get_template_directory_uri().'/assets/js/main.js' );

}

add_action( 'wp_enqueue_scripts', 'fn_theme_scripts' );


// Adding new features to wordpress theme

function fn_theme_supports(){
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    add_theme_support('html5',array('search-form'));
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'fn_theme_supports' );

// Register Navigation Menu

function fn_nav_menu(){
    register_nav_menus( array(
        'primary-menu'=>__('Primary Menu','text_domain'),
        'footer-menu'=>__('Footer Menu','text_domain')
    
    
    
    ) );
}

add_action('init','fn_nav_menu');

// Filter hook

function add_link_atts($atts){
    $atts['class']='link text-light';
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_link_atts');

function fn_custom_excerpt_length($length){
    return 15;
}

add_filter('excerpt_length' ,'fn_custom_excerpt_length');

?>