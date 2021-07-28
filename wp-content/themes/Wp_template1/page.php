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
                        <div class="col-lg-12">
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
      
        <div class="post-content">
                <p class="para">
                    <?php echo get_the_content();?>
                </p>
        </div>
        
                                        
    </article>
</div>

<?php endwhile;?>

<?php echo wpautop( 'Sorry, No posts were found ' );?>

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

