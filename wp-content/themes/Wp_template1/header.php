<!DOCTYPE html>
<html lang <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <?php wp_head(); ?>

</head>

<body>
    <!-- Start Header Area -->
    <header class="header-area">
        <div class="container">
            <nav class="nav">
                <a href="#" class="nav-brand text-light">
                    <!-- to enter site title or logo -->
                    <?php 
                    
                    if(function_exists('the_custom_logo')){
                        
                        the_custom_logo();
                    }
                    else{

                        bloginfo('name'); 

                    }
                    
                    
                    
                    
                    ?>



                </a>


                <!-- Toggle menu -->
                <button class="toggle-button">
                    <span class="fas fa-hamburger"></span>
                </button>
                <!-- Navigation Items -->
                <div class="collapse" id="toggle-collapse">
                    <?php
                    // Display primary menu

                    if(has_nav_menu('primary-menu')){
                        wp_nav_menu(array(
                            'theme_location'=> 'primary-menu',
                            'container'=> '',
                            'items_wrap'=>'<ul class="navbar-nav mr-auto">%3$s </ul>'
                        ));
                    }

                    ?>
                    <!-- <ul class="navbar-nav mr-auto">
                        <li class="nav-link">
                            <a href="#" class="link text-light">Home</a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="link text-light">People</a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="link text-light">Designs</a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="link text-light">Travel</a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="link text-light">About Us</a>
                        </li>
                    </ul> -->
                    <div class="search">
                        <?php
                        // Get the search form file using get_search_form tag
                        get_search_form( )?>
                       
                    </div>
                </div>
            </nav>
        </div>


    </header>
    <!-- End Header Area -->

    <!-- Start Main Area -->
    <main class="main-area">