<?php

function fairoak_files(){
    wp_enqueue_script('jquery','code.jquery.com/jquery-3.2.1.slim.min.js',NULL,'1.0',false);
    wp_enqueue_script('cloudflare','//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',NULL,'1.0',true);
    wp_enqueue_script('bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',NULL,'1.0',true);
    wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Nunito');
    wp_enqueue_style('fairoak_main_styles',get_stylesheet_uri());

};


add_action('wp_enqueue_scripts','fairoak_files');

function fairoak_features(){
    add_theme_support('title-tag');

};





