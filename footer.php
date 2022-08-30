
</main>
<footer id="footer" itemscope itemtype="http://schema.org/WPFooter">
    
     <?php get_template_part('templates_parts/footer/socialmedia'); ?>
    <div id="main__footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php get_template_part('templates_parts/footer/desc'); ?>
                </div>
                <div class="col">
                    <?php do_action( 'before_sidebar' ); ?>
                     <?php if ( ! dynamic_sidebar( 'footer-1' ) ) : ?><?php endif; ?>
                </div>
                <div class="col">
                    <?php do_action( 'before_sidebar' ); ?>
                     <?php if ( ! dynamic_sidebar( 'footer-2' ) ) : ?><?php endif; ?>
                </div>
                <div class="col">
                   <?php do_action( 'before_sidebar' ); ?>
                     <?php if ( ! dynamic_sidebar( 'footer-3' ) ) : ?><?php endif; ?>
                </div>
            </div>
        </div>
        <div id="inf__footer">
            <div class="container">
                <hr>
                <?php get_template_part('templates_parts/footer/info'); ?>
            </div>
        </div>
    </div>
</footer>
<span id="go-to-top" >
</span>
<?php wp_footer(); ?>
</body>

</html>