<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <?php
    wp_head();
    ?>

</head>

<body>
    <div id="page" class="hfeed site">
        <header id="masthead" class="site-header">
            <!-- header starting from here -->

            <div class="hgroup-wrap">
                <div class="container">
                    <section class="site-branding">
                        <!-- site branding starting from here -->
                        <h1 class="site-title">
                            <?php
                            $location=get_home_url( );
                            // esc_url(get_home_url( null, '/' ));
                            ?>
                            <a href=<?php echo $location;?> title="site-logo" target="_self">
                                <?php
                                if (function_exists('the_custom_logo')) {
                                    $custom__logo_id = get_theme_mod('custom_logo');
                                    $logo = wp_get_attachment_image_src($custom__logo_id);
                                }
                                ?>
                                <img src="<?php echo $logo[0] ?>" alt="logo">
                            </a>
                        </h1>
                        <!-- <span class="site-description">satisfied home</span> -->
                    </section> <!-- site branding ends here -->


                    <div class="hgroup-right">
                        <div id="navbar" class="navbar">
                            <!-- navbar starting from here -->
                            <nav id="site-navigation" class="navigation main-navigation">
                                <div class="menu-content-wrapper">
                                    <div class="menu-top-menu-container">
                                        <?php
                                        wp_nav_menu(
                                            array(
                                                'menu' => 'primary',
                                                'container' => '',
                                                'theme_location' => 'primary',
                                                'items_wrap' => '<ul id="" class="">%3$s</ul>'
                                            )
                                        );
                                        ?>
                                    </div>
                                </div>
                            </nav><!-- #site-navigation -->
                        </div> <!-- navbar ends here -->
                        <div id="left-search" class="header-search-section">
                            <div class="search-toggle">
                                <i class="fa"></i>
                            </div>
                        </div>
                        <div class="site-cart-views">
                            <div class="site-cart-info">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span class="cart-quantity">2</span>
                            </div>
                            <div class="widget widget_shopping_cart">
                                <div class="mini_cart_inner">
                                    <div class="widget woocommerce widget_shopping_cart">
                                        <div class="widget_shopping_cart_content">
                                            <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="search-section">
                            <!-- search section starting from here -->
                            <div class="search-container">
                                <div class="close-icon">
                                    <i class="fa fa-times"></i>
                                </div>
                                <form role="search" method="get" class="search-form" action="">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input class="search-field" placeholder="Search …" value="" name="s" type="search">
                                        <span class="search-input-line"></span>
                                    </label>
                                    <input class="search-submit" value="Search" type="submit">
                                </form>
                                <h5>Type to search</h5>
                            </div>
                        </div>
                        <!-- search section ends here -->
                    </div>
                </div>
                </div>
        
        </header> <!-- header ends here -->
        
 <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <!-- primary-home starting from here -->
                <main id="main" class="site-main">
                    <div class="error-404 not-found" style="background: url(wp-content/themes/spa/assets/img/error-bg.jpg)">
                        <div class="container">
                            <div class="entry-content">
                                <h2 class="page-title">404</h2>
                                <p>page not found</p>
                                <?php
                            $location=get_home_url( );
                            // esc_url(get_home_url( null, '/' ));
                            ?>
                            <a href=<?php echo $location;?> title="site-logo" target="_self" class="box-button">back to homepage</a>
                            </div>
                        </div>
                        <!-- .page-header -->
                    </div>
                </main>
            </div>
 </div>

<?php
    get_footer();
?>