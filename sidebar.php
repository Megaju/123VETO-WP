<?php 
    //ça en ligne 1 sinon ça plante.
?>
<div class="sidebar"> 
    <ul>
    <!-- calendar -->
        <li id="calendar">
            <h2>Prise de rendez-vous</h2>
            
            <?php get_calendar(); ?>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum nemo, eaque. Veritatis quisquam, officia. </p>
            <button type="submit">Prendre RDV</button>
            <div class="aside-separator"></div>
            
        </li>
        
        <li id="actu">
           
            <h2>news letters</h2>
            <div id="content">
                <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post();?>

                <!-- affichage des articles -->
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>	
                <div class= "post" id="post-<?php the_ID(); ?>"> 
                    <div class= "post_content">
                        <?php the_post_thumbnail(array(250,250));?>
                        <p class="postmetadata">
                            <?php the_time('j F Y') ?> par <?php the_author() ?> || <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?>
                        </p>
                    </div> 
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <button type="submit">Page des News Letters</button>
            </div>
        
            <div class="aside-separator"></div>
            
        </li>
        
        <li id="contact">
        
               <p><strong>123 Véto clinique vétérinaire</strong> vous accueille du lundi au vendredi de <i class="text-info">9h à 12h</i> et de <i class="text-info">14h à 19h</i> et le samedi de <i class="text-info">9h à 12h</i>. <a href="contact.html"><i class="fa fa-1x fa-map"></i></a></p>
                <p><strong>Les urgences</strong> sont assurées <i class="text-info">24h/24</i> sur simple appel téléphonique.</p>
                <p>tél : <em>02 99 55 55 55 - 06 55 55 55 55</em></p>
                </p>

                <p>
                    <a href="https://www.facebook.com/"><i class="fa fa-2x fa-facebook icone-prestation"></i></a>

                    <a href="https://plus.google.com/"><i class="fa fa-2x fa-google-plus-official icone-prestation"></i></a>
                </p>
                
                <div class="aside-separator"></div>

        </li>

    </ul> 
</div>