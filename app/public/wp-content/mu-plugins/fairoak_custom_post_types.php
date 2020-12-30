<?php

function fairoak_post_types(){
    register_post_type('article',array(
        'public' => true,
        'has_archive' => true,
        'rewrite'=>array('slug'=>'articles'),
        'menu_icon'=> 'dashicons-media-text',
        'labels' => array(
            'name'=>'Articles',
            'add_new_item'=>'Add New Article',
            'edit_item' => 'Edit Article',
            'all_items' => 'All Articles',
            'singular_name'=>'Article',
        ),

    ));
};

add_action('init','fairoak_post_types');

?>