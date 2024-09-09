<?php
function test(){
    wp_enqueue_style('secondassignment', get_stylesheet_uri()); // Enqueues the main stylesheet
    // Or if you're trying to add a specific CSS file:
    // wp_enqueue_style('project', get_stylesheet_directory_uri() . '/style.css');



    wp_enqueue_script('main.js', get_theme_file_uri('./js/main.js'), NULL, '1.0');
}
add_action('wp_enqueue_scripts', 'test');

function myproject_features(){
    register_nav_menus(array(
'primary'=>'Main menu',
'secondary'=>'footer menu',
'useful'=>'useful links',

    ));
    add_theme_support('custom-logo');// logo registration
    add_theme_support('post-thumbnails');// feature image or thumbnail registration
   
}
add_action('after_setup_theme','myproject_features') ;



add_action('after_setup_theme', 'mytheme_setup');
function mytheme_setup() {
    add_theme_support('woocommerce');
}


// Redirect to checkout after adding to cart
add_filter('woocommerce_add_to_cart_redirect', 'custom_redirect_after_add_to_cart');
function custom_redirect_after_add_to_cart($url) {
    // Change the URL to your checkout page URL
    $checkout_url = wc_get_checkout_url();
    return $checkout_url;
}
