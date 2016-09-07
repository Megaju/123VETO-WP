<?php /*
    Template Name: RDV
*/ ?>

<section id="rdv" class="row col-lg-12">
   <div class="col-lg-6 col-xs-12">      <form action="mon-formulaire" method="post">
       <fieldset>
         <legend>
           <h1>Rendez-vous</h1></legend>
         <div>
           <label for="Nom"> Nom : </label><input type="text" id="Nom" /><br />
           <label for="Prénom"> Prénom :</label><input type="text" id="Prénom" /><br />
           <label for="Tél"> Tél : </label><input type="Tél" id="Tél" /><br />
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
           </div><br /><br />
           <div id="commentaire">
             <label for="sujet"> Commentaires :</label><br />
             <textarea id="sujet" rows="10" cols="40">
                  </textarea>
           </div>
       </fieldset><br />
       <div id="bouton">
         <input type="submit" value="Envoyer">
         <input type="reset" value="Effacer">
       </div>
     </form>
     </div>      <div class="col-lg-6 col-xs-12">        																																																																																																							
        <legend><h1>Agenda</h1></legend>
       <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=500&amp;wkst=2&amp;hl=fr&amp;bgcolor=%23FFFFFF&amp;src=ngnn1lug1h2vh1inja9180alqk%40group.calendar.google.com&amp;color=%23875509&amp;ctz=Europe%2FParis"
         frameborder="0" scrolling="no"></iframe>
     </div>
 </section>
 </div>