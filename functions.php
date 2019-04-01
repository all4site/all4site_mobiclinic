<?php
//INCLUDE
require get_template_directory(). '/include/style.php';
require get_template_directory(). '/include/menu-setup.php';
require get_template_directory(). '/include/pagination.php';
require get_template_directory(). '/include/views-function.php';

// Hooks
add_action('wp_enqueue_scripts', 'afs_enqueue');
add_action('init', 'afs_register_menu');


add_action( 'wp_ajax_afswh', 'afs_screenwh_function' );
add_action( 'wp_ajax_nopriv_afswh', 'afs_screenwh_function' );


//Setup
add_theme_support('post-thumbnails');