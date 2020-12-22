<?php

function fairoak_files(){
    wp_enqueue_script('main-fairoak-js',get_theme_file_uri('/js/scripts-bundled.js'),NULL,'1.0',true);
    wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Nunito');
    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('fairoak_main_styles',get_stylesheet_uri());
};


add_action('wp_enqueue_scripts','fairoak_files');

function fairoak_features(){
    add_theme_support('title-tag');
};

add_action('after_setup_theme','fairoak_features');