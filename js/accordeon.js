//FICHE PRESTATION
function affiche_presta(target) {
    document.getElementById("consultation").style.display = "none";
    document.getElementById("imagerie").style.display = "none";
    document.getElementById("analyse").style.display = "none";
    document.getElementById("chirurgie").style.display = "none";
    document.getElementById("hospitalisation").style.display = "none";
    document.getElementById("nac").style.display = "none";
    document.getElementById(target).style.display = "block";
};

//FICHE CONSEILS
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

//VENTE
$( document ).ready(function() {
    $("#croquettes").click(function() {
        if ($("#article-croquettes").css("display") == "none") {
            $("#article-croquettes").css("display", "block");
            $("#article-croquettes").css("display", "block");
        } else {
            $("#article-croquettes").css("display", "none");
        }
    }); 
});

$( document ).ready(function() {
    $("#vermifuges").click(function() {
        if ($("#article-vermifuges").css("display") == "none") {
            $("#article-vermifuges").css("display", "block");
        } else {
            $("#article-vermifuges").css("display", "none");
        }
    }); 
});

$( document ).ready(function() {
    $("#shampoings").click(function() {
        if ($("#article-shampoings").css("display") == "none") {
            $("#article-shampoings").css("display", "block");
        } else {
            $("#article-shampoings").css("display", "none");
        }
    }); 
});

$( document ).ready(function() {
    $("#brosses").click(function() {
        if ($("#article-brosses").css("display") == "none") {
            $("#article-brosses").css("display", "block");
        } else {
            $("#article-brosses").css("display", "none");
        }
    }); 
});

$( document ).ready(function() {
    $("#colliers").click(function() {
        if ($("#article-colliers").css("display") == "none") {
            $("#article-colliers").css("display", "block");
        } else {
            $("#article-colliers").css("display", "none");
        }
    }); 
});