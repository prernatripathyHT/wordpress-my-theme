<?php


//1. LOAD stylesheets
function load_css(){
    // bootstrap css
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');


    // custom css
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'load_css');



//2. LOAD javascript
function load_js(){

    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . 'js/bootstrap.min.js', 'jquery', false, true );
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');



//3. Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


//4. Menus (Menu locations)
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )
);



//5. Custom Image Sizes
add_image_size('blog-large', 800,400, false);
add_image_size('blog-small', 300,200, true);




//6. Register Sidebar for Widgets
function my_sidebars(){

    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title" >',
            'after_title' => '</h4>'
        )
        );

        register_sidebar(
            array(
                'name' => 'Blog Sidebar',
                'id' => 'blog-sidebar',
                'before_title' => '<h4 class="widget-title" >',
                'after_title' => '</h4>'
            )
            );

}
add_action('widgets_init', 'my_sidebars');








//7. Custom Post Type
function my_first_post_type(){

    $args = array(
        'labels' => array(
            'name' => 'Cars',
            'singular-name' => 'Car'
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array('title', 'editor', 'thumbnail'),
        // 'rewrite' => array('slug' => 'my-cars') 

    );
    register_post_type('cars', $args);

}

add_action('init', 'my_first_post_type');






function my_first_taxonomy(){

    $args = array(
        'labels' => array(
            'name' => 'Brands',
            'singular-name' => 'Brand'
        ),
        'public' => true,
        'hierarchical' => true,

    );

    register_taxonomy('brands',array('cars'), $args);

}

add_action('init', 'my_first_taxonomy');