<?php //123veto ?>
    <?php /*
	Template Name: contact

 */ ?>

        <?php get_header(); ?>

            <!--Formulaire de contact-->
                    <h2 class="bandeau bandeau-mt0">CONTACT</h2>

            <div class="contact">


                <div class="formulaire">
                    <div class="center-element-contact">
                        <h2>Contact</h2>
                        <i class="fa fa-comments" aria-hidden="true"></i>
                        <?php the_post(); the_content(); ?>
                    </div>
                </div>

                <div class="localisation">
                   <div class="center-element-contact">
                    <h2>Localisation</h2>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <p>32 rue du vélodrome à Pontchâteau (Loire-Atlantique). Du lundi au vendredi de 9h à 12h et de 14h à 19h et le samedi de 9h à 12h. Tel : 02 40 01 61 69.
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244569.08270122838!2d-2.2159114608786203!3d47.37033942091949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480f80aa4fd88069%3A0xae6eecf417f5293c!2s32+Rue+du+V%C3%A9lodrome%2C+44160+Pontch%C3%A2teau!5e0!3m2!1sfr!2sfr!4v1475068632972" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                </div>
            </div>
            <?php get_footer(); ?>