<?php //fix bug header ?>

    <?php
/*
Template Name: pagetype
*/
?>


        <!-- pour insérer le header -->
        <?php get_header(); ?>

            <div id="attente-bootstrap" class="placement">
                <!-- pour insérer la sidebar -->
                <?php get_sidebar(); ?>

                    <div>
                        <section id="formeindex">
                            <h2>Notre savoir-faire</h2>
                            <div class="index-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas aspernatur dolorum ullam quisquam ut qui velit molestias inventore esse asperiores modi possimus.</p>
                            <div class="icone-generique">
                                <div class="center-generique">
                                    <i class="fa fa-stethoscope fa-3x"></i>
                                    <button class="bouton-generique" onclick="affich_consultation()">Consul.</button>
                                </div>

                                <div class="center-generique">
                                    <i class="fa fa-camera fa-3x"></i>
                                    <button class="bouton-generique" onclick="affich_imagerie()">Imagerie</button>
                                </div>

                                <div class="center-generique">
                                    <i class="fa fa-medkit fa-3x text-center"></i>
                                    <button class="bouton-generique" onclick="affich_analyse()">Analyses</button>
                                </div>

                                <div class="center-generique">
                                    <i class="fa fa-heartbeat fa-3x"></i>
                                    <button class="bouton-generique" onclick="affich_chirurgie()">Chirurgie</button>
                                </div>

                                <div class="center-generique">
                                    <i class="fa fa-hospital-o fa-3x"></i>
                                    <button class="bouton-generique" onclick="affich_hospitalisation()">Hosp.</button>
                                </div>

                                <div class="center-generique">
                                    <i class="fa fa-paw fa-3x"></i>
                                    <button class="bouton-generique" onclick="affich_nac()">NAC</button>
                                </div>
                            </div>
                        </section>
                    </div>
            </div>

            <!-- pour insérer le footer -->
            <?php get_footer(); ?>