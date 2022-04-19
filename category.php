<?php

/**
 * Category template
 *
 * @package storefront
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main site-blog-main" role="main">


        <h2 class="category-page-categories-title">&#127876; Categories &#127876;</h2>

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

        <header class="page-header">
            <?php
            the_archive_title('<h1 class="category-page-title"> ⭐ ', ' ⭐</h1>');

            the_archive_description('<div class="taxonomy-description">', '</div>');
            ?>
        </header><!-- .page-header -->

        <?php
        while (have_posts()) :
            the_post();
            do_action('storefront_page_before');
        ?>
 

<?php  ?>

            <article class="blog-page-article-container">

                <div class="blog-page-thumbnail-container">
                    <a href="<?php echo get_permalink(); ?>">
                        <?php echo get_the_post_thumbnail(); ?>

                    </a>
                </div>

                <div class="blog-page-short-content-container">

                    <header class="blog-page-entry-header">

                    <a href="<?php echo get_permalink() ?>">
                            <h3 class="blog-page-post-title">
                                <?php echo the_title(); ?></h3>
                        </a>

                        <span class="posted-on">Posted on
                            <a href="<?php echo get_permalink() ?>" rel="bookmark">
                                <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished">
                                    <?php echo get_the_date('dS M Y'); ?></time>
                            </a>
                        </span>

                        <span class="blog-page-post-author">by
                            <a href="http://template-wp.local/author/themedemos/" rel="author">
                                <?php echo get_avatar(get_the_author_meta(), 20); ?>
                                <?php echo get_the_author();   ?>

                            </a>
                        </span>

                    </header>



                    <div class="blog-page-entry-content">

                        <?php echo mb_strimwidth(get_the_excerpt(), 0, 220, '...');
                        //get_the_excerpt($post_item['ID']);  
                        ?></h4>

                        <?php  //echo mb_strimwidth($post_item['post_content'], 0, 250, '...')
                        ?>

                        <a href="<?php echo get_permalink(); ?>">...Read More!</a>

                    </div>

                    <aside class="entry-taxonomy">
                        <div class="cat-links">

                            <p>Categories:
                                <?php $post_categories = wp_get_post_categories(get_the_ID());
                                foreach ($post_categories as $category) :

                                ?>
                                    <a href=""> <?php echo get_cat_name($category); ?> </a>
                                <?php
                                    if ($category == end($post_categories)) {
                                        echo ' ';
                                    } else {
                                        echo ',';
                                    }

                                endforeach; ?>
                            </p>

                        </div>

                        <div class="tags-links">
                            <p>Tags:
                                <?php $post_tags = get_the_tags(get_the_ID());
                                foreach ($post_tags as $tag) :
                                ?>
                                    <a href=""> <?php echo $tag->name; ?> </a>

                                <?php
                                    if ($tag == end($post_tags)) {
                                        echo '';
                                    } else {
                                        echo ',';
                                    }

                                endforeach; ?>
                            </p>
                        </div>
                    </aside>

                </div>

            </article>

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
