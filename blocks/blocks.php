<?php
function register_acf_block_types() {
    
    // acf_register_block_type(array(
    //     'name'              => 'o-nas',
    //     'title'             => __('O nas - carusel'),
    //     'render_template'   => 'blocks/o-nas/o-nas.php',
    //     'category'          => 'formatting',
    //     'icon' => array(
    //       'background' => '#efd6ae',
    //       'foreground' => '#fff',
    //       'src' => 'ellipsis',
    //     ),
    //   'mode'            => 'preview', 
    //   'keywords'          => array( 'O nas' ),
    //   'enqueue_assets'    => function(){
    //      wp_enqueue_style( 'ra_svipeer_css', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
    //       wp_enqueue_style( 'ra-o-nas',  get_template_directory_uri() . '/blocks/o-nas/o-nas.min.css' );
    //       wp_enqueue_script('ra-swiper_js', 'https://unpkg.com/swiper/swiper-bundle.min.js',  array(), '20130456', true );
    //       wp_enqueue_script( 'ra-o-nas-script', get_template_directory_uri() . '/blocks/o-nas/o-nas.js', array(), '20130458', true );
    //   },
    // ));
}
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}
