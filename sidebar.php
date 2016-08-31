<?php 
    //ça en ligne 1 sinon ça plante.
?>
<div class="sidebar"> 
    <ul>
    <!-- calendar -->
        <li id="calendar">
            <h2>Prise de rendez-vous</h2>
        <?php get_calendar(); ?></li>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum nemo, eaque. Veritatis quisquam, officia. </p>
        <button type="submit">Prendre RDV</button>
        <div class="aside-separator"></div>
        
        <li id="actu">
            <h2>news letters</h2>
        <div id="content">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post();?>
            
            <!-- affichage des articles -->
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>	
            <div class= "post" id="post-<?php the_ID(); ?>"> 
                <div class= "post_content">
                    <?php the_post_thumbnail('medium');?>
                    <p class="postmetadata">
                        <?php the_time('j F Y') ?> par <?php the_author() ?> || <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?>
                    </p>
                </div> 
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <button type="submit">Page des News Letters</button>
        <div class="aside-separator"></div>
    </ul> 
</div>