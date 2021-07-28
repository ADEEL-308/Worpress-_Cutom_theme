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
                            <?php if(have_posts()):?>
<?php while(have_posts()):the_post();?>

<div class="article">
    <article class="single-post"> 
    <div class="post-title">
                <a href="<?php the_permalink();?>">
                    <span class="text-lg text-dark">
                        <?php echo the_title();?>
                    </span>
                </a>
            </div>
        <div class="post-thumbnail">
            <?php 
                if(has_post_thumbnail()):
            ?>
            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="Article_image" class='fluid'>
            <?php endif;?>
         
        </div>
        <div class="post-content">
                <p class="para">
                    <?php echo get_the_content();?>
                </p>
        </div>
        
                                        
    </article>
</div>

<?php endwhile;?>
<?php  else:?>
<?php echo wpautop( 'Sorry, No posts were found ' );?>
<?php endif; ?>
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

