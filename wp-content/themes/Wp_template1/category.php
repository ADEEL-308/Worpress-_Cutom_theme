<?php

// Get header file
get_header('color');

?>
        
        
        <!-- Banner Area -->
        
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

