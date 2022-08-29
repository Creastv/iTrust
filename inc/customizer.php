<?php 
function inb_customize_register( $wp_customize ) {
    // Header
	$wp_customize->add_section( 'header' , array(
	'title' => __( 'Header', 'iT' ),
	'priority' => 105,
	) );

	$wp_customize->add_setting( 'logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
		'label' => __( 'Upload Logo ', 'iT' ),
		'section' => 'header',
		'settings' => 'logo',
	) ) );
    // End Header

	// Footer
	$wp_customize->add_section( 'footer' , array(
	'title' => __( 'Footer', 'iT' ),
	'priority' => 105,
	) );

	$wp_customize->add_setting( 'logo_footer' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_footer', array(
		'label' => __( 'Upload Logo ', 'iT' ),
		'section' => 'footer',
		'settings' => 'logo_footer',
	) ) );

	$wp_customize->add_setting( 'desc_footer' );

    $wp_customize->add_control( 'desc_footer', array(
        'label' => __( 'Description', 'iT' ),
        'type' => 'textarea',
        'section' => 'footer',
    ) );

	$wp_customize->add_setting( 'desc_footer_en' );

    $wp_customize->add_control( 'desc_footer_en', array(
        'label' => __( 'Description EN', 'iT' ),
        'type' => 'textarea',
        'section' => 'footer',
    ) );

	$wp_customize->add_setting( 'inf_footer' );

    $wp_customize->add_control( 'inf_footer', array(
        'label' => __( 'Info', 'iT' ),
        'type' => 'text',
        'section' => 'footer',
    ) );
    // End Footer

	// Socialmedia
	$wp_customize->add_section( 'socialmedia' , array(
	'title' => __( 'Socialmedia', 'iT' ),
	'priority' => 105,
	) );
	// FB
	$wp_customize->add_setting( 'fb' );

    $wp_customize->add_control( 'fb', array(
        'label' => __( 'Facebook', 'iT' ),
        'type' => 'link',
        'section' => 'socialmedia',
    ) );
	// Twitter
	$wp_customize->add_setting( 'tw' );

    $wp_customize->add_control( 'tw', array(
        'label' => __( 'Twitter', 'iT' ),
        'type' => 'link',
        'section' => 'socialmedia',
    ) );

	// Twitter
	$wp_customize->add_setting( 'in' );

    $wp_customize->add_control( 'in', array(
        'label' => __( 'Instagram', 'iT' ),
        'type' => 'link',
        'section' => 'socialmedia',
    ) );

	// Twitter
	$wp_customize->add_setting( 'git' );

    $wp_customize->add_control( 'git', array(
        'label' => __( 'Git', 'iT' ),
        'type' => 'link',
        'section' => 'socialmedia',
    ) );

    // End Socialmedia
}

add_action( 'customize_register', 'inb_customize_register' );
