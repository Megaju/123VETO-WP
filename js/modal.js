
$( document ).ready(function() {
    console.log( "ready!" );
	var modal = document.getElementById('myModal');
	var link = document.getElementById("link");
	var span = document.getElementsByClassName("close")[0];

	link.onclick = function() {       // Ouvre la modale.
	    modal.style.display = "block";
	}


	span.onclick = function() {		// Ferme la modale (button 'X').
	    modal.style.display = "none";
	}

	window.onclick = function(event) {	// Ferme la modale lorsque l'on click n'importe ou sur l'écran.
	    if (event.target == modal) {
	    modal.style.display = "none";
	    }
	}
});