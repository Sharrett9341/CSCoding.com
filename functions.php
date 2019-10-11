<?php 

// adding the CSS and JS files


function cs_setup(){
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&display=swap');
    wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css');
    wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, '1.0.0', true);
	

}

add_action('wp_enqueue_scripts', 'cs_setup');

// Adding Theme Support 

function cs_init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list', 'comment-form', 'search-form') 
    );
}

add_action('after_setup_theme', 'cs_init');

//Projects Post Type 

function cs_custom_post_type(){
	register_post_type('project',
	array(
		'rewrite' => array('slug' => 'project'),
		'labels' => array(
			'name' => 'Project',
			'singular_name' => 'Project',
			'add_new_item' => 'Add New Project',
			'edit_item' => 'Edit Project'
		),
		'menu-icon' => 'dashicons-clipboard',
		'public' => true,
		'has_archive' => true,
		'supports' =>  array(
			'title', 'thumbnail', 'editor', 'excerpt', 'comments'
	  )
	)
  );
}

add_action('init', 'cs_custom_post_type');




//Sidebar In Dashboard

function cs_widgets(){
	register_sidebar(
		array(
			'name' => 'Main Sidebar',
			'id' => 'main_sidebar',
			'before_title' => '<h3>',
			'after_title' => '</h3>'

		)
	);
}

add_action('widgets_init', 'cs_widgets');


//filter

function search_filter($query){
	if($query->is_search()){
		$query->set('post_type', array('post','project' ));
	}
}

add_filter('pre_get_post', 'search_filter');