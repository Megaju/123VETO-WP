<?php //123veto ?>
<?php /*
	Template Name: contact

 */ ?>

<?php get_header(); ?>

<!--Formulaire de contact-->

	<h2 class="TitreForm">NOUS CONTACTER PAR MAIL</h2></br>


	<div class="contact">
		
		<div class="formulaire">
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
					<button type="button" class="btn btn-default EnvoieForm">ENVOYER</button>
			</form>
		</div>

		<div class="localisation">
			<p id="locapara">
			32 rue du vélodrome à Pontchâteau (Loire-Atlantique).
			Du lundi au vendredi de 9h à 12h et de 14h à 19h et le samedi de 9h à 12h.
			Tel : 02 40 01 61 69.
			</p>
			<iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2698.9537895510025!2d-2.0795690492333927!3d47.432344407890994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480f80abaa6c1de3%3A0x7f75613c939f0679!2sClinique+V%C3%A9t%C3%A9rinaire+du+Docteur+Wintz!5e0!3m2!1sfr!2sfr!4v1472828074008" width="400" height="374" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
		</div>
	</div>


	<?php get_footer(); ?>