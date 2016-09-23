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
                    <h2 class="bandeau bandeau-mt0">L'équipe à votre service</h2>

                    <div class="index-separator-0"></div>

                    <div class="docteurs">
                        <!-- DOCTEUR I -->
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

                <section>
                    <div class="section-header">
                        <h2 class="bandeau">Nos prestations</h2>
                    </div>
                    <div class="lesblocs">
                        <!-- bloc 1/6 -->
                        <div class="center-generique">
                            <i class="fa fa-stethoscope fa-3x"></i>
                            <button class="bouton-generique" onclick="">Consultation</button>
                        </div>
                        <!-- bloc 2/6 -->
                        <div class="center-generique">
                            <i class="fa fa-camera fa-3x"></i>
                            <button class="bouton-generique" onclick="">Imagerie</button>
                        </div>
                        <!-- bloc 3/6 -->
                        <div class="center-generique">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="5em" height="2.6em" viewBox="0 0 45.916 45.916" style="enable-background:new 0 0 45.916 45.916;" xml:space="preserve">
                                <path d="M5.626,25.3l10.182,6.565c0.33,0.212,0.698,0.312,1.063,0.312c0.645,0,1.277-0.316,1.653-0.898    c0.588-0.912,0.326-2.128-0.586-2.715L7.755,22c-0.912-0.588-2.128-0.325-2.715,0.586C4.452,23.498,4.714,24.713,5.626,25.3z" fill="#F58900" />
                                <path d="M41.618,38.045H35.58c1.944-2.814,3.085-6.248,3.085-9.935c0-7.535-4.762-13.975-11.434-16.477l2.834-4.394    c0.674-1.046,0.906-2.317,0.644-3.534c-0.263-1.217-0.999-2.28-2.045-2.955c-2.181-1.406-5.086-0.778-6.491,1.401l-12.3,19.076    l7.893,5.09l5.592-8.672c4.816,1.05,8.434,5.34,8.434,10.466c0,4.494-2.779,8.383-6.71,9.935H4.298    c-2.169,0-3.928,1.767-3.928,3.936s1.759,3.935,3.928,3.935h37.32c2.169,0,3.928-1.765,3.928-3.935S43.787,38.045,41.618,38.045z" fill="#F58900" />
                            </svg>
                            <button class="bouton-generique" onclick="">Analyse sanguine</button>
                        </div>
                        <!-- bloc 4/6 -->
                        <div class="center-generique">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="5em" height="2.6em" viewBox="0 0 396.811 396.812" style="enable-background:new 0 0 396.811 396.812;" xml:space="preserve">
                                <path d="M230.738,193.126l14.805,6.843c4.979,2.305,10.938,0.112,13.237-4.865l73.17-157c2.302-4.979,0.112-10.936-4.866-13.238      l-51.803-23.95c-4.979-2.303-10.938-0.112-13.238,4.866l-73.17,157.001c-2.302,4.979-0.111,10.936,4.813.237l14.805,6.845      L230.738,193.126z" fill="#F58900" />
                                <path d="M257.811,238.648c2.435-5.267,0.118-11.564-5.147-13.999l-81.779-37.812c-5.266-2.435-11.566-0.118-14,5.147      L64.928,390.872c-2.435,5.267-0.186,7.442,4.998,4.838l140.728-70.711c5.184-2.604,11.416-9.043,13.85-14.309L257.811,238.648z" fill="#F58900" />
                            </svg>
                            <button class="bouton-generique" onclick="">Chirurgie</button>
                        </div>
                        <!-- bloc 5/6 -->
                        <div class="center-generique">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="5em" height="2.6em" viewBox="0 0 94.505 94.505" style="enable-background:new 0 0 94.505 94.505;" xml:space="preserve">
                                <path d="M89.217,72.686c0.111-0.332,0.174-0.688,0.174-1.058V32.771c0-1.842-1.494-3.335-3.336-3.335H67.488v41.359   c0,0.664-0.12,1.299-0.332,1.891h-2.178c0.111-0.332,0.174-0.688,0.174-1.058V18.261c0-1.842-1.494-3.335-3.336-3.335H32.687   c-1.842,0-3.335,1.493-3.335,3.335v53.367c0,0.37,0.063,0.726,0.174,1.058h-2.177c-0.212-0.592-0.332-1.227-0.332-1.891V29.436   H8.895c-1.842,0-3.335,1.493-3.335,3.335v38.857c0,0.37,0.063,0.726,0.173,1.058H0v6.894h94.505v-6.894H89.217L89.217,72.686z    M15.565,59.064h-4.781v-4.78h4.781V59.064z M15.565,50.671h-4.781V45.89h4.781V50.671z M15.565,42.555h-4.781v-4.781h4.781V42.555   z M23.015,59.064h-4.781v-4.78h4.781V59.064z M23.015,50.671h-4.781V45.89h4.781V50.671z M23.015,42.555h-4.781v-4.781h4.781   V42.555z M54.674,72.463H40.637V54.951h14.037V72.463z M47.252,39.941c-6.493,0-11.757-5.264-11.757-11.757   c0-6.494,5.265-11.758,11.757-11.758c6.494,0,11.758,5.264,11.758,11.758C59.01,34.678,53.746,39.941,47.252,39.941z    M77.605,59.064h-4.78v-4.78h4.78V59.064z M77.605,50.671h-4.78V45.89h4.78V50.671z M77.605,42.555h-4.78v-4.781h4.78V42.555z    M85.054,59.064h-4.78v-4.78h4.78V59.064z M85.054,50.671h-4.78V45.89h4.78V50.671z M85.054,42.555h-4.78v-4.781h4.78V42.555z    M50.17,25.266h4.503v5.836H50.17v4.505h-5.836v-4.505h-4.503v-5.836h4.503v-4.503h5.836V25.266z" fill="#F58900" />
                            </svg>
                            <button class="bouton-generique" onclick="">Hospitalisation</button>
                        </div>
                        <!-- bloc 6/6 -->
                        <div class="center-generique">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 25.965 25.965" style="enable-background:new 0 0 25.965 25.965;" xml:space="preserve" width="5em" height="2.6em">
                                <path d="M23.943,8.534c-1.148-1.667-2.211-2.423-3.191-2.269c-0.084,0.022-1.766-3.049-1.766-3.049    c-0.631-1.177-1.98-2.345-2.283-1.325c-0.141,0.752,1.658,3.97,1.617,3.995c-0.193-0.101-1.707-3.245-3.057-3.749    c-2.029-0.76,1.117,3.231,1.389,6.607c0.045,0.376-0.615,0.695-0.939,0.565c-0.75-0.334-1.303-0.589-1.656-0.766    c-6.8-3.16-11.242,3.432-11.639,9.593c-0.066,0.224-0.055,0.397-0.249,0.231c-0.563-0.488-1.384-1.521-1.677-1.521    c-0.896,0-0.69,2.62,1.646,4.22c0.187,0.136,0.402,0.129,0.642-0.015c0.238-0.146,0.4-0.184,0.484-0.118    c0.645,0.602,1.167,1.045,1.564,1.334c0.755,1.018,0.824,1.413,3.661,1.734c2.767,0.358,3.436,0.849,3.879-0.032    c0.372-0.75-0.069-0.967-0.751-1.467c-0.312-0.226-1.376-0.684-1.376-0.684c6.16-3.748,3.332-5.316,3.332-5.316    c1.557,0.738,2.266,2.515-1.624,5.032c0,0,4.735,0.424,5.268,1.234c0.783,1.004,1.105,1.384,2.254,1.537    c0.479,0,0.801-0.178,0.969-0.533c0.615-1.15-2.588-2.561-1.971-3.303c1.645-0.896,3.316-3.133,3.316-5.134    c2.752,0.017,4.18-2.199,4.18-3.163C25.962,11.062,25.025,10.112,23.943,8.534z M21.38,9.971c-0.488,0-0.885-0.397-0.885-0.887    c0-0.488,0.396-0.887,0.885-0.887c0.49,0,0.889,0.397,0.889,0.887C22.267,9.574,21.869,9.971,21.38,9.971z" fill="#F58900" />
                                <path d="M21.519,8.533c-0.34,0-0.617,0.275-0.617,0.616c0,0.34,0.277,0.616,0.617,0.616    s0.617-0.276,0.617-0.616C22.136,8.81,21.859,8.533,21.519,8.533z M21.664,9.518c-0.205,0-0.371-0.165-0.371-0.369    c0-0.203,0.166-0.369,0.371-0.369c0.201,0,0.367,0.167,0.367,0.369C22.031,9.353,21.865,9.518,21.664,9.518z" fill="#F58900" />
                            </svg>
                            <button class="bouton-generique" onclick="">NAC</button>
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
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 -70 310.883 310.883" style="enable-background:new 0 0 310.883 310.883;" xml:space="preserve" width="60px" height="60px">
                                <path d="M299.459,174.267c0,0-16.433-71.773-16.707-72.356c-3.429-10.694-17.078-19.279-40.725-25.565  c-23.243-6.181-53.993-9.584-86.586-9.584c-32.592,0-63.343,3.403-86.586,9.584c-23.657,6.29-37.308,14.879-40.729,25.58  c-0.272,0.578-16.702,72.342-16.702,72.342C4.778,176.576,0,182.879,0,190.312c0,18.79,17.893,33.075,53.18,42.458  c27.533,7.32,63.85,11.353,102.261,11.353c0.002,0,0.004,0,0.006,0c38.41,0,74.724-4.031,102.255-11.352  c35.287-9.383,53.18-23.668,53.18-42.459C310.883,182.879,306.105,176.576,299.459,174.267z M211.452,189.198  c0,7.987-6.498,14.486-14.485,14.486c-7.755,0-14.107-6.124-14.471-13.79h-54.11c-0.365,7.666-6.715,13.79-14.469,13.79  c-7.988,0-14.486-6.499-14.486-14.486c0-3.783,1.458-7.232,3.842-9.815c-2.384-2.583-3.842-6.032-3.842-9.815  c0-7.987,6.499-14.486,14.486-14.486c7.754,0,14.104,6.124,14.469,13.79h54.11c0.364-7.666,6.716-13.79,14.471-13.79  c7.987,0,14.485,6.499,14.485,14.486c0,3.783-1.458,7.232-3.842,9.815C209.994,181.966,211.452,185.415,211.452,189.198z   M235.357,120c-21.545,5.448-49.926,8.449-79.916,8.449c-29.99,0-58.371-3.001-79.916-8.449  c-20.722-5.24-28.012-10.998-29.796-13.382c1.8-2.425,9.104-8.177,29.8-13.409c21.544-5.448,49.924-8.448,79.912-8.448  c29.987,0,58.367,3,79.911,8.448c20.654,5.223,27.97,10.961,29.789,13.395C263.329,109.033,256.023,114.773,235.357,120z" fill="#F58900" />
                                <g>
                            </svg>
                            <button class="bouton-generique">Croquettes</button>
                        </div>

                        <div class="center-generique">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" width="60px" height="60px">
                                <g>
                                    <circle cx="44" cy="40" r="1" fill="#F58900" />
                                    <circle cx="46" cy="57" r="1" fill="#F58900" />
                                    <circle cx="21" cy="49" r="1" fill="#F58900" />
                                    <circle cx="37" cy="43" r="1" fill="#F58900" />
                                    <circle cx="52" cy="48" r="1" fill="#F58900" />
                                    <circle cx="15" cy="57" r="1" fill="#F58900" />
                                    <path d="M17.071,12.899C15.182,11.011,12.671,9.97,10,9.97s-5.182,1.041-7.071,2.929C1.04,14.788,0,17.299,0,19.971   c0,2.671,1.04,5.182,2.929,7.071l15.556,15.556l14.142-14.142L17.071,12.899z" fill="#F58900" />
                                    <path d="M57.071,3.929C55.182,2.04,52.671,1,50,1s-5.182,1.04-7.071,2.929L27.373,19.485l14.142,14.142l15.556-15.557   C58.96,16.182,60,13.671,60,11S58.96,5.818,57.071,3.929z" fill="#F58900" />
                                    <path d="M40,36c0-2.206-1.794-4-4-4s-4,1.794-4,4s1.794,4,4,4S40,38.206,40,36z" fill="#F58900" />
                                    <path d="M29,40c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S31.206,40,29,40z" fill="#F58900" />
                                    <path d="M39,46c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S41.206,46,39,46z" fill="#F58900" />
                                    <path d="M29,51c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S31.206,51,29,51z" fill="#F58900" />
                                </g>
                            </svg>
                            <button class="bouton-generique">Vermifuges</button>
                        </div>

                        <div class="center-generique">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" viewBox="0 0 297 297" enable-background="new 0 0 297 297" width="60px" height="60px">
                                <g>
                                    <path d="m96.734,46.798c5.775,0 10.458-4.682 10.458-10.458 0-13.683 11.924-15.271 15.584-15.425h15.266v32.26c-7.847,2.148-14.716,6.661-19.824,12.708h60.563c-5.108-6.047-11.977-10.56-19.824-12.708v-32.26h32.68c5.775,0 10.458-4.682 10.458-10.458s-4.682-10.457-10.457-10.457h-69.021c-0.07,0-0.141,0.001-0.211,0.002-14.522,0.293-36.129,10.213-36.129,36.339-0.001,5.775 4.682,10.457 10.457,10.457z" fill="#F58900" />
                                    <polygon points="155.82,227.456 222.301,227.456 212.066,155.82 155.82,155.82  " fill="#F58900" />
                                    <path d="m104.698,80.967c-5.204,0-9.616,3.827-10.353,8.979l-24.526,171.672c-1.645,8.703 0.623,17.599 6.246,24.459 5.691,6.942 14.102,10.923 23.078,10.923h98.712c8.976,0 17.388-3.981 23.08-10.923 5.623-6.859 7.891-15.756 6.246-24.458l-2.789-19.521h-75.892c-4.043,0-7.32-3.277-7.32-7.32v-86.278c0-4.043 3.277-7.32 7.32-7.32h61.474l-7.32-51.234c-0.736-5.152-5.148-8.979-10.353-8.979h-87.603z" fill="#F58900" />
                                </g>
                            </svg>
                            <button class="bouton-generique">Shampoings</button>
                        </div>

                        <div class="center-generique">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 53.516 53.516" style="enable-background:new 0 0 53.516 53.516;" xml:space="preserve" width="60px" height="60px">
                                <path d="M52.638,15.594L37.923,0.879C37.36,0.316,36.598,0,35.802,0c-0.795,0-1.559,0.316-2.121,0.879L28.469,6.09l-5.365,5.365  L11.455,23.105L6.09,28.469l-5.211,5.211C0.316,34.243,0,35.006,0,35.802c0,0.796,0.316,1.559,0.879,2.122l14.715,14.714  c0.585,0.585,1.354,0.878,2.121,0.878s1.536-0.293,2.122-0.879c1.171-1.171,1.171-3.071,0-4.243l-6.769-6.769l0.969-0.969  l6.769,6.769c0.585,0.585,1.354,0.878,2.121,0.878s1.536-0.293,2.122-0.879c1.171-1.171,1.171-3.071,0-4.243l-6.769-6.769  l1.122-1.122l6.769,6.769c0.585,0.585,1.354,0.878,2.121,0.878s1.536-0.293,2.122-0.879c1.171-1.171,1.171-3.071,0-4.243  l-6.769-6.769l1.582-1.582l6.769,6.769c0.585,0.586,1.354,0.879,2.121,0.879s1.536-0.293,2.121-0.879  c1.172-1.171,1.172-3.071,0-4.242l-6.769-6.769l1.582-1.582l6.769,6.769c1.171,1.171,3.071,1.172,4.243,0  c1.172-1.172,1.172-3.071,0-4.243l-6.769-6.769l1.122-1.122l6.769,6.769c1.171,1.171,3.071,1.172,4.243,0  c1.172-1.172,1.172-3.071,0-4.243l-6.769-6.769l0.969-0.969l6.769,6.769c1.171,1.171,3.071,1.172,4.243,0  C53.809,18.665,53.809,16.765,52.638,15.594z" fill="#F58900" />
                                <g>
                            </svg>
                            <button class="bouton-generique">Brosses</button>
                        </div>

                        <div class="center-generique">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 -40 326.577 326.577" style="enable-background:new 0 0 326.577 326.577;" xml:space="preserve" width="60px" height="60px">
                                <path d="M275.201,55.683c-30.025-9.884-69.769-15.327-111.912-15.327c-42.142,0-81.887,5.443-111.913,15.327  C8.913,69.662,0,87.578,0,100.146v59.709c0,12.568,8.913,30.484,51.376,44.462c22.988,7.567,51.681,12.52,82.778,14.43  c4.218,7.774,11.461,13.673,20.135,16.126v10.688h-12.238c0.002-0.105,0.003-0.212,0.003-0.317c0-9.22-7.501-16.721-16.721-16.721  c-9.22,0-16.721,7.501-16.721,16.721c0,4.77,2.007,9.079,5.222,12.128c-3.215,3.05-5.222,7.359-5.222,12.129  c0,9.22,7.501,16.721,16.721,16.721c9.22,0,16.721-7.501,16.721-16.721c0-0.106-0.001-0.213-0.003-0.318h42.476  c-0.002,0.106-0.003,0.212-0.003,0.318c0,9.22,7.501,16.721,16.722,16.721c9.219,0,16.72-7.501,16.72-16.721  c0-4.77-2.008-9.08-5.222-12.129c3.214-3.049,5.222-7.358,5.222-12.128c0-9.22-7.5-16.721-16.72-16.721  c-9.22,0-16.722,7.501-16.722,16.721c0,0.105,0.001,0.212,0.003,0.317h-12.238v-10.688c8.674-2.453,15.916-8.352,20.135-16.126  c31.096-1.91,59.79-6.862,82.777-14.43c42.463-13.977,51.376-31.893,51.376-44.462v-59.71  C326.577,87.577,317.664,69.661,275.201,55.683z M64.623,129.834c23.256-8.26,56.936-14.338,98.666-14.338  c41.729,0,75.41,6.078,98.665,14.338c-27.257,7.82-61.892,12.102-98.665,12.102S91.879,137.654,64.623,129.834z M308.577,100.145  c0,5.408-6.088,13.102-22.017,20.677c-4.082-2.117-8.704-4.19-13.917-6.198v-40.8C299.058,83.038,308.577,93.381,308.577,100.145z   M57.004,72.781c28.257-9.302,66.003-14.425,106.284-14.425c33.559,0,65.336,3.567,91.354,10.133v40.232  c-26.054-7.268-57.889-11.226-91.354-11.226c-39.399,0-76.57,5.466-104.666,15.391c-7.187,2.539-13.335,5.203-18.606,7.937  C24.088,113.248,18,105.554,18,100.146C18,93.125,28.247,82.248,57.004,72.781z M163.289,218.126  c-8.338,0-15.123-6.784-15.123-15.124c0-8.339,6.784-15.123,15.123-15.123c8.338,0,15.123,6.784,15.123,15.123  C178.411,211.342,171.627,218.126,163.289,218.126z" fill="#F58900" />
                                <g>
                            </svg>
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