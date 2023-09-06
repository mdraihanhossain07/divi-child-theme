<?php

if (!defined('ABSPATH')) die();

function divi_child_theme_enqueue_styles() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
    // wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, true);

}

add_action( 'wp_enqueue_scripts', 'divi_child_theme_enqueue_styles' );
//Year

function func_year( $atts ) {

 return date("Y");

}

add_shortcode( 'year','func_year' );

