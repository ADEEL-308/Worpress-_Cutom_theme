<?php 

    $paged= get_query_var( 'paged') ? get_query_var( 'paged' ):1;

    $args = array(

        'post_type'=>'post',
        'order' => 'DESC',
        'post_per_page' =>6,
        'date_query' =>array(
            'after' => '-30 days',
            'column' => 'post_date'
        ),
        'paged' => $paged
    );

    $loop = new WP_Query($args);


?>


<?php $count = 1;?>
<?php if($loop -> have_posts()):?>
<?php while($loop -> have_posts()): $loop -> the_post(  )?>
<?php if($count % 2): ?>
<div class="column">
    <div class="post-image">
        <?php if(has_post_thumbnail()): ?>
            <img src="<?php echo get_the_post_thumbnail_url( ); ?>" alt="recent-post" class="fluid">
            <?php endif;?>
    </div>
        <?php else:?>
    <div class="post-image">
            <?php if(has_post_thumbnail()): ?>
                <img src="<?php echo get_the_post_thumbnail_url( ); ?>" alt="recent-post" class="fluid">
                <?php endif;?>
    </div>
</div>
        
        
<?php endif;?>
<?php $count++;?>
<?php endwhile;?>
<?php endif;?>
<?php 
    wp_reset_query(  );
    wp_reset_postdata(  );
?>
<?php ?>







<!-- <div class="column">
                            <div class="post-image">
                                <img src="./assets/images/2.jpg" alt="recent-post" class="fluid">
                            </div>
                            <div class="post-image">
                                <img src="./assets/images/3.jpg" alt="recent-post" class="fluid">
                            </div>
</div>                        
<div class="column">
                            <div class="post-image">
                                <img src="./assets/images/4.jpg" alt="recent-post" class="fluid">
                            </div>
                            <div class="post-image">
                                <img src="./assets/images/5.jpg" alt="recent-post" class="fluid">
                            </div>
</div>
<div class="column">
                            <div class="post-image">
                                <img src="./assets/images/6.jpg" alt="recent-post" class="fluid">
                            </div>

</div> -->