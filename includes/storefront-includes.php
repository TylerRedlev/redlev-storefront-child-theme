<?php

// Layouts

function remove_woocommerce_action_hooks(){
    //remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );

    //remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );
    
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
    
    
    
    
    remove_action( 'woocommerce_before_shop_loop', 'storefront_sorting_wrapper',  10);

    remove_action( 'woocommerce_before_shop_loop', 'storefront_woocommerce_pagination',  30);
}

add_action("after_setup_theme", "remove_woocommerce_action_hooks");

function remove_woo_elements(){
    // Remove the product description
    //remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
    //remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );

  }
  add_action('wp', 'remove_woo_elements');


?>