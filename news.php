<?php
/*
Template Name: newsletter
*/
?>
    <?php get_header() ?>
        <!-- TITRE DE LA PAGE -->
        <h2 class="bandeau bandeau-mt0">NEWS</h2>
        
        <!-- AFFICHAGE DU POST -->
        <section class="body-news">
            <?php query_posts('category_name=news') ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="bloc-news">   
                    <h2 title="<?php the_title(); ?>"><?php the_title();?></h2>
                    <div class="bloc-news-content">
                        <div class="news-img"><?php the_post_thumbnail(array(250,250));?></div>
                        <p><?php the_content(__('<button class="normal-button">Lire la suite</button>')); ?></p>
                    </div>
                </div>
            <?php endwhile; else: ?>
                <p>
                    <?php _e('Désolé, il n\'a aucun article pour le moment.'); ?>
                </p>
            <?php endif; ?>
        </section>
    <?php get_footer() ?>
        
       