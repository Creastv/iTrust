<article class="post-cart">
    <header>
        <?php the_post_thumbnail('medium_large'); ?>
         <div class="meta-group">
                <!-- <div class="meta meta-category">
                    <span><?php _e(' Kategoria: ', 'dse' ); ?></span>
                    <?php the_category();?>
                </div> -->
                <div class="meta meta-data">
                    <span><?php _e('Publikacja: ', 'dse' ); ?> <?php the_time('d.m.Y');?></span>
                </div>
            </div>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>
</article>
