
    </main>
    <!-- End Main Area -->

    <!-- Start Footer Area -->
    <footer class="footer-area">
        <div class="row">
            <div class="col-4-lg col-4-md col-12-sm">
                <!-- About Me -->
                <section class="about-me">
                    <div class="site-logo">
                        <!-- LOGO -->
                         <?php 
                    
                    if(function_exists('the_custom_logo')){
                        
                        the_custom_logo();
                    }
                    else{

                        bloginfo('name'); 

                    }
                    
                    
                    
                    
                    ?>

                    </div>
                    <p class="para">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut totam doloremque adipisci suscipit
                        nisi ex.
                    </p>
                    <div class="social-media">
                        <a href="#" class="text-primary"><span class="fab fa-facebook-f"></span></a>
                        <a href="#" class="text-primary"><span class="fab fa-instagram"></span></a>
                        <a href="#" class="text-primary"><span class="fab fa-twitter"></span></a>
                        <a href="#" class="text-primary"><span class="fab fa-youtube"></span></a>
                    </div>
                </section>
            </div>
            <div class="col-4-lg col-4-md col-12-sm">
                <!-- Recent Post Area -->
                <section class="recent-post">
                    <a href="" class="text-md text-light">
                        Recent Post
                    </a>
                    <div class="posts flex flex-row flex-wrap">
                        <!-- Get template file recent post -->
                        <?php 
                            get_template_part( 'templates/temp/recent','post' );

                        ?>
                    </div>
                </section>
            </div>
            <div class="col-4-lg col-4-md col-12-sm">
                <!-- Popular Tags -->
                <section class="popular-tags">
                    <a href="" class="text-md text-light">Popular Tags</a>
                    <div class="tags flex flex-row flex-wrap">
                        
                        <?php get_template_part('templates/temp/post' ,'tags') ?>
                        <!-- <a href="#"><span>Camera</span></a>
                        <a href="#"><span>Bike</span></a>
                        <a href="#"><span>Craft</span></a>
                        <a href="#"><span>Photography</span></a>
                        <a href="#"><span>Article</span></a>
                        <a href="#"><span>Events</span></a>
                        <a href="#"><span>Driving</span></a>
                        <a href="#"><span>Wordpress</span></a> -->

                    </div>
                </section>
            </div>
        </div>
            <div class="rights text-center text-gray">
                Wordpress Theme By <a href="<?php echo home_url( '/');?>" class="text-primary">Code Chaudhry</a>&copy;<?php the_date('Y'); ?>
            </div>
    </footer>
    <!-- End Footer Area -->

    <!-- Include Jquery Script path -->

    <!-- Include Script path -->
   
</body>

</html>