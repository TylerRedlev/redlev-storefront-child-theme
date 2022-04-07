<?php

// Layouts

function remove_woocommerce_action_hooks(){

    remove_action("storefront_header", "storefront_header_cart", 60);
    
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
    
    remove_action( 'woocommerce_before_shop_loop', 'storefront_sorting_wrapper',  10);

    remove_action( 'woocommerce_before_shop_loop', 'storefront_woocommerce_pagination',  30);

    remove_action("storefront_header", "storefront_product_search", 40);

    remove_action("storefront_header", "storefront_site_branding", 20);

    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_result_count',  20);

    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_catalog_ordering',  10);

    remove_action( 'storefront_header', 'storefront_primary_navigation',  50);

}

add_action("after_setup_theme", "remove_woocommerce_action_hooks");


function add_primary_navigation_menu(){
    echo '<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Primary Navigation">';
    
    wp_nav_menu(array(
        "theme_location" => "redlev_wp_primary_menu_id",
        'container'         => 'ul',
        //"items_wrap" => '<ul class="navbar-nav">%3$s</ul>',
        "menu_id" => 'redlevMainMenu',
        "menu_class" => ''
        //d-flex justify-content-between mx-auto
    ));

    echo '</nav>';
}

add_action("after_setup_theme", "add_primary_navigation_menu");


add_action( 'storefront_header', 'add_primary_navigation_menu',  50);
