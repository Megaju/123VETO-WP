function affiche_presta(target) {
    document.getElementById("consultation").style.display = "none";
    document.getElementById("imagerie").style.display = "none";
    document.getElementById("analyse").style.display = "none";
    document.getElementById("chirurgie").style.display = "none";
    document.getElementById("hospitalisation").style.display = "none";
    document.getElementById("nac").style.display = "none";
    document.getElementById(target).style.display = "block";
};

//VENTE
$( document ).ready(function() {
    $("#medicament").click(function() {
        if ($("#article").css("display") == "none") {
            $("#article").css("display", "block");
        } else {
            $("#article").css("display", "none");
        }
    }); 
});