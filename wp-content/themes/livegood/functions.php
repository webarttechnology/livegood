<?php 


add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1568, 9999 );

register_nav_menus(
    array(
        'primary' => esc_html__( 'Primary menu', 'livegood' ),
        'footer'  => esc_html__( 'Secondary menu', 'livegood' ),
    )
);

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support(
    'html5',
    array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
        'navigation-widgets',
    )
);

/*
 * Add support for core custom logo.
 *
 * @link https://codex.wordpress.org/Theme_Logo
 */
$logo_width  = 300;
$logo_height = 100;

add_theme_support(
    'custom-logo',
    array(
        // 'height'               => $logo_height,
        // 'width'                => $logo_width,
        'flex-width'           => true,
        'flex-height'          => true,
        'unlink-homepage-logo' => true,
    )
);

// Add theme support for selective refresh for widgets.
add_theme_support( 'customize-selective-refresh-widgets' );

// Add support for Block Styles.
add_theme_support( 'wp-block-styles' );


function add_nav_link_class($atts, $item, $args) {
    if ($args->theme_location == 'primary') {
        $atts['class'] = 'nav-link'; // Add the class to the 'a' tag
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_nav_link_class', 10, 3);


function theme_support_logo() {
    add_theme_support('custom-logo', array(
        // 'height'      => 100, // Set the height of your logo
        // 'width'       => 100, // Set the width of your logo
        'flex-height' => true,
    ));
}
add_action('after_setup_theme', 'theme_support_logo');


// function customize_logo($wp_customize) {
//     $wp_customize->add_section('theme_logo_section', array(
//         'title'    => __('Logo', 'your-theme-textdomain'),
//         'priority' => 30,
//     ));

//     $wp_customize->add_setting('theme_logo');
    
//     $wp_customize->add_control(
//         new WP_Customize_Cropped_Image_Control($wp_customize, 'theme_logo', array(
//             'label'    => __('Upload Logo', 'your-theme-textdomain'),
//             'section'  => 'theme_logo_section',
//             'settings' => 'theme_logo',
//             // 'width'    => 100,
//             // 'height'   => 100,
//         ))
//     );
// }
// add_action('customize_register', 'customize_logo');



function post_type_ourorganicproducts() {

$labels = array(
'name' => _x('Products', 'plural'),
'singular_name' => _x('Product', 'singular'),
'menu_name' => _x('Products', 'admin menu'),
'name_admin_bar' => _x('Product', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Product'),
'new_item' => __('New Product'),
'edit_item' => __('Edit Product'),
'view_item' => __('View Product'),
'all_items' => __('All Products'),

);
$args = array(
'supports' => array( 'title',  'thumbnail', 'editor',),
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'products'),
'has_archive' => true,
'hierarchical' => false,
);
register_post_type('products', $args);
}
add_action('init', 'post_type_ourorganicproducts');




?>