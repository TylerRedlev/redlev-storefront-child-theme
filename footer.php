<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->


	<?php do_action( 'storefront_before_footer' ); ?>

<footer style="background-color: #ffcc00;">
    <div class="container-content container row mx-auto" id="footerContainer">



        <!-- 
    ====================================
    =   SANTA FOOTER LOGO              =
    ==================================== 
-->

        <div class="col-lg-3 col-md-6 my-2 col-sm-12 d-flex justify-content-center" id="footerLogo">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();  ?>/assets/images/png/SGG-Type-and-Logo-Transparent-840x660.png" alt=""></a>
        </div>

        <!-- 
    ====================================
    =   FOOTER MENU WRAPPER            =
    ==================================== 
-->

        <div id="sggFooterMenuWrapper" class="col-lg-3 col-md-6 col-sm-12 justify-content-center mt-2">
            <nav>
                <?php wp_nav_menu(array(
                    "theme_location" => "sgg_wp_footer_menu_id",
                    "container" => '',
                    //"items_wrap" => '<ul class="navbar-nav">%3$s</ul>',
                    "menu_id" => 'sggFooterMenu',
                    "menu_class" => 'navbar-nav w-100'

                )) ?>
            </nav>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 mt-2 justify-content-center">
            <nav>
                <?php wp_nav_menu(array(
                    "theme_location" => "sgg_wp_aux_footer_menu_id",
                    "container" => '',

                    "menu_id" => 'sggFooterAuxMenu',
                    "menu_class" => 'navbar-nav w-100 text-center'
                    //"items_wrap" => '<nav class="navbar-nav">%3$s</nav>'

                )) ?>

            </nav>
        </div>


        <!-- 
    ====================================
    =   FOOTER SOCIAL COLUMN           =
    ==================================== 
-->

        <div id="footerSocialColumn" class="col-lg-3 col-md-6 col-sm-12 mt-2 text-center">
            <h5>
                &#128241;Follow us in social media&#128241;
            </h5>

            <div class="row text-center" id="socialIconWrapper">

                <div class="socialIconHalf row">



                    <!-- INSTAGRAM ICON -->
                    <div class="socialIcon">

                        <a href="<?php echo esc_url(get_theme_mod("insta_link")); ?>" class="instaLink">

                            <i class="fab fa-instagram"></i>

                            <!-- <img
                                src="<?php //echo get_template_directory_uri(); 
                                        ?>/assets/images/svg/social-icons/instagram.svg"
                                alt=""> -->

                        </a>

                    </div>

                    <!-- FACEBOOK ICON -->
                    <div class="socialIcon">

                        <a href="<?php echo esc_url(get_theme_mod("facebook_link")); ?>" class="facebookLink">

                            <i class="fab fa-facebook-f"></i>
                            <!-- <img src="<?php //echo get_template_directory_uri(); 
                                            ?>/assets/images/svg/social-icons/facebook-f.svg"
                            alt=""> -->

                        </a>
                    </div>
                </div>

                <div class="socialIconHalf row">

                    <!-- PINTEREST ICON -->
                    <div class="socialIcon ">
                        <a href="<?php echo esc_url(get_theme_mod("tiktok_link")); ?>" class="pinterestLink">
                            <i class="fab fa-pinterest"></i>

                            <!-- <img src="<?php //echo get_template_directory_uri(); 
                                            ?>/assets/images/svg/social-icons/twitter.svg"
                            alt=""> -->
                        </a>
                    </div>

                    <!-- TWITTER ICON -->
                    <div class="socialIcon">
                        <a href="<?php echo esc_url(get_theme_mod("twitter_link")); ?>" class="twitterLink">


                            <i class="fab fa-twitter"></i>
                            <!-- <img src="<?php //echo get_template_directory_uri(); 
                                            ?>/assets/images/svg/social-icons/pinterest.svg" alt=""></a> -->

                        </a>
                    </div>
                </div>

            </div>

        </div>


    </div>

    <div class="copyright">
        <p class="text-center">&#127876; &#127873; &#127918;

            <?php echo get_theme_mod("set_copyright", "Set your copyright content"); ?>

            &#127918; &#127873; &#127876;

        </p>


    </div>

</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri() ?>/js/menuDropdown.js"></script>

</body>

</html>