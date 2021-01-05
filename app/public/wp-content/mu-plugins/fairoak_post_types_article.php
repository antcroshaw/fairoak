<?php

function fairoak_post_types(){
    register_post_type('article',array(
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title','editor','excerpt'),
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
	register_post_type('portfolio',array(
		'public' => true,
		'show_in_rest' => true,
		'supports' => array('title','editor','excerpt'),
		'has_archive' => true,
		'rewrite'=>array('slug'=>'portfolios'),
		'menu_icon'=> 'dashicons-images-alt',
		'labels' => array(
			'name'=>'Portfolios',
			'add_new_item'=>'Add New Portfolio',
			'edit_item' => 'Edit Portfolio',
			'all_items' => 'All Portfolios',
			'singular_name'=>'Portfolio',
		),

	));
};

add_action('init','fairoak_post_types');

?>