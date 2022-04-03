<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <?php do_action('storefront_before_site'); ?>

    <div id="page" class="hfeed site">
        <?php do_action('storefront_before_header'); ?>

        <header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">

            <div id="SearchBar" class="col-full">
                <!-- Search Bar -->

                <div id="searchBarInput" class="">

                    <?php get_product_search_form(); ?>


                </div>

                <!-- SantaGotGeek Type Logo -->
                <div id="searchBarImage" class="">
                    <a href="href=<?php echo home_url(); ?>">

                        <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                            echo bloginfo('title');
                        }
                        ?>



                    </a>
                </div>

                <!-- SantaGotGeek Login Bar -->
                <div id="loginBar" class="">
                    <?php if (class_exists("Woocommerce")) : ?>

                        <?php if (is_user_logged_in()) : ?>

                            <a class="btn btn-primary" href="<?php echo get_permalink(get_option("woocommerce_myaccount_page_id")); ?>" style="margin-left: 0.5rem; background-color: #65BF21; color: white; border: none;">My Account
                            </a>

                            <a class="btn btn-primary" href="<?php echo wp_logout_url(get_permalink(get_option("woocommerce_myaccount_page_id"))); ?>" style="margin-left: 0.5rem; background-color: #EA0102; color: white; border: none;">Logout
                            </a>

                        <?php else : ?>

                            <a href="<?php echo get_permalink(get_option("woocommerce_myaccount_page_id")); ?>">Login/Register</a>

                        <?php endif; ?>

                    <?php endif; ?>
                </div>

            </div>

            <?php
            /**
             * Functions hooked into storefront_header action
             *
             * @hooked storefront_header_container                 - 0
             * @hooked storefront_skip_links                       - 5
             * @hooked storefront_social_icons                     - 10
             * @hooked storefront_site_branding                    - 20
             * @hooked storefront_secondary_navigation             - 30
             * @hooked storefront_product_search                   - 40
             * @hooked storefront_header_container_close           - 41
             * @hooked storefront_primary_navigation_wrapper       - 42
             * @hooked storefront_primary_navigation               - 50
             * @hooked storefront_header_cart                      - 60
             * @hooked storefront_primary_navigation_wrapper_close - 68
             */
            do_action('storefront_header');
            ?>

        </header><!-- #masthead -->

        <?php
        /**
         * Functions hooked in to storefront_before_content
         *
         * @hooked storefront_header_widget_region - 10
         * @hooked woocommerce_breadcrumb - 10
         */
        do_action('storefront_before_content');
        ?>

        <div id="content" class="site-content" tabindex="-1">
            <div class="col-full">

                <?php
                do_action('storefront_content_top');
