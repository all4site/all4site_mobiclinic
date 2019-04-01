<?php

function afs_enqueue()
{
		wp_enqueue_style('afs_source_css', get_template_directory_uri() . '/css/main.css');
		wp_enqueue_style('afs_source_css_normalize', get_template_directory_uri() . '/css/normalize.css');
		wp_enqueue_style('afs_source_css_fawesome', get_template_directory_uri() . '/css/fontawesome-all.css');
		wp_enqueue_style('afs_source_css_humburger', get_template_directory_uri() . '/css/hamburgers.css');

		wp_enqueue_script('afs_js_main', get_template_directory_uri() . '/js/main.js', array('jquery'));
		wp_enqueue_script('afs_js_menu', get_template_directory_uri() . '/js/menu.js', array('jquery'));

}

function afs_jquery_register()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', ('http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'), false, null, true);
        wp_enqueue_script('jquery');
    }
}