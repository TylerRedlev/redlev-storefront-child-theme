<?php

// Layouts

function remove_woocommerce_action_hooks(){

    remove_action("storefront_header", "storefront_header_cart", 60);
    
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
    
    remove_action( 'woocommerce_before_shop_loop', 'storefront_sorting_wrapper',  10);

    remove_action( 'woocommerce_before_shop_loop', 'storefront_woocommerce_pagination',  30);

    remove_action("storefront_header", "storefront_product_search", 40);

    remove_action("storefront_header", "storefront_site_branding", 20);
}

add_action("after_setup_theme", "remove_woocommerce_action_hooks");
