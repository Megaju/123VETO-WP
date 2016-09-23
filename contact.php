<?php //123veto ?>
    <?php /*
	Template Name: contact

 */ ?>

        <?php get_header(); ?>

            <!--Formulaire de contact-->
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
                    <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2698.9537895510025!2d-2.0795690492333927!3d47.432344407890994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480f80abaa6c1de3%3A0x7f75613c939f0679!2sClinique+V%C3%A9t%C3%A9rinaire+du+Docteur+Wintz!5e0!3m2!1sfr!2sfr!4v1472828074008" width="450" height="374" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                </div>
                </div>
            </div>
            <?php get_footer(); ?>