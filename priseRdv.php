<?php /*

    Template Name: RDV

*/ ?>

    <?php get_header(); ?>

            <!--<input name="prenom" id="prenom" placeholder="Prénom" required="required">
            <input name="nom" id="nom" placeholder="Nom" required="required">
            <input name="tel" id="tel" placeholder="Téléphone" required="required">
            <input name="mail" id="mail" placeholder="E-mail">
            <input name="aniName" id="aniName" placeholder="Nom de l'animal" required="required">-->
            <div class="RDV">
                <div class="center-RDV">
                    <div class="select-RDV">
                        <!--<label for="veto">Vétérinaire :</label>
                        <select>
                            <option>Indifférent</option>
                            <option>Dr Wintz</option>
                            <option>Dr Mayoussier</option>
                        </select>
                        <label for="Type">animal :</label>
                        <select>
                            <option>Chien</option>
                            <option>Chat</option>
                            <option>N.A.C</option>
                        </select>
                        <label for="motif"> Besoin :</label>
                        <select>
                            <option>Vaccin</option>
                            <option>Médecine</option>
                            <option>Chirurgie: stérilisation</option>
                            <option>Chirurgie: détartrage</option>
                            <option>Autres</option>
                        </select>
                        <label for="date">Date :</label>
                        <select>
                            <option>Date 1</option>
                            <option>Date 2</option>
                            <option>Date 3</option>
                        </select>-->
                        <?php the_post(); the_content(); ?>
                    </div>
                </div>
                <div class="localisation">
                gfch:h;;kg:fdc
                </div>
                </div>
            <!--<textarea placeholder="Votre message (facultatif)"></textarea>
            <div class="bouton-envoyer-effacer">
                <input type="submit" value="Envoyer">
            </div>-->
            </div>

        <?php get_footer(); ?>