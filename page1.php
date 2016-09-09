<?php //fix bug header ?>

    <?php
/*
Template Name: conseils
*/
?>


        <!-- pour insérer le header -->
        <?php get_header(); ?>

            <div id="attente-bootstrap" class="placement">
                <!-- pour insérer la sidebar -->
                <?php get_sidebar(); ?>

                    <div>
                        <section class="formeindex">
                            <h2>Nos Conseils</h2>
                            <div class="index-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas aspernatur dolorum ullam quisquam ut qui velit molestias inventore esse asperiores modi possimus.</p>
                            <div class="icone-generique">
                                <div class="center-generique">
                                    <i class="fa fa-user-md fa-3x"></i>
                                    <button class="bouton-generique" onclick="affich_consultation()">Dents</button>
                                </div>

                                <div class="center-generique">
                                    <i class="fa fa-eye fa-3x"></i>
                                    <button class="bouton-generique" onclick="affich_imagerie()">Yeux / Oreilles</button>
                                </div>

                                <div class="center-generique">
                                    <i class="fa fa-paw fa-3x text-center"></i>
                                    <button class="bouton-generique" onclick="affich_analyse()">Pelage</button>
                                </div>
                                
                                <div class="center-generique">
                                    <i class="fa fa-bug fa-3x text-center"></i>
                                    <button class="bouton-generique" onclick="affich_analyse()">Parasites</button>
                                </div>
                            </div>
                            
                            <div class="icone-generique">
                                <div class="center-generique">
                                    <i class="fa fa-plus-square fa-3x"></i>
                                    <button class="bouton-generique" onclick="affich_consultation()">Vaccin Chien</button>
                                </div>

                                <div class="center-generique">
                                    <i class="fa fa-medkit fa-3x"></i>
                                    <button class="bouton-generique" onclick="affich_imagerie()">Vaccin Chat</button>
                                </div>

                                <div class="center-generique">
                                    <i class="fa fa-barcode fa-3x text-center"></i>
                                    <button class="bouton-generique" onclick="affich_analyse()">Identification</button>
                                </div>
                                
                                <div class="center-generique">
                                    <i class="fa fa-book fa-3x text-center"></i>
                                    <button class="bouton-generique" onclick="affich_analyse()">Education</button>
                                </div>
                            </div>
                        </section>
                    </div>
            </div>

            <!-- pour insérer le footer -->
            <?php get_footer(); ?>