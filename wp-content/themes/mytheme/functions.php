<?php
/* My theme functions */

// Theme Title
add_theme_support( 'title-tag' );

//Theme CSS and JS calling
add_action( 'wp_enqueue_scripts', 'sayem_css_js_enqueue_styles' );
function sayem_css_js_enqueue_styles() {
    

    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '6.6.2', 'all' );
    wp_enqueue_style( 'bootstrap' );

    wp_register_style( 'custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'custom' );
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '6.6.2', 'true');
    wp_enqueue_style( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0', 'true' );

    wp_enqueue_style( 'sayem-style', get_stylesheet_directory_uri() . '/style.css' );
} 

// Theme Logo
function sayem_customizer_register($wp_customize) {

    // Register a setting for the logo with a default image
    $wp_customize->add_setting('synex_logo', array(
        'default' => '', // Corrected
        'transport' => 'refresh',
    ));

    // Add the logo control to the customizer
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'synex_logo', array(
        'label' => 'Logo',
        'section' => 'title_tagline', // Adds this to the site identity section
        'settings' => 'synex_logo',
    )));
}
add_action('customize_register', 'sayem_customizer_register');


// Enable custom background support
function sayem_custom_background_setup() {
    add_theme_support('custom-background', array(
        'default-image' => '', // You can set a default background image here if you want
        'default-color' => 'ffffff', // Default background color (optional)
        'wp-head-callback' => '_custom_background_cb',
    ));
}
add_action('after_setup_theme', 'sayem_custom_background_setup');

