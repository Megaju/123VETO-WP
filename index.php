<?php get_header(); ?>

    <div id="page">
        <section class="flexbox">
            <!-- aside -->
            <?php get_sidebar(); ?>
                <div>
                    <!-- le bloc team pour le hover est stocké dans le pc 26 -->
                    <div id="bloc-team">
                        <h2 class="bandeau bandeau-mt0">L'équipe à votre service</h2>

                        <div class="index-separator-0"></div>

                        <div class="docteurs">                          <!-- DOCTEUR I -->
                            <div class="docteur" id="docteur1">  
                            </div>
                            <div class="docteur-present">
                                    <h3>Dr Aurélie Mayoussier</h3>
                                    <h4>Diplômée de l’école vétérinaire de Maisons Alfort en 2008</h4>
                                    <p>Dr Aurélie Mayoussier Diplômée de l’école vétérinaire de MaisonsAlfort en 2008, elle se passionne pour la médecine de l’élevage et de la reproduction et la médecine des NAC. Le Dr Mayoussier possède deux chats Pratchett et Bubule ainsi que Bambou, chien loup de Saarloos.</p>
                                </div>
                                
                            <!-- DOCTEUR II -->  
                            <div class="docteur" id="docteur2"> 
                            </div>
                            <div class="docteur-present">
                                    <h3>Dr Eric Wintz</h3>
                                    <h4>Diplômé de l’école vétérinaire de Nantes en 1990</h4>
                                    <p>Dr Eric Wintz Diplômé de l’école vétérinaire de Nantes en 1990, il se passionne pour la dermatologie et la cardiologie. Le Dr Wintz possède quatre chats Leelas (européenne), Gribouille (européen), Hannah (Mane Coon), et Joey (Ragdoll), des Platis, deux lapins nains Neige et Teddy ainsi que Lexie, chihuahua.</p>
                            </div>
                        </div>
                    </div>
                    
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

                    <section class="secpage">
                        <div class="section-header">
                            <h2  class="bandeau">Nos prestations</h2>
                        </div>
                        <div class="lesblocs">
                            <!-- bloc 1/6 -->
                            <div class="bloc">
                                <div>
                                    <i class="fa fa-stethoscope fa-5x"></i>
                                </div>
                                <div>
                                    <button class="btnPre"><a href="#">Consultation</a></button>
                                </div>
                            </div>
                            <!-- bloc 1/6 -->
                            <div class="bloc">
                                <div>
                                    <i class="fa fa-camera fa-5x"></i>
                                </div>
                                <div>
                                    <button class="btnPre"><a href="#">Imagerie</a></button>
                                </div>
                            </div>                            
                            <!-- bloc 1/6 -->
                            <div class="bloc">
                                <div>
                                    <i class="flaticon-microscope"></i>
                                </div>
                                <div>
                                    <button class="btnPre"><a href="#">Analyse sanguine</a></button>
                                </div>
                            </div>
                            <!-- bloc 1/6 -->
                            <div class="bloc">
                                <div>
                                    <i class="flaticon-drawing-scalpel"></i>
                                </div>
                                <div>
                                    <button class="btnPre"><a href="#">Chirurgie</a></button>
                                </div>
                            </div>
                            <!-- bloc 1/6 -->
                            <div class="bloc">
                                <div>
                                    <i class="fa fa-hospital-o fa-5x"></i>
                                </div>
                                <div>
                                    <button class="btnPre"><a href="#">Hospitalisation</a></button>
                                </div>
                            </div>
                            <!-- bloc 1/6 -->
                            <div class="bloc">
                                <div>
                                    <i class="flaticon-easter-rabbit"></i>
                                </div>
                                <div>
                                    <button class="btnPre"><a href="#">NAC</a></button>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <!-- CONSEILS -->
                    
                        <h2 class="bandeau">Nos Conseils</h2>
                    <!-- ICONES -->       
                        <div class="icone-generique">
                            <div class="center-generique">
                                <i class="fa fa-user-md fa-3x"></i>
                                <button class="bouton-generique" onclick="fiche_conseil('dents')">Dents</button>
                            </div>

                            <div class="center-generique">
                                <i class="fa fa-eye fa-3x"></i>
                                <button class="bouton-generique" onclick="fiche_conseil('yeux')">Yeux / Oreilles</button>
                            </div>

                            <div class="center-generique">
                                <i class="fa fa-paw fa-3x text-center"></i>
                                <button class="bouton-generique" onclick="fiche_conseil('pelage')">Pelage</button>
                            </div>
                            
                            <div class="center-generique">
                                <i class="fa fa-bug fa-3x text-center"></i>
                                <button class="bouton-generique" onclick="fiche_conseil('parasites')">Parasites</button>
                            </div>
                        </div>
                        
                        <div class="icone-generique">
                            <div class="center-generique">
                                <i class="fa fa-plus-square fa-3x"></i>
                                <button class="bouton-generique" onclick="fiche_conseil('vaccinChien')">Vaccin Chien</button>
                            </div>

                            <div class="center-generique">
                                <i class="fa fa-medkit fa-3x"></i>
                                <button class="bouton-generique" onclick="fiche_conseil('vaccinChat')">Vaccin Chat</button>
                            </div>

                            <div class="center-generique">
                                <i class="fa fa-barcode fa-3x text-center"></i>
                                <button class="bouton-generique" onclick="fiche_conseil('identification')">Identification</button>
                            </div>
                            
                            <div class="center-generique">
                                <i class="fa fa-book fa-3x text-center"></i>
                                <button class="bouton-generique" onclick="fiche_conseil('education')">Education</button>
                            </div>
                        </div>
                    
                    
                    <!-- VENTES -->
                        <section id="formeindex">
                            <h2 class="bandeau">Ventes</h2>
                            <div class="icone-generique">
                                <div class="center-generique">
                                    <i class="fa fa-medkit fa-3x"></i>
                                    <button class="bouton-generique" onclick="affich_consultation()">Medication</button>
                                </div>

                                <div class="center-generique">
                                    <i class="fa fa-cutlery fa-3x"></i>
                                    <button class="bouton-generique" onclick="affich_imagerie()">Alimentation</button>
                                </div>

                                <div class="center-generique">
                                    <i class="fa fa-list fa-3x text-center"></i>
                                    <button class="bouton-generique" onclick="affich_analyse()">Index</button>
                                </div>
                            </div>
                        </section>

                </div>
        </section>

    </div>
    
    <?php get_footer(); ?>

        </body>

        </html>
