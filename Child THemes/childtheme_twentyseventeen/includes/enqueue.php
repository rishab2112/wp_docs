<?php

// Import Style Sheets
function import_styles(){
	
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' ); 

    wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array() );

}

// Import Scripts
function import_scripts(){
	
	wp_enqueue_script( 'jquery-3.2.1.min', get_stylesheet_directory_uri() . '/js/jquery-3.2.1.min.js' );
  	wp_enqueue_script( 'bootstrap.min', get_stylesheet_directory_uri() . '/js/bootstrap.min.js' );
    
   
	// Register Script
	wp_register_script( 'scripts', get_stylesheet_directory_uri()."/js/script.js" );

	// Enqueue Script
	wp_enqueue_script( 'scripts' );

}