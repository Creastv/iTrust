<?php
get_header();
while ( have_posts() ) : the_post();
	get_template_part( 'templates_parts/content/content' );
endwhile;
get_footer();
