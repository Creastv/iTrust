<?php
/**
*
* Template name: Landing-page
* Template Post Type: page
*/
get_header();
while ( have_posts() ) : the_post();		
	get_template_part( 'templates_parts/content/content-landing' );
endwhile; // End of the loop.
get_footer();