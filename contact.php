<?php //fix bug header ?>


<!--Formulaire de contact-->
	<h2 class="TitreForm">NOUS CONTACTER PAR MAIL</h2>
			
		<form action="formulaire de contact" method="post">
				
				<input type="text" name="nom" placeholder="NOM" class="identite"></input> 
				</br></br>
				
				<input type="text" name="Prenom" placeholder="Prenom"></input>
				</br></br>
				
				<input type="text" name="Animal" placeholder="Nom de l'animal"></input>
				</br></br>


				<select name="Type" class="type">
		       		<option value="Chien">Chien</option>
		        	<option value="Chat">Chat</option>
		        	<option value="Autre">Autre</option>
		         </select>
		         </br></br>
		         
		        <select name="Probleme" class="probleme">
		        	<option value="Consultation">Consultation</option> 
		        	<option value="Vaccination">Vaccination</option>
		        	<option value="Sterilisation">Sterilisation</option>    
		        	<option value="Chirurgie">Chirurgie</option>
		        	<option value="Hospitalisation">Hospitalisation</option>
		        	<option value="Autre">Autre</option>
		        </select>
		        </br></br>

		        <textarea name="AVIS"></textarea>

		        <button type="button" class="btn btn-default EnvoieForm">ENVOYER</button>
		</form>