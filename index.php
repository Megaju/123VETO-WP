<?php get_header(); ?>

    <div id="page">
        <section class="flexbox">
            <!-- aside -->
            <?php get_sidebar(); ?>
                <div>
                    <!-- le bloc team pour le hover est stocké dans le pc 26 -->
                    <div id="bloc-team">
                        <h2>L'équipe à votre service</h2>

                        <div class="index-separator"></div>

                        <div class="docteurs">                          <!-- DOCTEUR I -->
                            <div class="docteur" id="docteur1">  
                            </div>
                            <div class="docteur-present">
                                    <h3>Dr Aurélie Mayoussier</h3>
                                    <h4>Diplômée de l’école vétérinaire de MaisonsAlfort en 2008</h4>
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

                    <div id="bloc-large-savoirfaire">
                        <h2>Notre savoir-faire</h2>
                        <div class="index-separator"></div>
                        <div id="bloc-medium-savoirfaire">
                            <div class="bloc-small-savoirfaire">
                                <div class="fa-sf">
                                    <i class="fa fa-4x">1</i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit[...]</p>
                                <a href="#">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>

                            <div class="bloc-small-savoirfaire">
                                <div class="fa-sf">
                                    <i class="fa fa-4x">2</i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit[...]</p>
                                <a href="#">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>

                            <div class="bloc-small-savoirfaire">
                                <div class="fa-sf">
                                    <i class="fa fa-4x">3</i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit[...]</p>
                                <a href="#">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>

                            <div class="bloc-small-savoirfaire">
                                <div class="fa-sf">
                                    <i class="fa fa-4x">V</i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit[...]</p>
                                <a href="#">Read More <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>


                    </div>

                    <div id="bloc-carousel">
                        <h2>Découverte de la clinique</h2>
                        <div class="index-separator"></div>

                        <div class="carousel">
                            <div class="carousel-img"></div>
                            <h2 id="carousel-titre">Titre associé</h2>
                            <p id="carousel-text">Écrire ici une courte description, une phrase d'accroche.</p>
                            
                            <ul>
                            <li id="carousel1"></li>
                            <li id="carousel2"></li>
                            <li id="carousel3"></li>
                        </ul>
                        </div>
                        
                        
                    </div>

                     <!-- section prestation -->
                    <section>

                        <div class="section-header">
                            <h2 class="text-center text-capitalize">Nos prestations</h2>
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

                </div>
        </section>

    </div>
    
    <?php get_footer(); ?>

        </body>

        </html>
