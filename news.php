<?php
/*
Template Name: newsletter
*/
?>
    <?php get_header() ?>
        <!-- TITRE DE LA PAGE -->
        <h2><?php the_title(); ?></h2>
        <!-- AFFICHAGE DU POST -->
        <section>
            <?php query_posts('category_name=news') ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <p>
                    <?php the_content(__('<button class="read-more">Lire la suite</button>')); ?>
                </p>
                <div class="separator"></div>
            <?php endwhile; else: ?>
                <p>
                    <?php _e('Désolé, il n\'a aucun article pour le moment.'); ?>
                </p>
            <?php endif; ?>
               
            <!-- PAGINATION -->
                <?php  
			         // PAGINATION
			         the_posts_pagination( array( 'mid_size'  => 2 ) ); 
                ?> 
        </section>
        <?php get_footer() ?>