<?php

function afs_enqueue() {
	wp_enqueue_style( 'afs_source_css_normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'afs_source_css_fawesome', get_template_directory_uri() . '/css/fontawesome-all.css' );
	wp_enqueue_style( 'afs_source_css_humburger', get_template_directory_uri() . '/css/hamburgers.css' );
	wp_enqueue_style( 'afs_source_css_slick', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'afs_source_css_slick__theme', get_template_directory_uri() . '/css/slick-theme.css' );
	wp_enqueue_style( 'afs_source_css_calendar', get_template_directory_uri() . '/css/datepicker.min.css' );
	wp_enqueue_style( 'afs_source_css', get_template_directory_uri() . '/css/main.css' );

	wp_enqueue_script( 'afs_js_slick', get_template_directory_uri() . '/js/slick.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'afs_js_calendar', get_template_directory_uri() . '/js/datepicker.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'afs_js_menu', get_template_directory_uri() . '/js/menu.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'afs_js_main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '', true );

}

function afs_jquery_reg() {
	if ( ! is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', ( 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js' ), false, null, true );
		wp_enqueue_script( 'jquery' );
	}
}
