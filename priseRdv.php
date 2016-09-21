<?php /*

    Template Name: RDV

*/ ?>

    <?php get_header(); ?>





        <form class="priseRDV-form" action="mon-formulaire" method="post">
            <h2>Rendez-vous</h2>

            <input name="prenom" id="prenom" placeholder="Prénom" required="required">
            <input name="nom" id="nom" placeholder="Nom" required="required">
            <input name="tel" id="tel" placeholder="Téléphone" required="required">
            <input name="mail" id="mail" placeholder="E-mail">
            <input name="aniName" id="aniName" placeholder="Nom de l'animal" required="required">

            <div class="option">
               <div class="jsaisplus">
                <label for="veto">Vétérinaire :</label>
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
            </div>
            </div>
            <textarea placeholder="Votre message (facultatif)"></textarea>
            <div>
                <input type="submit" value="Envoyer">
                <input type="reset" value="Effacer">
                <p>* : Champs obligatoires</p>
            </div>
            </div>

        </form>

        <?php get_footer(); ?>