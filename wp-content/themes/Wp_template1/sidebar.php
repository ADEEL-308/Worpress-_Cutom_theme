<aside class="sidebar">
                                <!-- Latest Post Section -->
                                <section class="latest-post">
                                    <a href="" class="text-md text-dark">Latest Post</a>
                                    <div class="flex flex-column">
                                        <!-- get template file using get template part -->
                                        <?php get_template_part( 'templates/temp/sidebar','latest-post'); ?>


                                    </div>
                                </section>
                                <!-- End Latest Post Section -->
                                <!-- Search Area -->
                                <section class="search-area">
                                    <div class="search">
                                        <h3 class="text-md text-dark">
                                            Search
                                        </h3>
                                        <!-- <form action="" class="form-group">
                                            <input type="search" class="input-control mr-sm-2" placeholder="search">
                                            <button class="btn btn-submit" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </form> -->
                                        <?php get_search_form(); ?>
                                    </div>
                                </section>
                                <!-- End Search Area -->
                                <!-- Popular Tags -->
                                <section class="popular-tags">
                                    <h4 class="text-md">
                                        Popular Tags
                                    </h4>
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
                                <!-- End Popular Tags -->

                            </aside>