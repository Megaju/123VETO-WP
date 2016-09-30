<?php get_header(); ?>

    <div id="header" style='background-image:url(<?php header_image(); ?>)'>
        <div class="header-corp">
            <!-- logo -->
            <div class="logo-img img-responsive"></div>
            <!-- infos -->
            <div class="info">
                <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                <h2 id="description"><?php bloginfo('description'); ?></h2>
                <h2 class="names">Dr Eric Wintz - Dr Aurélie Mayoussier</h2>
                <p class="horaires">123 Véto vous accueille du <i class="orange">lundi au vendredi</i> de <i class="orange">9h à 12h</i> et de <i class="orange">14h à 19h</i> et le <i class="orange">samedi</i> de <i class="orange">9h à 12h</i>.</p><p class="horaires">Les <i class="orange">urgences</i> sont assurées <i class="orange">24h/24 7 jours sur 7</i> sur appel téléphonique au <i class="orange">02 40 01 61 69</i></p>
                <p class="horaires"><i class="orange">Adresse : </i>32 rue du Vélodrome 44160 Pontchateau</p>
            </div>
        </div>
    </div>


    <div class="page">
        <!-- aside -->
        <?php get_sidebar(); ?>
            <div class="content">
                <!-- le bloc team pour le hover est stocké dans le pc 26 -->
                <div id="bloc-team">
                    <h2 class="bandeau bandeau-mt0" id="bandeau_presentation">L'équipe à votre service</h2>

                                            <!-- DOCTEUR I -->
                        <div class="docteurs">
                        <?php query_posts('category_name=presentation'); ?>
                         <?php if(have_posts()) : ?>
                             <?php while(have_posts()) : the_post();?>
                                 <div class="team-member">
                                 <h3 title="<?php the_title(); ?>"><?php the_title(); ?></h3>
                                 <div class="post" id="post-<?php the_ID(); ?>">
                                     <div class="post_content alignement_article article-presentation">
                                         <div class="imgPage" id="imgPage">
                                             <?php the_post_thumbnail(array(250,250));?>
                                         </div>
                                         <div class="contenu_article">
                                             <?php the_content(); ?>
                                         </div>
                                     </div>
                                 </div>
                                 </div>
                               <?php endwhile; ?>
                             <?php endif; ?>
                        </div>
                     
                    </div>
                        <!--<div class="docteur-present">
                            <h3>Dr Aurélie Mayoussier</h3>
                            <h4>Diplômée de l’école vétérinaire de Maisons Alfort en 2008</h4>
                            <p>Dr Aurélie Mayoussier Diplômée de l’école vétérinaire de MaisonsAlfort en 2008, elle se passionne pour la médecine de l’élevage et de la reproduction et la médecine des NAC. Le Dr Mayoussier possède deux chats Pratchett et Bubule ainsi que Bambou, chien loup de Saarloos.</p>
                        </div>-->

                        <!-- DOCTEUR II -->
                        <!--<div class="docteur" id="docteur2">
                        </div>
                        <div class="docteur-present">
                            <h3>Dr Eric Wintz</h3>
                            <h4>Diplômé de l’école vétérinaire de Nantes en 1990</h4>
                            <p>Dr Eric Wintz Diplômé de l’école vétérinaire de Nantes en 1990, il se passionne pour la dermatologie et la cardiologie. Le Dr Wintz possède quatre chats Leelas (européenne), Gribouille (européen), Hannah (Mane Coon), et Joey (Ragdoll), des Platis, deux lapins nains Neige et Teddy ainsi que Lexie, chihuahua.</p>
                        </div>-->
                    
                

                <!-- CAROUSEL -->
                <div id="bloc-carousel">
                    <h2 class="bandeau bandeau-carousel">Découverte de la clinique</h2>
                    <div class="index-separator-0"></div>

                    <!-- new carousel -->
                    <?php query_posts('category_name=carousel'); ?>
                        <?php if(have_posts()) : ?>
                            <?php while(have_posts()) : the_post();?>
                                <?php the_content(); ?>
                            <?php endwhile; ?>
                    <?php endif; ?>

                    

                </div>

                <!-- SAVOIR-FAIRE 1 2 3 VETO -->
                <div id="bloc-large-savoirfaire">
                    <h2 class="bandeau">Notre savoir-faire</h2>
                    <div class="index-separator-0"></div>
                    <div id="bloc-medium-savoirfaire">
                        <div class="bloc-small-savoirfaire">
                            <div class="fa-sf">
                                1
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit[...]</p>
                            <a href="#">Read More <i class="fa fa-chevron-right"></i></a>
                        </div>

                        <div class="bloc-small-savoirfaire">
                            <div class="fa-sf">
                                2
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit[...]</p>
                            <a href="#">Read More <i class="fa fa-chevron-right"></i></a>
                        </div>

                        <div class="bloc-small-savoirfaire">
                            <div class="fa-sf">
                                3
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit[...]</p>
                            <a href="#">Read More <i class="fa fa-chevron-right"></i></a>
                        </div>

                        <div class="bloc-small-savoirfaire">
                            <div class="fa-sf">
                                V
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit[...]</p>
                            <a href="#">Read More <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- PRESTATIONS -->
                <?php 
                    $presta_url = get_post_permalink(get_page_by_title ( 'Prestations' )->ID); 
                    $conseil_url = get_post_permalink(get_page_by_title ( 'Fiche conseil' )->ID); 
                    $vente_url = get_post_permalink(get_page_by_title ( 'Espace vente' )->ID); 
                 ?>

                <section>
                    <div class="section-header">
                        <h2 class="bandeau">Nos prestations</h2>
                    </div>
                        <section class="formeindex">

                        <div class="icone-generique">
                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_stethoscope.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('consultation')">Consul.</button>
                            </div>

                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_camera.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('imagerie')">Imagerie</button>
                            </div>

                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_microscope.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('analyse')">Analyses</button>
                            </div>

                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_scalpel.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('chirurgie')">Chirurgie</button>
                            </div>

                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_hopital.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('hospitalisation')">Hosp.</button>
                            </div>

                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_lapin.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('nac')">NAC</button>
                            </div>
                        </div>
                    </section>
                    
                    <!-- CONSEILS -->
                    
                        <h2 class="bandeau">Nos Conseils</h2>
                    <!-- ICONES -->       
                        <div class="icone-generique">
                            <div class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_dent.php"); ?>
                                <button class="bouton-generique" onclick="location.href='<?= $conseil_url ?>';">Dents</button>
                            </div>

                            <div class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_eyecat.php"); ?>
                                <button class="bouton-generique" onclick="location.href='<?= $conseil_url ?>';">Yeux / Oreilles</button>
                            </div>

                            <div class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_pelage.php"); ?>
                                <button class="bouton-generique" onclick="location.href='<?= $conseil_url ?>';">Pelage</button>
                            </div>
                            
                            <div class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_parasite.php"); ?>
                                <button class="bouton-generique" onclick="location.href='<?= $conseil_url ?>';">Parasites</button>
                            </div>
                        </div>
                        
                        <div class="icone-generique">
                            <div class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_vaccin_chien.php"); ?>
                                <button class="bouton-generique" onclick="location.href='<?= $conseil_url ?>';">Vaccin Chien</button>
                            </div>

                            <div class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_vaccin_chat.php"); ?>
                                <button class="bouton-generique" onclick="location.href='<?= $conseil_url ?>';">Vaccin Chat</button>
                            </div>

                            <div class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_barcode.php"); ?>
                                <button class="bouton-generique" onclick="location.href='<?= $conseil_url ?>';">Identification</button>
                            </div>
                            
                            <div class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_education.php"); ?>
                                <button class="bouton-generique" onclick="location.href='<?= $conseil_url ?>';">Education</button>
                            </div>
                        </section>
                    
                    
                    <!-- VENTES -->
                       <div class="section-header">
                        <h2 class="bandeau">VENTES</h2>
                    </div>
                        <section id="formeindex" class="formeindex ente-index">
                            <div class="icone-gerique">
                                <div class="center-generique">
                                    <?php include("img/svg/vente_svg/vente_croquette.php"); ?>
                                    <button class="bouton-generique" onclick="location.href='<?= $vente_url ?>';">Croquettes</button>
                                </div>

                                <div class="center-generique">
                                    <?php include("img/svg/vente_svg/vente_antiparasitaire.php"); ?>
                                    <button class="bouton-generique" onclick="location.href='<?= $vente_url ?>';">Vermifuges</button>
                                </div>

                                <div class="center-generique">
                                    <?php include("img/svg/vente_svg/vente_shampooing.php"); ?>
                                    <button class="bouton-generique" onclick="location.href='<?= $vente_url ?>';">Shampoings</button>
                                </div>
                                
                                <div class="center-generique">
                                    <?php include("img/svg/vente_svg/vente_brosse.php"); ?>
                                    <button class="bouton-generique" onclick="location.href='<?= $vente_url ?>';">Brosses</button>
                                </div>
                                
                                <div class="center-generique">
                                    <?php include("img/svg/vente_svg/vente_collier.php"); ?>
                                    <button class="bouton-generique" onclick="location.href='<?= $vente_url ?>';">Colliers et laisses</button>

                                </div>
                            </div>
                        </section>                     
                            
                            
                            <!-- <section>
                    <div class="section-header">
                        <h2 class="bandeau">Nos prestations</h2>
                    </div>
                        <section class="formeindex">

                        <div class="icone-generique">
                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_stethoscope.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('consultation')">Consul.</button>
                            </div>

                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_camera.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('imagerie')">Imagerie</button>
                            </div>

                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_microscope.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('analyse')">Analyses</button>
                            </div>

                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_scalpel.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('chirurgie')">Chirurgie</button>
                            </div>

                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_hopital.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('hospitalisation')">Hosp.</button>
                            </div>

                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_lapin.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('nac')">NAC</button>
                            </div>
                        </div>
                    </section> -->

            </div>
    </div>

    <?php get_footer(); ?>

    <script type="text/javascript">
    $(window).scroll(function(){
    if( $(window).scrollTop() > 2000){
      console.log($(window).scrollTop());
    }
  });
    </script>




        </body>

        </html>