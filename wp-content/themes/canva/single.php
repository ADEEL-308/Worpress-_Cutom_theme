<?php

/** 
 * Main Template File
 * 
 * @package canva
 * 
 * */
get_header();
?>

<div class="content">
   <?php esc_html_e('Single Post','canva'); ?>
</div>

<?php
get_footer();