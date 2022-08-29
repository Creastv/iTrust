<?php 
$blog_info    = get_bloginfo( 'name' );
$logo         = get_theme_mod('logo_footer');
$desc_footer       = get_theme_mod('desc_footer');
?>
<div class="desc">
    <?php if ( $logo ) { ?>
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img loading="lazy" src="<?php echo esc_html($logo); ?>" alt="<?php echo esc_html( $blog_info ); ?>">
    </a>
    <?php } else { ?>
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel="home">
       <h4>iTrust</h4>
    </a>
    <?php } ?>
    <?php if ( $desc_footer ) { ?>
    <div class="company__desc">
        <p> <?php echo $desc_footer; ?></p>
    </div>
    <?php } ?>
</div>
