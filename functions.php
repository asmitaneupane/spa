<?php

// add dynamic title tag support
function spa_theme_support() {
    add_theme_support( 'title-tag');
    add_theme_support( 'custom-logo');
    add_theme_support( 'post-thumbnails');
    add_theme_support( 'custom-background' );
}

add_action( 'after_setup_theme', 'spa_theme_support' );

function spa_menus() {
    $locations = array(
        'primary' => "Desktop Primary Top Navbar",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus( $locations );
}

add_action( 'init', 'spa_menus' );

function spatheme_style() {
    $version = wp_get_theme()->get( 'Version');
    wp_enqueue_style( 'spa-css', get_template_directory_uri( )."/style.css", array(), $version, 'all');
    wp_enqueue_style( 'spa-font-awesome', get_template_directory_uri( )."/assets/css/font-awesome.css", array(), '1.0', 'all');
    wp_enqueue_style( 'spa-font-awesome-min', get_template_directory_uri( )."/assets/css/font-awesome.min.css", array(), '1.0', 'all');
    wp_enqueue_style( 'spa-magnific-popup', get_template_directory_uri( )."/assets/css/magnific-popup.css", array(), '1.0', 'all');
    wp_enqueue_style( 'spa-meanmenu', get_template_directory_uri( )."/assets/css/meanmenu.css", array(), '1.0', 'all');
    wp_enqueue_style( 'spa-responsive', get_template_directory_uri( )."/assets/css/responsive.css", array(), '1.0', 'all');
    wp_enqueue_style( 'spa-slick-theme', get_template_directory_uri( )."/assets/css/slick-theme.css", array(), '1.0', 'all');
    wp_enqueue_style( 'spa-slick', get_template_directory_uri( )."/assets/css/slick.css", array(), '1.0', 'all');
    wp_enqueue_style( 'spa-link', "https://fonts.googleapis.com/css?family=Marcellus&display=swap", array(), '1.0', 'all');


}

add_action( 'wp_enqueue_scripts', 'spatheme_style' );

function spatheme_scripts() {
    $version = wp_get_theme()->get( 'Version');

    wp_enqueue_script( 'spa-jquery', get_template_directory_uri( )."/assets/js/jquery.js", array(), $version, true);
    wp_enqueue_script( 'spa-custom-js', get_template_directory_uri( )."/assets/js/custom.js", array('spa-jquery'), $version, true);
    wp_enqueue_script( 'spa-jquery-countdown', get_template_directory_uri( )."/assets/js/jquery.countdown.js", array('spa-jquery'), $version, true);
    wp_enqueue_script( 'spa-magnific-popup', get_template_directory_uri( )."/assets/js/jquery.magnific-popup.js", array('spa-jquery'), $version, true);
    wp_enqueue_script( 'spa-meanmenu', get_template_directory_uri( )."/assets/js/jquery.meanmenu.js", array('spa-jquery'), $version, true);
    wp_enqueue_script( 'spa-resizesensor', get_template_directory_uri( )."/assets/js/ResizeSensor.js", array(), $version, true);
    wp_enqueue_script( 'spa-slick', get_template_directory_uri( )."/assets/js/slick.js", array(), $version, true);
    wp_enqueue_script( 'spa-slick-min', get_template_directory_uri( )."/assets/js/slick.min.js", array(), $version, true);
    wp_enqueue_script( 'spa-sidebar', get_template_directory_uri( )."/assets/js/theia-sticky-sidebar.js", array(), $version, true);


}

add_action( 'wp_enqueue_scripts', 'spatheme_scripts' );

function spa_widget_areas() {

    register_sidebar( 
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="inline-social-icons social-links">',
            'after_widget' => '</div>',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
        )
    );
    register_Sidebar( 
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area',
            'id' => 'footer-2',
            'description' => 'Footer Widget Area'
        )
    );
}

add_action( 'widgets_init', 'spa_widget_areas' );

//generate breadcumbs
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }

    } 
    elseif(is_front_page())
    {
     
    }
    elseif (is_front_page() || is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    }
     elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    } else {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    }
}