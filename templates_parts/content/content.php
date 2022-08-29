<?php
global $template;
if(is_page()){
    get_template_part( 'templates_parts/content/content-page' );
} elseif(is_singular("post")) {
    get_template_part( 'templates_parts/content/content-single' );
} else {
     get_template_part( 'templates_parts/content/content-cart' );
}
