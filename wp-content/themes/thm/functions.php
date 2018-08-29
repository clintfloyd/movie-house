<?php

define("site_url", get_template_directory_uri());

function thm_scripts() {
	wp_enqueue_style( 'bootstrap-reboot', get_template_directory_uri() . '/css/bootstrap.reboot.css');
	wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . '/css/bootstrap.grid.css');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'twentyfifteen-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'thm_scripts' );