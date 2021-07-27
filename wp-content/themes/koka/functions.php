<?php
/**
 * Functions  Template
 * 
 * @package koka
 */

function theme_setup(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    
}

// <!-- Add css and jss files using functions -->
add_action('after_setup_theme','theme_setup');

function add_theme_scripts(){
    // for css
    wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri(  ) );
    // for scripts
    // wp_enqueue_script( 'main', get_template_directory_uri(  ) );


}
add_action('wp_enqueue_scripts','add_theme_scripts');

// Register navigation menus

function register_my_menu(){
    register_nav_menus( 
        array(
            'header-menu' =>_('Header Menu'),
            // To add nav in footer
            'footer-menu' =>_('Footer Menu')
        )
        );
}

add_action('init','register_my_menu');


// Register Widgets

function my_register_widgets(){
    register_sidebar(
        array(
            'id' => 'new_sidebar',
            'name' => __('New Siderbar'),
            'description' => __('A Short Description of the sidebar ')
        )
    );
}
add_action('widgets_init','my_register_widgets');

