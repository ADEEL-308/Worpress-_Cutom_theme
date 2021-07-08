<?php

/**
 * 
 * Register Menus
 * 
 * @package canva
 */

namespace CANVA_THEME\Inc;

use CANVA_THEME\Inc\Traits\singleton;

class Menus{
    use singleton;
   
    protected function __construct()
    {

        // Load Class
        $this->setup_hook();
    }

    protected function setup_hook()
    {
        /**
         * Actions.
         */
        add_action('init', [$this, 'register_menus']);
       
    }
    
    public function register_menus(){
        register_nav_menus([
            'canva-header-menu' => esc_html__('Header Menu','canva'),
            'canva-footer-menu' => esc_html__('Footer Menu','canva'),
        ]);
    }

}