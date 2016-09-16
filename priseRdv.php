<?php /*

    Template Name: RDV

*/ ?>

<?php get_header(); ?>



<section id="rdv">


      <form action="mon-formulaire" method="post">
            <div class="section">
                        <h1>Rendez-vous</h1>
              <input name="prenom" id="prenom" placeholder="*Prénom" required="required"><br /> 
              <input name="nom" id="nom" placeholder="*Nom" required="required"><br />             
              <input name="tel" id="tel" placeholder="*Téléphone" required="required"><br />
              <input name="mail" id="mail" placeholder="E-mail"><br />
              <input name="aniName" id="aniName" placeholder="*Nom de l'animal" required="required"><br />
                <div class="options">
                  <p>
                  <label for="veto">Vétérinaire :</label> 
                      <select>
                          <option>Indifférent</option>
                          <option>Dr Wintz</option>
                          <option>Dr Mayoussier</option>
                      </select><br />
                      <label for="Type">Type d'animal :</label> 
                      <select>
                          <option>Chien</option>
                          <option>Chat</option>
                          <option>N.A.C</option>
                      </select><br />
                  <label for="motif"> Motif :</label>
                      <select>
                          <option>Vaccin</option>
                          <option>Médecine</option>
                          <option>Chirurgie: stérilisation</option>
                          <option>Chirurgie: détartrage</option>
                          <option>Autres</option>
                      </select><br />
                  <label for="date">Date :</label>
                  </p>    
                </div>    
              <textarea id="mess" placeholder="Votre message (facultatif)" class="big"></textarea>
                <div id="bouton">
                      <input type="submit" value="Envoyer" style="color: #f58900">
                      <input type="reset" value="Effacer" style="color: #f58900">
                      <p>* : Champs obligatoires</p>
                </div>
            </div>
         
                                 
      </form>
      </div>
  </section>

  <?php get_footer(); ?>
