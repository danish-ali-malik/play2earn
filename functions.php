<?php
/**
 * p2e-academy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package p2e-academy
 */

function p2e_academy_enqueue_styles() {
    // echo "<pre>";print_r(get_stylesheet_directory_uri());exit();
        wp_enqueue_style('p2e-academy-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style('p2e-academy-theme-style', get_template_directory_uri() . '/assets/css/theme.css', [], '1.0.0' );
        wp_enqueue_script( 'p2e-vendors-js', get_template_directory_uri() . '/assets/js/vendors.js' );
        wp_enqueue_script( 'p2e-theme-js', get_template_directory_uri() . '/assets/js/theme.js' );
}
 
add_action( 'wp_enqueue_scripts', 'p2e_academy_enqueue_styles' );


add_action( 'init', 'register_my_menu' );

function register_my_menu() {
    register_nav_menus( array(
    'main-menu' => 'Main Menu',
  ) );
  register_nav_menus( array(
    'mobile-menu' => 'Mobile Menu',
  ) );
}

add_theme_support( 'post-thumbnails' );
/**
Add class to li of menu
*/
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

/**
Add class to li href of menu
*/
function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );


function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');


function p2e_customize_register( $wp_customize ) {
$wp_customize->add_setting( 'p2e_logo' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'p2e_logo', array(
'label' => __( 'Menu Logo', 'p2e-academy' ),
'section'=> 'title_tagline',
'settings' => 'p2e_logo',
) ) );
}
add_action( 'customize_register', 'p2e_customize_register' );


// check has sub category

function category_has_children( $term_id ) {
    $children = get_categories( array(
        'type'  => 'post', 
        'child_of'      => $term_id,
        'taxonomy'      => 'category'
    ) );
    return ( $children );
}

// Include coin market api class
require get_stylesheet_directory().'/inc/class-coin-market-api.php';

// require category image file
require get_stylesheet_directory().'/inc/category-image.php';


if( function_exists('acf_add_options_page') ) {

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
	));

}
