<?php

// Declaring WooCommerce Support
function wp_starter_woocommerce_support() {
add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'wp_starter_woocommerce_support' )

// optional WooCommerce theme settings
function wp_starter_woocommerce_support() {
add_theme_support( 'woocommerce', array(
    'thumbnail_image_width' => 150,
    'single_image_width'    => 300,

    'product_grid'          => array(
        'default_rows'    => 3,
        'min_rows'        => 2,
        'max_rows'        => 8,
        'default_columns' => 4,
        'min_columns'     => 2,
        'max_columns'     => 5,
    ),
) );
}

add_action( 'after_setup_theme', 'wp_starter_woocommerce_support' );


// WooCommerce Settings
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
