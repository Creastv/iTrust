<?php
add_theme_support('post-thumbnails');

if ( ! function_exists( 'dse_register_nav_menu' ) ) {
    function dse_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'iT' ),
			'secundary_menu' => __( 'Mobile Menu', 'iT' ),
        ) );
    }
    add_action( 'after_setup_theme', 'dse_register_nav_menu', 0 );
}
function dse_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Footer 1 PL', 'iT' ),
		'id'            => 'footer-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 1 EN', 'iT' ),
		'id'            => 'footer-10',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2 PL', 'iT' ),
		'id'            => 'footer-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2 EN', 'iT' ),
		'id'            => 'footer-20',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3 PL', 'iT' ),
		'id'            => 'footer-3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3 EN', 'iT' ),
		'id'            => 'footer-30',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'dse_widgets_init' );

function dse_scripts() {
	wp_enqueue_style( 'dse-style', get_stylesheet_uri() );
	wp_enqueue_style( 'dse-custome-style', get_template_directory_uri().'/src/css/main.min.css' ); 
	wp_enqueue_script('dse-main', get_template_directory_uri().'/src/js/main.js', array( 'jquery' ),'3', true );
}
add_action( 'wp_enqueue_scripts', 'dse_scripts' );

function add_block_editor_assets(){
  wp_enqueue_style('block_editor_css', get_template_directory_uri().'/src/css/admin.min.css');
}

add_action('enqueue_block_editor_assets','add_block_editor_assets',10,0);

require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/blocks/blocks.php';

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title' => 'Ust. szablonu ',
    'menu_title' => 'Ust. szablonu ',
    'parent_slug' => 'themes.php',
  ));
   
  
}

function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function filter_plugin_updates( $value ) {
	$plugins = array(
	  'advanced-custom-fields-pro/acf.php'
	);
	foreach( $plugins as $plugin ) {
	  if ( isset( $value->response[$plugin] ) ) {
		unset( $value->response[$plugin] );
	  }
	}
	return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );