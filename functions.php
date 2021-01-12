<?php 
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page();
    }
?>
