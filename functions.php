<?php
//INCLUDE
require_once get_template_directory() . '/include/style.php';
require get_template_directory() . '/include/menu-setup.php';
require get_template_directory() . '/include/pagination.php';
require get_template_directory() . '/include/views-function.php';
require get_template_directory() . '/include/posttype_doctors.php';
require get_template_directory() . '/include/remove_submenu.php';
require get_template_directory() . '/include/auto_add_category.php';
require get_template_directory() . '/include/afs_pagination_customposttype.php';
require get_template_directory() . '/include/afs_rmove_menu_form_all.php';
require get_template_directory() . '/include/LastPages.php';
require get_template_directory() . '/include/thumbnail-size.php';


// Hooks
add_action('wp_enqueue_scripts', 'afs_enqueue');
add_action('init', 'afs_register_menu');
add_action('init', 'afs_add_posttype_doctors');
add_action('admin_menu', 'afs_remove_submenu_posttype');
add_action('save_post', 'afs_category_add');
add_action('pre_get_posts', 'afs_my_post_queries');
add_action('admin_init', 'afs_my_remove_menu_pages');

//FILTERS
  add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );
  add_filter('max_srcset_image_width', 'disable_wp_responsive_images');

//Setup
add_theme_support('post-thumbnails');

