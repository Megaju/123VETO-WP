<?php get_header(); ?>

    <div id="header">
        <div class="header-corp">
            <!-- logo -->
            <div class="logo-img img-responsive"></div>
            <!-- infos -->
            <div class="info">
                <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                <h2 id="description"><?php bloginfo('description'); ?></h2>
                <h2>Dr Eric Wintz - Dr Aurélie Mayoussier</h2>
                <p class="horaires">123 Véto vous accueille du lundi au vendredi de 9h à 12h et de 14h à 19h et le samedi de 9h à 12h Les urgences sont assurées 24h/24 7 jours sur 7 sur appel téléphonique au 02 40 01 61 69</p>
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

                     <div class="docteurs">
                        <!-- DOCTEUR I -->
                        <div class="docteur docteur-present">
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
                    <h2 class="bandeau">Découverte de la clinique</h2>
                    <div class="index-separator-0"></div>

                    <div class="carousel">
                        <div class="carousel-img"></div>
                        <h2 id="carousel-titre">Titre associé</h2>
                        <p id="carousel-text">Écrire ici une courte description, une phrase d'accroche.</p>

                        <button id="left-button-carou" class="fa fa-chevron-left"></button>

                        <button id="right-button-carou" class="fa fa-chevron-right"></button>

                    </div>
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

                <section>
                    <div class="section-header">
                        <h2 class="bandeau">Nos prestations</h2>
                    </div>
                        <div class="lesblocs">
                            <!-- bloc 1/6 -->                            
                            <div class="center-generique">
                                <?php include("img/svg/prestation_svg/prestation_stethoscope.php"); ?>
                                <button class="bouton-generique" onclick="">Consultation</button>
                            </div>
                            <!-- bloc 2/6 -->
                            <div class="center-generique">
                                <?php include("img/svg/prestation_svg/prestation_camera.php"); ?>
                                <button class="bouton-generique" onclick="">Imagerie</button>
                            </div>                                                       
                            <!-- bloc 3/6 -->
                            <div class="center-generique">
                                <?php include("img/svg/prestation_svg/prestation_microscope.php"); ?>
                                <button class="bouton-generique" onclick="">Analyse sanguine</button>                                
                            </div>
                            <!-- bloc 4/6 -->
                            <div class="center-generique">     
                            <?php include("img/svg/prestation_svg/prestation_scalpel.php"); ?>          
                                <button class="bouton-generique" onclick="">Chirurgie</button>                                
                            </div>
                            <!-- bloc 5/6 -->
                            <div class="center-generique">     
                            <?php include("img/svg/prestation_svg/prestation_hopital.php"); ?>
                                <button class="bouton-generique" onclick="">Hospitalisation</button>                                
                            </div>
                            <!-- bloc 6/6 -->
                            <div class="center-generique">    
                            <?php include("img/svg/prestation_svg/prestation_lapin.php"); ?>                             
                                <button class="bouton-generique" onclick="">NAC</button>                                
                            </div>
                        </div>
                    </section>
                    
                    <!-- CONSEILS -->
                    
                        <h2 class="bandeau">Nos Conseils</h2>
                    <!-- ICONES -->       
                        <div class="icone-generique">
                            <div class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_dent.php"); ?>
                                <button class="bouton-generique" onclick="fiche_conseil('dents')">Dents</button>
                            </div>

                            <div class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_eyecat.php"); ?>
                                <button class="bouton-generique" onclick="fiche_conseil('yeux')">Yeux / Oreilles</button>
                            </div>

                            <div class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_pelage.php"); ?>
                                <button class="bouton-generique" onclick="fiche_conseil('pelage')">Pelage</button>
                            </div>
                            
                            <div class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_parasite.php"); ?>
                                <button class="bouton-generique" onclick="fiche_conseil('parasites')">Parasites</button>
                            </div>
                        </div>
                        
                        <div class="icone-generique">
                            <div class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_vaccin_chien.php"); ?>
                                <button class="bouton-generique" onclick="fiche_conseil('vaccinChien')">Vaccin Chien</button>
                            </div>

                            <div class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_vaccin_chat.php"); ?>
                                <button class="bouton-generique" onclick="fiche_conseil('vaccinChat')">Vaccin Chat</button>
                            </div>

                            <div class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_barcode.php"); ?>
                                <button class="bouton-generique" onclick="fiche_conseil('identification')">Identification</button>
                            </div>
                            
                            <div class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_education.php"); ?>
                                <button class="bouton-generique" onclick="fiche_conseil('education')">Education</button>
                            </div>
                        </div>
                    
                    
                    <!-- VENTES -->
                        <section id="formeindex">
                            <h2 class="bandeau">Ventes</h2>
                            <div class="icone-generique">
                                <div class="center-generique">
                                    <?php include("img/svg/vente_svg/vente_croquette.php"); ?>
                                    <button class="bouton-generique">Croquettes</button>
                                </div>

                                <div class="center-generique">
                                    <?php include("img/svg/vente_svg/vente_antiparasitaire.php"); ?>
                                    <button class="bouton-generique">Vermifuges</button>
                                </div>

                                <div class="center-generique">
                                    <?php include("img/svg/vente_svg/vente_shampooing.php"); ?>
                                    <button class="bouton-generique">Shampoings</button>
                                </div>
                                
                                <div class="center-generique">
                                    <?php include("img/svg/vente_svg/vente_brosse.php"); ?>
                                    <button class="bouton-generique">Brosses</button>
                                </div>
                                
                                <div class="center-generique">
                                    <?php include("img/svg/vente_svg/vente_collier.php"); ?>
                                    <button class="bouton-generique">Colliers et laisses</button>
                                </div>
                            </div>
                        </section>                     
                            

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