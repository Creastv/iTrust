<article id="post-<?php the_ID(); ?>" <?php post_class('hentry'); ?>>
    <header class="entry-header">
        <h1 class="page-title entry-title"><?php the_title(); ?></h1>
            <div class="meta-group">
                <div class="meta meta-category">
                    <span><?php _e(' Kategoria: ', 'dse' ); ?></span>
                    <?php the_category();?>
                </div>
                <div class="meta meta-data">
                    <span class="published"><?php _e('Publikacja: ', 'dse' ); ?> <?php the_time('d.m.Y');?></span>
                </div>
            </div>
            <?php the_post_thumbnail('full'); ?>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <footer class="entry-footer">
        <div id="author-bio">
                    <div id="author-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?></div>

                    <div id="author-details">
                        <div class="author-head">
                            <div class="title">
                                <h2><?php the_author_posts_link(); ?></h2>
                                <i><?php $author_id = get_the_author_meta('ID'); the_field('pozycja', 'user_'. $author_id); ?></i>
                            </div>
                            <div class="links">
                                <?php  if (get_the_author_meta('user_url') ) { ?>
                                <a href="<?php the_author_meta('user_url'); ?>" class="author-website" target="_blank">
                                    <i class="fas fa-link"></i>
                                </a>
                                <?php } ?>
                                <?php  if (get_the_author_meta('linkedin') ) { ?>
                                <a href="<?php the_author_meta('linkedin'); ?>" class="author-linkedin" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <?php } ?>
                                <?php  if (get_the_author_meta('facebook') ) { ?>
                                <a href="<?php the_author_meta('facebook'); ?>" class="author-facebook" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <?php } ?>
                                <?php  if (get_the_author_meta('twitter') ) { ?>
                                <a href="<?php the_author_meta('twitter'); ?>" class="author-twitter" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <?php }?>
                                <?php  if (get_the_author_meta('instagram') ) { ?>
                                <a href="<?php the_author_meta('instagram'); ?>" class="author-instagram" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="author-footer">
                            <p> <?php the_author_description(); ?></p>
                        </div>
                    </div><!-- #author-details -->
                </div><!-- #author-bio -->
    </footer>
</article>
