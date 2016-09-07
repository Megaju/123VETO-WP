<?php /*

    Template Name: RDV

*/ ?>

<?php get_header(); ?>


<section id="rdv">
    <div class="formulaire">

      <form action="mon-formulaire" method="post">
        <fieldset>
          <legend><h1>Rendez-vous</h1></legend>
          <div>
              <label for="Nom"> Nom : </label>
              <input type="text" id="Nom" /><br />
              <label for="Prénom"> Prénom :</label>
              <input type="text" id="Prenom" /><br />
              <label for="Tél"> Tél : </label>
              <input type="Tél" id="Tel" /><br />
            <div>
                <label for="Motif"> Motif : </label>
                  <select>
                      <option>Medecine</option>
                      <option>Chirurgie</option>
                      <option>Vaccin</option>
                      <option>Autres</option>
                  </select>
            </div>
                <div>
                  <label for="Nomanimal"> Nom de l'animal : </label><input type="text" id="Nomanimal" />
                </div>
                    <div id="commentaire">
                      <label for="sujet"> Commentaires :</label>
                      <textarea id="sujet" rows="10" cols="60">
        		          </textarea>
                    </div>
        </fieldset><br />
        
        <div id="bouton">
          <input type="submit" value="Envoyer">
          <input type="reset" value="Effacer">
        </div>
      </form>
      </div>

      <div class="agenda">

        <legend>
          <h1>Agenda</h1></legend>
        <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=500&amp;wkst=2&amp;hl=fr&amp;bgcolor=%23FFFFFF&amp;src=ngnn1lug1h2vh1inja9180alqk%40group.calendar.google.com&amp;color=%23875509&amp;ctz=Europe%2FParis"
          frameborder="0" scrolling="no"></iframe>
      </div>

  </section>

  <?php get_footer(); ?>
