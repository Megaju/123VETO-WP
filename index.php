    <?php get_header(); ?>

    <div id="page">
       
        <!-- contenue du site -->
        <div id="content">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
            
            <!-- affichage des articles -->
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>	
            <div class= "post" id="post-<?php the_ID(); ?>"> 
                <div class= "post_content">
                    <?php the_content(); ?>
                    <p class="postmetadata">
                        <?php the_time('j F Y') ?> par <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' &#124; ', ''); ?>
                    </p>
                </div> 
            </div>
        </div>
        
    <!-- aside -->    	
    <?php get_sidebar(); ?>    
    
    </div>
    
    <?php get_footer(); ?>

</body>

</html>
