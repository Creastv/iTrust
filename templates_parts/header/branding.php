<?php 
$blog_info    = get_bloginfo( 'name' );
$logo         = get_theme_mod('logo');
?>
<div class="nav-brand">
    <?php if ( $logo ) { ?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img loading="lazy" src="<?php echo esc_html($logo); ?>" alt="<?php echo esc_html( $blog_info ); ?>">
    </a>
    <?php } else { ?>
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel="home">
        <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
        <p class="site-title"><?php bloginfo( 'description' ); ?></p>
    </a>
    <?php } ?>
</div>
