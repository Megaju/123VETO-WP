<?php get_header(); ?>
    
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>                            
                <!-- bloc de l'article -->
                <h2><?php the_title(); ?></h2>
                <div class="news-img">
                    <?php the_post_thumbnail(array(250,250));?>
                </div>
                <p><?php the_content(); ?></p>
                <!-- bloc de l'article -->
                                            
                <!-- commentaire -->
                <div class="comments-template"><?php comments_template(); ?></div>
            
            <!-- s'il n'y a pas d'article -->
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
                                        
        <?php  // Previous/next post navigation.
        the_post_navigation( array(
            'next_text' => '<button>' . '<span>' . __( '&laquo;', '123veto' ) . '</span> ' .
            '<span>' . __( '', '123veto' ) . '</span> ' .
            '<span>%title</span>' . '</button>',
            'prev_text' => '<button>' . '<span>' . __( '', '123veto' ) . '</span> ' .
            '<span>%title</span>' . '<span>' . __( ' &raquo;', '123veto' ) . '</span> ' . '</button>',
        ));?>
                    
<?php get_footer(); ?>

    