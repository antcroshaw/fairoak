<?php

function fairoak_files(){

    wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Nunito');
    wp_enqueue_style('fairoak_main_styles',get_stylesheet_uri());

};


add_action('wp_enqueue_scripts','fairoak_files');

function fairoak_features(){
    add_theme_support('title-tag');

};





