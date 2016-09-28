<?php get_header(); ?>

    
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                            <h4>Posté le <?php the_time('j F, Y') ?></h4>
                            <p>
                                <?php the_content(__('<button>Lire la suite</button>')); ?>
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
                                    'next_text' => '<button>' . '<span>' . __( '&laquo;', '123veto' ) . '</span> ' .
					                '<span>' . __( '', '123veto' ) . '</span> ' .
					                '<span>%title</span>' . '</button>',
                                    'prev_text' => '<button>' . '<span>' . __( '', '123veto' ) . '</span> ' .
					                '<span>%title</span>' . '<span>' . __( ' &raquo;', '123veto' ) . '</span> ' . '</button>',
			                  ) ); ?>
                    
                    
                    
              
        

            <?php get_footer(); ?>

    