<?php
/**
 * Footer Template
 * 
 * @package koka
 */
?>
 

</main>
<?php
        if(has_nav_menu('footer-menu')){
            wp_nav_menu(array('theme_loaction' =>'footer-menu'));
        }
    ?>
<footer>
    <p>&copy;Copyright <a href="<?php bloginfo( 'url'); ?>"><?php bloginfo( 'name'); ?></a>.All Right Reserved</p>
</footer>

</body>
</html>