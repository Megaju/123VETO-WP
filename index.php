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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="5em" height="5em" viewBox="0 0 45.916 45.916" style="enable-background:new 0 0 45.916 45.916;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M5.626,25.3l10.182,6.565c0.33,0.212,0.698,0.312,1.063,0.312c0.645,0,1.277-0.316,1.653-0.898    c0.588-0.912,0.326-2.128-0.586-2.715L7.755,22c-0.912-0.588-2.128-0.325-2.715,0.586C4.452,23.498,4.714,24.713,5.626,25.3z" fill="#F58900"/>
                                                <path d="M41.618,38.045H35.58c1.944-2.814,3.085-6.248,3.085-9.935c0-7.535-4.762-13.975-11.434-16.477l2.834-4.394    c0.674-1.046,0.906-2.317,0.644-3.534c-0.263-1.217-0.999-2.28-2.045-2.955c-2.181-1.406-5.086-0.778-6.491,1.401l-12.3,19.076    l7.893,5.09l5.592-8.672c4.816,1.05,8.434,5.34,8.434,10.466c0,4.494-2.779,8.383-6.71,9.935H4.298    c-2.169,0-3.928,1.767-3.928,3.936s1.759,3.935,3.928,3.935h37.32c2.169,0,3.928-1.765,3.928-3.935S43.787,38.045,41.618,38.045z" fill="#F58900"/>
                                            </g>
                                    </svg>
                                </div>
                                <div>
                                    <button class="btnPre"><a href="#">Analyse sanguine</a></button>
                                </div>
                            </div>
                            <!-- bloc 1/6 -->
                            <div class="bloc">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="5em" height="5em" viewBox="0 0 396.811 396.812" style="enable-background:new 0 0 396.811 396.812;" xml:space="preserve">
                                        <g id="Layer_5_72_">                                                    
                                            <path d="M230.738,193.126l14.805,6.843c4.979,2.305,10.938,0.112,13.237-4.865l73.17-157c2.302-4.979,0.112-10.936-4.866-13.238      l-51.803-23.95c-4.979-2.303-10.938-0.112-13.238,4.866l-73.17,157.001c-2.302,4.979-0.111,10.936,4.813.237l14.805,6.845      L230.738,193.126z" fill="#F58900"/>
                                            <path d="M257.811,238.648c2.435-5.267,0.118-11.564-5.147-13.999l-81.779-37.812c-5.266-2.435-11.566-0.118-14,5.147      L64.928,390.872c-2.435,5.267-0.186,7.442,4.998,4.838l140.728-70.711c5.184-2.604,11.416-9.043,13.85-14.309L257.811,238.648z" fill="#F58900"/> 
                                        </g>
                                    </svg>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 25.965 25.965" style="enable-background:new 0 0 25.965 25.965;" xml:space="preserve" width="5em" height="5em">	
		                                <path d="M23.943,8.534c-1.148-1.667-2.211-2.423-3.191-2.269c-0.084,0.022-1.766-3.049-1.766-3.049    c-0.631-1.177-1.98-2.345-2.283-1.325c-0.141,0.752,1.658,3.97,1.617,3.995c-0.193-0.101-1.707-3.245-3.057-3.749    c-2.029-0.76,1.117,3.231,1.389,6.607c0.045,0.376-0.615,0.695-0.939,0.565c-0.75-0.334-1.303-0.589-1.656-0.766    c-6.8-3.16-11.242,3.432-11.639,9.593c-0.066,0.224-0.055,0.397-0.249,0.231c-0.563-0.488-1.384-1.521-1.677-1.521    c-0.896,0-0.69,2.62,1.646,4.22c0.187,0.136,0.402,0.129,0.642-0.015c0.238-0.146,0.4-0.184,0.484-0.118    c0.645,0.602,1.167,1.045,1.564,1.334c0.755,1.018,0.824,1.413,3.661,1.734c2.767,0.358,3.436,0.849,3.879-0.032    c0.372-0.75-0.069-0.967-0.751-1.467c-0.312-0.226-1.376-0.684-1.376-0.684c6.16-3.748,3.332-5.316,3.332-5.316    c1.557,0.738,2.266,2.515-1.624,5.032c0,0,4.735,0.424,5.268,1.234c0.783,1.004,1.105,1.384,2.254,1.537    c0.479,0,0.801-0.178,0.969-0.533c0.615-1.15-2.588-2.561-1.971-3.303c1.645-0.896,3.316-3.133,3.316-5.134    c2.752,0.017,4.18-2.199,4.18-3.163C25.962,11.062,25.025,10.112,23.943,8.534z M21.38,9.971c-0.488,0-0.885-0.397-0.885-0.887    c0-0.488,0.396-0.887,0.885-0.887c0.49,0,0.889,0.397,0.889,0.887C22.267,9.574,21.869,9.971,21.38,9.971z" fill="#F58900"/>
		                                <path d="M21.519,8.533c-0.34,0-0.617,0.275-0.617,0.616c0,0.34,0.277,0.616,0.617,0.616    s0.617-0.276,0.617-0.616C22.136,8.81,21.859,8.533,21.519,8.533z M21.664,9.518c-0.205,0-0.371-0.165-0.371-0.369    c0-0.203,0.166-0.369,0.371-0.369c0.201,0,0.367,0.167,0.367,0.369C22.031,9.353,21.865,9.518,21.664,9.518z" fill="#F58900"/>
                                    </svg>
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
                                    <button class="bouton-generique">Medication</button>
                                </div>

                                <div class="center-generique">
                                    <i class="fa fa-medkit fa-3x"></i>
                                    <button class="bouton-generique">Medication</button>
                                </div>

                                <div class="center-generique">
                                    <i class="fa fa-medkit fa-3x"></i>
                                    <button class="bouton-generique">Medication</button>
                                </div>
                                
                                <div class="center-generique">
                                    <i class="fa fa-medkit fa-3x"></i>
                                    <button class="bouton-generique">Medication</button>
                                </div>
                                
                                <div class="center-generique">
                                    <i class="fa fa-medkit fa-3x"></i>
                                    <button class="bouton-generique">Medication</button>
                                </div>
                            </div>
                        </section>

                </div>
        </section>

    </div>
    
    <?php get_footer(); ?>

        </body>

        </html>
