<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main site-blog-main" role="main">

        <h2 class="blog-page-categories-title">&#127876; Categories &#127876;</h2>


        <?php
        while (have_posts()) :
            the_post();
            do_action('storefront_page_before');
        ?>

            <!-- Categories menu -->
            <?php
            wp_nav_menu(array(
                "theme_location" => "redlev_wp_blog_page_category_menu_id",
                'container'         => 'ul',
                "menu_id" => 'blog-page-category-menu',
                "menu_class" => ''
            ));
            ?>
            <!-- Categories menu end-->

            <!-- Latest posts headline -->

            <div class="headline">
                <h2>LATEST 7 POSTS</h2>
            </div>

            <!-- Latest posts articles -->
            <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 7, // Number of recent posts thumbnails to display
                'post_status' => 'publish' // Show only the published posts
            ));
            foreach ($recent_posts as $post_item) : ?>

                <article class="blog-page-article-container">

                    <div class="blog-page-thumbnail-container">
                        <a href="<?php echo get_permalink($post_item['ID']) ?>">
                            <?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?>

                        </a>
                    </div>

                    <div class="blog-page-short-content-container">

                        <header class="blog-page-entry-header">
                            <h3 class="blog-page-post-title"><?php echo $post_item['post_title']; ?></h3>
                            <span class="posted-on">Posted on
                                <a href="<?php echo get_permalink($post_item['ID']) ?>" rel="bookmark">
                                    <time datetime="<?php echo get_the_date('c', $post_item['ID']); ?>" itemprop="datePublished">
                                        <?php echo get_the_date('dS M Y', $post_item['ID']); ?></time>
                                </a>
                            </span>

                            <span class="blog-page-post-author">by
                                <a href="http://template-wp.local/author/themedemos/" rel="author">
                                    <?php echo get_avatar(get_the_author_meta($post_item['ID']), 20); ?>
                                    <?php echo get_the_author($post_item['ID']);   ?>

                                </a>
                            </span>

                        </header>



                        <div class="blog-page-entry-content">

                            <?php echo mb_strimwidth(get_the_excerpt($post_item['ID']), 0, 220, '...');
                            //get_the_excerpt($post_item['ID']);  
                            ?></h4>

                            <?php  //echo mb_strimwidth($post_item['post_content'], 0, 250, '...')
                            ?>

                            <a href="<?php echo get_permalink($post_item['ID']); ?>">...Read More!</a>

                        </div>

                    </div>

                </article>

            <?php endforeach; ?>


            <!-- Top articles headline -->
            <div class="headline">
                <h2>TOP ARTICLES</h2>
            </div>

            <h2 class="blog-page-tags-title">&#127873; Tags &#127873;</h2>

            <!-- Tags menu -->
            <?php
            wp_nav_menu(array(
                "theme_location" => "redlev_wp_blog_page_tags_menu_id",
                'container'         => 'ul',
                "menu_id" => 'blog-page-tags-menu',
                "menu_class" => ''
            ));
            ?>
            <!-- Tags menu end-->

        <?php




            /**
             * Functions hooked in to storefront_page_after action
             *
             * @hooked storefront_display_comments - 10
             */
            do_action('storefront_page_after');

        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
do_action('storefront_sidebar');
get_footer();
