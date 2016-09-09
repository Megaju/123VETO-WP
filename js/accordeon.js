function affiche_presta(target) {
	document.getElementById("consultation").style.display="none";
	document.getElementById("imagerie").style.display="none";
	document.getElementById("analyse").style.display="none";
	document.getElementById("chirurgie").style.display="none";
	document.getElementById("hospitalisation").style.display="none";
	document.getElementById("nac").style.display="none";
	document.getElementById(target).style.display="block";
};

function fiche_conseil(target) {
	document.getElementById("dents").style.display="none";
	document.getElementById("yeux").style.display="none";
	document.getElementById("pelage").style.display="none";
	document.getElementById("parasites").style.display="none";
	document.getElementById("vaccinChien").style.display="none";
	document.getElementById("vaccinChat").style.display="none";
	document.getElementById("identification").style.display="none";
	document.getElementById("education").style.display="none";
	document.getElementById(target).style.display="block";
};