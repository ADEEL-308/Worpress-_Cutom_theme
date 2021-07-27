<?php 
/**
 * Theme Name:KOKA
 * 
 * 
 */

    // WP_Customizer_control

    function fn_customizer_settings($wp_customizer){
        // add a customizer setting


        // Include new section
        
        $wp_customizer->add_section('header',array(
            'title' => __('Header Settings','Daily'),
            'priority' => 70
        ));
        
        // Include new setting
        $wp_customizer->add_setting('header_image',array(
            'capability' => 'edit_theme_options'
        ));
        
        // Include new control
        $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer,'header_image',array(
            'label' => __('Header Image' , 'Daily'),
            'section' =>'header'
        )));

        // Include new header text setting Banner
        $wp_customizer->add_setting('header_text_field',array(
            'capability' => 'edit_theme_options',
            'default'  => 'Simplicity'
        ));

        // Adding Text Control Banner
        $wp_customizer->add_control('header_text_control',array(
            'label' => __('Header Text' ,'Daily'),
            'description' => 'Change Header text',
            'section' =>  'header',
            'settings' => 'header_text_field'
        ));

        // Include new header para text setting Banner
        $wp_customizer->add_setting('header_desc_field',array(
            'capability' => 'edit_theme_options',
            'default'  => 'The power of Websites'
        ));

        // Adding para Control Banner
        $wp_customizer->add_control('header_description_control',array(
            'label' => __('Header Description' ,'Daily'),
            'description' => 'Change Header Description',
            'section' =>  'header',
            'settings' => 'header_desc_field'
        ));
    }

    add_action('customize_register','fn_customizer_settings');


?>