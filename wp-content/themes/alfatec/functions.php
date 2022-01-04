<?php

/**
 * alfatec functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package alfatec
 */


if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'alfatec_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */

     
     
       

//include bootstrap navwalker
function Setup_the_alfatec_business(){

 require_once get_template_directory().'/lib/navwalker.php';
add_theme_support('widgets');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support( 'automatic-feed-links' );


load_theme_textdomain( 'alfatec', get_template_directory() . '/languages' );
register_nav_menus(array(
'primary' => __('header', 'Header Menu'),

 

));

/*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on alfatec, use a find and replace
         * to change 'alfatec' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'alfatec', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */



        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );


        // Set up the WordPress core custom background feature.

        add_theme_support(
            'custom-background',
            apply_filters(
                'alfatec_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );



        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );

    }


// function styles(){

//     wp_enqueue_style('bootstrap', get_template_directory_uri() . 'css/bootstrap.min.css');

// }


//  add_action('wp_enqueue_scripts','styles');

// function script(){

//     wp_enqueue_script('bootstrap', get_template_directory_uri() . 'js/bootstrap.bundle.min.js',array('jquery')  );

// }

// add_action('wp_enqueue_scripts','script');


wp_enqueue_script('', get_template_directory_uri() . '/js/all.min.js">',array('jquery')  );

 wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js">',array('jquery')  );



endif;
add_action('after_setup_theme','Setup_the_alfatec_business');






function wporg_custom_post_type() {
    register_post_type('wporg_product',
        array(
            'labels'      => array(
                'name'          => __('Products', 'textdomain'),
                'singular_name' => __('Product', 'textdomain'),

            ),
                'public'      => true,
                 'supports'    =>array('title','editor','thumbnail'),
                'has_archive' => true,
        )
    );
}
add_action('init', 'wporg_custom_post_type');




/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}



?>



