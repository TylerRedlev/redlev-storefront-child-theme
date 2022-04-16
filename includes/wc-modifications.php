<?php

// Redirecting WooCommerce templates




function load_template_layout()
{

    if (is_front_page() || is_tax() || is_product() || is_shop()) {
        //true

        // remove woocommerce sidebar

        remove_action("woocommerce_sidebar", "woocommerce_get_sidebar");

        //remove_action("woocommerce_before_main_content", "storefront_before_content", 10);

        //remove_action("storefront_sidebar", "storefront_get_sidebar");

    }
}


add_action("template_redirect", "load_template_layout");




function product_after_thumbnail_wrapper_open()
{

    //Open wrapper after thumbnail
    echo '<div class="woo-after-thumbnail-wrapper">';
}

add_action('woocommerce_before_shop_loop_item_title', 'product_after_thumbnail_wrapper_open', 15);



function display_desc_in_product_archives()
{

    //Ecerpt container open
    echo '<div class="woo-excerpt-wrap">';

    //the_excerpt();
    echo get_the_excerpt();

    //Ecerpt container close
    echo '</div>';
}
add_action('woocommerce_before_shop_loop_item_title', 'display_desc_in_product_archives', 20);


function product_after_thumbnail_wrapper_close()
{

    //Close wrapper after thumbnail
    echo '</div>';
}

add_action('woocommerce_after_shop_loop_item', 'product_after_thumbnail_wrapper_close', 7);



 // Change the Number of WooCommerce Products Displayed Per Page
// add_filter( 'loop_shop_per_page', 'lw_loop_shop_per_page', 30 );

// function lw_loop_shop_per_page( $products ) {
//  $products = 30;
//  return $products;
// }
