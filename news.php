<?php
/*
Template Name: newsletter
*/
?>
    <?php get_header() ?>
        <!-- TITRE DE LA PAGE -->
        <h2 class="bandeau bandeau-mt0"><?php the_title(); ?></h2>
        
        <!-- AFFICHAGE DU POST -->
        <section id="newsletter">
            <?php query_posts('category_name=news') ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="actu-on-newsletter">    
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <div class="news-img">
                    <?php the_post_thumbnail(array(250,250));?>
                    </div>
                    <div class="news-p">
                        <?php the_content(__('<button class="read-more">Lire la suite</button>')); ?>
                    </div>
                </div>
            <?php endwhile; else: ?>
                <p>
                    <?php _e('Désolé, il n\'a aucun article pour le moment.'); ?>
                </p>
            <?php endif; ?>
        </section>
    <?php get_footer() ?>
        
       