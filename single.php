<?php get_header(); ?>

    
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                            <h4>Posté le <?php the_time('j F, Y') ?></h4>
                            <p>
                                <?php the_content(__('<button class="read-more">Lire la suite</button>')); ?>
                            </p>
                            
                            <!-- comments -->
                            <div class="comments-template"> <?php comments_template(); ?> </div>

                            <?php endwhile; else: ?>
                                <p>
                                    <?php _e('Sorry, no posts matched your criteria.'); ?>
                                </p>

                                <?php endif; ?>
                                
                              <?php  // Previous/next post navigation.
			                     the_post_navigation( array(
                                    'next_text' => '<button class="prev-next float-left"' . '<span class="meta-nav" aria-hidden="true">' . __( '&laquo;', 'kijewoku' ) . '</span> ' .
					                '<span class="screen-reader-text">' . __( '', 'kijewoku' ) . '</span> ' .
					                '<span class="post-title">%title</span>' . '</button>',
                                    'prev_text' => '<button class="prev-next"' . '<span class="screen-reader-text">' . __( '', 'kijewoku' ) . '</span> ' .
					                '<span class="post-title">%title</span>' . '<span class="meta-nav" aria-hidden="true">' . __( ' &raquo;', 'kijewoku' ) . '</span> ' . '</button>',
			                  ) ); ?>
                    
                    
                    
              
        

            <?php get_footer(); ?>

    