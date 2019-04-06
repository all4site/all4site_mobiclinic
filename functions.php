<?php
//INCLUDE
require get_template_directory(). '/include/style.php';
require get_template_directory(). '/include/menu-setup.php';
require get_template_directory(). '/include/pagination.php';
require get_template_directory(). '/include/views-function.php';
require get_template_directory(). '/include/posttype_doctors.php';
require get_template_directory(). '/include/remove_submenu.php';
require get_template_directory(). '/include/auto_add_category.php';
//require get_template_directory(). '/include/filter_children_category.php';

// Hooks
add_action('wp_enqueue_scripts', 'afs_enqueue');
add_action('init', 'afs_register_menu');
add_action('init', 'afs_add_posttype_doctors');
add_action( 'wp_ajax_afswh', 'afs_screenwh_function' );
add_action( 'wp_ajax_nopriv_afswh', 'afs_screenwh_function' );
add_action('admin_menu', 'afs_remove_submenu_posttype');
add_action('save_post', 'afs_category_add');

//FILTERS
//add_filter( 'template_include', 'afs_filter_cildren_category', 99 );

//Setup
add_theme_support('post-thumbnails');
