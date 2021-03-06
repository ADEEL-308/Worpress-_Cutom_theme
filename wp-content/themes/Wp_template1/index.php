<?php

// Get header file
get_header();

?>
        
        
        <!-- Banner Area -->
        <section class="banner-area">
            <div class="container-fluid">
                <div class="banner ">
                    <!-- To add Banner image in wordpress -->
                    <div class="ban">
                        <?php  
                            if(get_theme_mod('header_image')):
                        ?>
                        <img src="<?php echo esc_url(get_theme_mod('header_image')) ?>" alt="Banner area" class="fluid">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="banner-title text-center">
                        <?php  
                            if(get_theme_mod('header_text_field')):
                        ?>
                        <h1 class="text-lg text-light">
                            <?php  echo get_theme_mod('header_text_field') ?>
                        </h1>
                        
                        <?php endif; ?>
                        <!-- Banner Description settings -->
                        <?php  
                            if(get_theme_mod('header_desc_field')):
                        ?>
                        
                        <span class="description text-sm text-light">
                            <?php  echo get_theme_mod('header_desc_field') ?>
                            
                        </span>
                        
                        
                        <?php endif; ?>
                
                        <!-- Simplicity -->

                </div>
            </div>
        </section>
        <!-- End Banner Area -->
        <!-- Categories Section  -->
        <seciton class="categories">
            <div class="container">
                <div class="flex flex-row flex-wrap">
                    <!-- Categories Link For WordPress -->
                    <?php  get_template_part('templates/temp/categories','content') ?>
                </div>
            </div>
        </seciton>
        <!-- End Categories Section  -->
        <!-- Post Area -->
        <section class="post-area">
            <div class="container-fluid">
                <div class="wrapper">
                    <!-- Two Columns  Layout -->
                    <div class="row">
                        <div class="col-8-lg col-12-md">
                            <!-- Two Columns  Layout -->
                            <div class="grid">
                                <?php
                                    // Load post-content in index

                                    get_template_part('templates/temp/post','content');
                                ?>
                            </div>
                            <!-- Pagination Area -->
                            <div class="row">
                                <div class="col-12-lg text-center">
                                    <div class="pagination">
                                        <?php 
                                            echo paginate_links(array(
                                                'mid_size'=>2,
                                                'prev_text'=>__('<span class="fa fa-arrow-left"></span>'),
                                                'next_text'=>__('<span class="fa fa-arrow-right"></span>')
                                            ));
                                        ?>
                                        <!-- <a href="#">
                                            <span>1</span>
                                        </a>
                                        <a href="#">
                                            <span>2</span>
                                        </a>
                                        <a href="#">
                                            <span>3</span>
                                        </a>
                                        <a href="#">
                                            <span class="fa fa-arrow-right"></span>
                                        </a> -->
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-4-lg col-12-md">
                            <!-- Get the SIdebar template -->
                            <?php  get_sidebar( );?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Post Area -->

        <?php

// Get Footer file
get_footer();

?>

