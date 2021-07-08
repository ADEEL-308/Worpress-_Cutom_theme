<?php


/**
 * 
 * Bootsraps the Theme
 * 
 * @package canva
 * 
 * 
 * 
 */

namespace CANVA_THEME\Inc;

use CANVA_THEME\Inc\Traits\singleton;

class CANVA_THEME
{
    use singleton;

    protected function __construct()
    {

        // Load Class
        Assets::get_instance();
        $this->setup_hook();
    }

    protected function setup_hook()
    {
        /**
         * Actions.
         */
       
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme(){
        add_theme_support('title-tag');
        add_theme_support('custom-logo',[

            'header-text' => ['site-title', 'site-description'],
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,

        ]);
        add_theme_support('custom-background' ,[
            'default-color'=>'#ffff',
            'default-image' =>'',
        ]);

    }
    
}
