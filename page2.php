<?php //fix bug header ?>

    <?php
/*
Template Name: vente
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
            </div>

            <!-- pour insérer le footer -->
            <?php get_footer(); ?>