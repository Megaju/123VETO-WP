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
                <div class="options">
                    <p>
                        <label for="veto">Vétérinaire :</label>
                        <select>
                            <option>Indifférent</option>
                            <option>Dr Wintz</option>
                            <option>Dr Mayoussier</option>
                        </select>
                        <br />
                        <label for="Type">Type d'animal :</label>
                        <select>
                            <option>Chien</option>
                            <option>Chat</option>
                            <option>N.A.C</option>
                        </select>
                        <br />
                        <label for="motif"> Motif :</label>
                        <select>
                            <option>Vaccin</option>
                            <option>Médecine</option>
                            <option>Chirurgie: stérilisation</option>
                            <option>Chirurgie: détartrage</option>
                            <option>Autres</option>
                        </select>
                        <br />
                        <label for="date">Date :</label>
                    </p>
                </div>
                <textarea id="mess" placeholder="Votre message (facultatif)" class="big"></textarea>
                <div id="bouton">
                    <input type="submit" value="Envoyer" style="color: #f58900">
                    <input type="reset" value="Effacer" style="color: #f58900">
                    <p>* : Champs obligatoires</p>
                </div>


            </form>

        <?php get_footer(); ?>