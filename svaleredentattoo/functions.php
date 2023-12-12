<?php

// Load Stylesheets
function load_css()
{

		wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all' );
		wp_enqueue_style('main');
	
}
add_action('wp_enqueue_scripts','load_css');

// Theme Options
add_theme_support('menus');
add_theme_support('widgets');


// Menus
register_nav_menus(

    array(

        'top-menu' => 'Top Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )

);

// Widgets

function my_sidebar() {

    register_sidebar(

        array(

                'name' => 'Page Sidebar',
                'id' => 'page-sidebar',
                'before_widget' => '',
                'after_widget' => '',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>'

        )

);

}
add_action('widgets_init', 'my_sidebar');


