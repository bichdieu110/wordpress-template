<?php
if ( !defined( 'ABSPATH' ) ) exit;
define('URL_IMAGE', get_stylesheet_directory_uri().'/assets/images');

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_dequeue_style( 'sentry' );
        wp_enqueue_script( 'dropdown_js', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/js/dropdown.js','','',true );
        wp_enqueue_script( 'modal_js', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/js/modal.js','','',true );
        wp_enqueue_script( 'main_js', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/js/main.js','','',true );
        wp_enqueue_style( 'slick',  get_stylesheet_directory_uri()  . '/assets/css/slick.css', array()) ;
        wp_enqueue_style( 'main',  get_stylesheet_directory_uri()  . '/assets/css/main.css', array()) ;

        wp_localize_script( 'jquery', 'ajax_object', array(
          'ajaxurl' => admin_url( 'admin-ajax.php' ),
        ));
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 40 );

function add_para_js() {
  if (is_front_page()) {
    wp_enqueue_script( 'particles_js_min', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/js/particles.min.js','','',true );
    wp_enqueue_script( 'particles_js', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/js/particlesJS.js','','',true );
  }
}
add_action('wp_enqueue_scripts', 'add_para_js');

// Register menu
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu') );
  register_nav_menu( 'sp-menu', __( 'SP Menu') );
  register_nav_menu( 'footer', __( 'Footer Menu') );
}

function use_advanced_custom_field($elem) {
	if (function_exists('get_field')) {
		if (get_field($elem)) {
			return true;
		}
	}
}

add_filter( 'xmlrpc_enabled', '__return_false' );


require_once ('inc/cs-funcs.php');
