<?php

// Load Scripts Function

use Automattic\WooCommerce\Admin\Features\Settings;

function redlev_storefront_theme_load_scripts(){

    // css files

    //wp_enqueue_style("normalize", get_template_directory_uri(). "/styles/normalize.css", array(), "1.0", "all");

    wp_enqueue_style("style",  get_stylesheet_uri(), array(), "1.0", "all");

    // fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald:wght@400;700&display=swap', false);
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap', false);

    // font-family: 'Open Sans', sans-serif;
    // font-family: 'Oswald', sans-serif;
    // font-family: 'Open Sans Condensed', sans-serif;

    //font awesome icons
    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.15.3/css/all.css' );
}

//Adding styles and scripts with action
add_action("wp_enqueue_scripts", "redlev_storefront_theme_load_scripts");


// Adding nav menus

function redlev_storefront_wp_theme_nav_config(){

    //registering the nav menus
    register_nav_menus(array(
        "sgg_wp_primary_menu_id" => "SGG Primary Menu (Top Menu)",
        "sgg_wp_category_menu_id" => "SGG Category Chooser",
        "sgg_wp_sidebar_menu_id" => "SGG Sidebar",
        "sgg_wp_footer_menu_id" => "SGG Footer Menu",
        "sgg_wp_aux_footer_menu_id" => "SGG Footer Auxiliary Menu"
    ));

    // add theme support for thumbnails
    add_theme_support("post-thumbnails");

    

    //Add custom logo theme support
    add_theme_support("custom-logo", [
        "height" => 100,
        "width" => 450,
        "flex_height" => true,
        "flex_width" => true        
    ]);
}
//Add nav reg'strat'ons and theme support
add_action("after_setup_theme", "redlev_storefront_wp_theme_nav_config");

// adding classes to li 

function redlev_storefront_wp_theme_add_li_class($classes, $item, $args){
    $classes[] = "nav-item sgg-li-class";
    return $classes;

}

add_filter("nav_menu_css_class", "redlev_storefront_wp_theme_add_li_class", 1, 3);

// adding classes to anchor links

function redlev_storefront_wp_theme_add_anchor_links($classes, $item, $args){
    $classes["class"] = "nav-link sgg-link-class";
    return $classes;
}

add_filter("nav_menu_link_attributes", "redlev_storefront_wp_theme_add_anchor_links", 1, 3);


function redlev_storefront_wp_theme_load_wp_customizer($wp_customize) {
    /// customizer code

    //adding section
    $wp_customize -> add_section("sec_copyright", array(
        "title" => "Copyright Section",
        "description" => "This is a copyright section"
        

    ));

    //adding settings/field
    $wp_customize -> add_setting("set_copyright", array(
        "type" => "theme_mod",
        "default" => "",
        "sanitize_callback" => "sanitize_text_field"
    ));

    //add control
    $wp_customize -> add_control("set_copyright_control", array(
        "label" => "Copyright",
        "description" => "Please fill the copyright text",
        "section" => "sec_copyright",
        "type" => "text",
        'settings' => "set_copyright"
    ));

    /*----------------------------------------------------------------*/


    

    //adding section
    $wp_customize -> add_section("sec_sociallinks", array(
        "title" => "Social Links Section",
        "description" => "This is the social links section where you add links to your social media accounts"
        

    ));

    //facebook link

    $wp_customize->add_setting('facebook_link', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod'
  
    ));
  
    $wp_customize->add_control('facebook_link_control', array(
        'label'      => "Facebook Link",
        'section'    => 'sec_sociallinks',
        'settings'   => 'facebook_link'
    ));

    //instagram link
    $wp_customize->add_setting('insta_link', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod'
  
    ));
  
    $wp_customize->add_control('insta_link_control', array(
        'label'      => 'Instagram Link',
        'section'    => 'sec_sociallinks',
        'settings'   => 'insta_link',
    ));


    //twitter link
    $wp_customize->add_setting('twitter_link', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod'
  
    ));
  
    $wp_customize->add_control('twitter_link_control', array(
        'label'      => 'Twitter Link',
        'section'    => 'sec_sociallinks',
        'settings'   => 'twitter_link',
    ));

    //tiktok link
    $wp_customize->add_setting('tiktok_link', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod'
  
    ));
  
    $wp_customize->add_control('tiktok_link_control', array(
        'label'      => 'Tiktok Link',
        'section'    => 'sec_sociallinks',
        'settings'   => 'tiktok_link'
    ));

}

add_action("customize_register", "redlev_storefront_wp_theme_load_wp_customizer");





include 'includes/storefront-includes.php';


?>