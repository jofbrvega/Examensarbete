<?php

add_theme_support( 'post-thumbnails' );

add_action('template_include', function ($template) {
    if (get_query_var('evenemang') == false || get_query_var('evenemang') == '') {
        return $template;
    } 
} );
