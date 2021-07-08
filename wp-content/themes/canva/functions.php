<?php
/**
 * Theme Functions
 * 
 * @package canva
 */


if (!defined('CANVA_DIR_PATH')){
    define ('CANVA_DIR_PATH' , untrailingslashit(get_template_directory()));
}
if (!defined('CANVA_DIR_URI')){
    define ('CANVA_DIR_URI' , untrailingslashit(get_template_directory_uri()));
}

require_once CANVA_DIR_PATH . '/inc/helpers/autoloader.php';

function canva_get_theme_instance(){
    \CANVA_THEME\Inc\CANVA_THEME::get_instance();
}

canva_get_theme_instance();
 

// To add syle sheet
    function canva_enqueue_scripts(){
      
        
    }


    add_action('wp_enqueue_scripts' , 'canva_enqueue_scripts');

 ?> 