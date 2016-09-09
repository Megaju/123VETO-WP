<?php /*

    Template Name: RDV

*/ ?>

<?php get_header(); ?>


<section id="rdv">

<<<<<<< HEAD
      
      <form action="formulaire de contact" method="post" id="form1">
          
          <input type="text" name="nom" placeholder="NOM" class="identite"></input> 
          </br></br>
          
          <input type="text" name="Prenom" placeholder="Prenom"></input>
          </br></br>
          
          <input type="text" name="Animal" placeholder="Nom de l'animal"></input>
          </br></br>

          <label id="typan">Vétérinaires :</label>
          <select name="Type" class="type1">
            <option value="veto1">Dr Aurélie Mayoussier</option>
            <option value="veto2">Dr Eric Wintz</option>
          </select>
          </br></br>

          <label id="typan">Type d'animal :</label>
          <select name="Type" class="type1">
            <option value="Chien">Chien</option>
            <option value="Chat">Chat</option>
            <option value="Autre">Autre</option>
          </select>
          </br></br>
          
          <select name="Probleme" class="type1">
            <option value="Consultation">Consultation</option> 
            <option value="Vaccination">Vaccination</option>
            <option value="Sterilisation">Sterilisation</option>    
            <option value="Chirurgie">Chirurgie</option>
            <option value="Hospitalisation">Hospitalisation</option>
            <option value="Autre">Autre</option>
          </select>
          </br></br>

          <textarea name="AVIS"></textarea>
          </br></br>
          

        <div id="bouton">
          <input type="submit" value="Envoyer">
          <input type="reset" value="Effacer">
        </div>
      </form>
      </div>

      <div class="agenda">

        <legend>
          <h1>Agenda</h1></legend>
        <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;width=600 height=200&amp;wkst=2&amp;hl=fr&amp;bgcolor=%23FFFFFF&amp;src=ngnn1lug1h2vh1inja9180alqk%40group.calendar.google.com&amp;color=%23875509&amp;ctz=Europe%2FParis"
=======
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
                  </p>    
                </div>    
              <textarea id="mess" placeholder="Votre message (facultatif)"></textarea>
                <div id="bouton">
                      <input type="submit" value="Envoyer" style="color: #263461">
                      <input type="reset" value="Effacer" style="color: #263461">
                      <p>* : Champs obligatoires</p>
                </div>
            </div>
         
               <div class="agenda">      
                        <h1>Agenda</h1>
        <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=500&amp;wkst=2&amp;hl=fr&amp;bgcolor=%23FFFFFF&amp;src=ngnn1lug1h2vh1inja9180alqk%40group.calendar.google.com&amp;color=%23875509&amp;ctz=Europe%2FParis"
>>>>>>> e69c30c52beba56903566bfa279ba0fa57a62b77
          frameborder="0" scrolling="no"></iframe>
               </div>
            </div> 
                  
      </form>
      </div>
  </section>

  <?php get_footer(); ?>
