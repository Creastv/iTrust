<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="theme-color" content="#6053dc">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="canonical" href="<?php 	echo get_permalink( get_the_ID() ); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header" itemscope itemtype="http://schema.org/WPHeader">
        <div class="header-wraper-nav">
            <?php get_template_part('templates_parts/header/navbar'); ?>
        </div>
        <div class="container">
            <?php if ( function_exists('yoast_breadcrumb') ) { ?>
            <?php  yoast_breadcrumb( '<div id="breadcrumbs">','</div>' ); ?>
            <?php } ?>
            <div class="header-wraper-title">
                <?php get_template_part('templates_parts/header/title-page'); ?>
            </div>

        </div>
    </header>
    <main id="main" class="container ">
