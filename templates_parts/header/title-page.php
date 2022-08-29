  <h1 class="page-title">
      <?php if ( is_category() ) :
	  single_cat_title();	
		// the_title();					
	elseif (is_404()) :
		_e( '404', 'iT');
	elseif (is_page() ) :
		the_title();
	elseif ( is_tag() ) :
		single_tag_title();
	elseif ( is_author() ) :
		the_post();
		printf( __( '%s', 'iT' ), get_the_author() );
		rewind_posts();
	elseif ( is_day() ) :
		printf( __( 'Dzień: %s', 'iT' ), '<span>' . get_the_date() . '</span>' );
	elseif ( is_month() ) :
		printf( __( 'Miesiąc: %s', 'iT' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
	elseif ( is_year() ) :
		printf( __( 'Rok: %s', 'iT' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
	elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
		_e( 'Asides', 'iT' );
	elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
		_e( 'Images', 'iT');
	elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
		_e( 'Videos', 'iT' );
	elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
		_e( 'Quotes', 'iT' );
	elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
		_e( 'Links', 'iT' );
	else :
		_e( 'Blog', 'iT' );
    endif; ?>
  </h1>
