<?php 
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('html5');

    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page();
    }

    add_filter( 'comment_form_fields', 'move_comment_field' );
    function move_comment_field( $fields ) {
        $comment_field = $fields['comment'];
        unset( $fields['comment'] );
        $fields['comment'] = $comment_field;
        return $fields;
    }
?>
