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
                            <aside class="sidebar">
                                <!-- Latest Post Section -->
                                <section class="latest-post">
                                    <a href="" class="text-md text-dark">Latest Post</a>
                                    <div class="flex flex-column">
                                        <article class="new-post">
                                            <div class="row">
                                                <!-- Two Columns -->
                                                <div class="col-4-lg post-image">
                                                    <img src="./assets/images/2.jpg" alt="latest post" class="fluid">
                                                </div>
                                                <div class="col-8-lg post-title">
                                                    <div class="cat">
                                                        <a href="#" class="text-sm text-gray category">people</a>
                                                        <a href="#" class="text-sm text-gray category">travel</a>
                                                    </div>
                                                    <a href="#" class="text-md text-dark">
                                                        Trip that you'll never
                                                        ever
                                                        forget
                                                    </a>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="new-post">
                                            <div class="row">
                                                <!-- Two Columns -->
                                                <div class="col-4-lg post-image">
                                                    <img src="./assets/images/3.jpg" alt="latest post" class="fluid">
                                                </div>
                                                <div class="col-8-lg post-title">
                                                    <div class="cat">
                                                        <a href="#" class="text-sm text-gray category">people</a>
                                                        <a href="#" class="text-sm text-gray category">travel</a>
                                                    </div>
                                                    <a href="#" class="text-md text-dark">
                                                        Trip that you'll never
                                                        ever
                                                        forget
                                                    </a>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="new-post">
                                            <div class="row">
                                                <!-- Two Columns -->
                                                <div class="col-4-lg post-image">
                                                    <img src="./assets/images/4.jpg" alt="latest post" class="fluid">
                                                </div>
                                                <div class="col-8-lg post-title">
                                                    <div class="cat">
                                                        <a href="#" class="text-sm text-gray category">people</a>
                                                        <a href="#" class="text-sm text-gray category">travel</a>
                                                    </div>
                                                    <a href="#" class="text-md text-dark">
                                                        Trip that you'll never
                                                        ever
                                                        forget
                                                    </a>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="new-post">
                                            <div class="row">
                                                <!-- Two Columns -->
                                                <div class="col-4-lg post-image">
                                                    <img src="./assets/images/5.jpg" alt="latest post" class="fluid">
                                                </div>
                                                <div class="col-8-lg post-title">
                                                    <div class="cat">
                                                        <a href="#" class="text-sm text-gray category">people</a>
                                                        <a href="#" class="text-sm text-gray category">travel</a>
                                                    </div>
                                                    <a href="#" class="text-md text-dark">
                                                        Trip that you'll never
                                                        ever
                                                        forget
                                                    </a>
                                                </div>
                                            </div>
                                        </article>


                                    </div>
                                </section>
                                <!-- End Latest Post Section -->
                                <!-- Search Area -->
                                <section class="search-area">
                                    <div class="search">
                                        <h3 class="text-md text-dark">
                                            Search
                                        </h3>
                                        <form action="" class="form-group">
                                            <input type="search" class="input-control mr-sm-2" placeholder="search">
                                            <button class="btn btn-submit" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </section>
                                <!-- End Search Area -->
                                <!-- Popular Tags -->
                                <section class="popular-tags">
                                    <h4 class="text-md">
                                        Popular Tags
                                    </h4>
                                    <div class="tags flex flex-row flex-wrap">
                                        <a href="#"><span>Camera</span></a>
                                        <a href="#"><span>Bike</span></a>
                                        <a href="#"><span>Craft</span></a>
                                        <a href="#"><span>Photography</span></a>
                                        <a href="#"><span>Article</span></a>
                                        <a href="#"><span>Events</span></a>
                                        <a href="#"><span>Driving</span></a>
                                        <a href="#"><span>Wordpress</span></a>
                                    </div>
                                </section>
                                <!-- End Popular Tags -->

                            </aside>

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

