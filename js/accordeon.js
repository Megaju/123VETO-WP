//FICHE PRESTATION
$( document ).ready(function() {
	
	/*var today = new Date();
	var expires = new Date();
	expires.setTime(today.getTime() + (1*1*1*1*5000));
	var d = expires.toGMTString();*/
	
	$("#i_consul").click(function() {
		document.cookie = "value=consul";
	});
	$("#i_imagerie").click(function() {
		document.cookie = "value=imagerie";
	});
	$("#i_analyses").click(function() {
		document.cookie = "value=analyses";
	});
	$("#i_chirurgie").click(function() {
		document.cookie = "value=chirurgie";
	});
	$("#i_hosp").click(function() {
		document.cookie = "value=hosp";
	});
	$("#i_nac").click(function() {
		document.cookie = "value=nac";
	});
	
	//Affiche presta quand on est sur la page
	$("#p_consul").click(function() {
		$("#consultation").show();
		$("#imagerie").hide();
		$("#analyses").hide();
		$("#chirurgie").hide();
		$("#hospitalisation").hide();
		$("#nac").hide();
	});
	$("#p_imagerie").click(function() {
		$("#consultation").hide();
		$("#imagerie").show();
		$("#analyses").hide();
		$("#chirurgie").hide();
		$("#hospitalisation").hide();
		$("#nac").hide();
	});
	$("#p_analyses").click(function() {
		$("#consultation").hide();
		$("#imagerie").hide();
		$("#analyses").show();
		$("#chirurgie").hide();
		$("#hospitalisation").hide();
		$("#nac").hide();
	});
	$("#p_chirurgie").click(function() {
		$("#consultation").hide();
		$("#imagerie").hide();
		$("#analyses").hide();
		$("#chirurgie").show();
		$("#hospitalisation").hide();
		$("#nac").hide();
	});
	$("#p_hosp").click(function() {
		$("#consultation").hide();
		$("#imagerie").hide();
		$("#analyses").hide();
		$("#chirurgie").hide();
		$("#hospitalisation").show();
		$("#nac").hide();
	});
	$("#p_nac").click(function() {
		$("#consultation").hide();
		$("#imagerie").hide();
		$("#analyses").hide();
		$("#chirurgie").hide();
		$("#hospitalisation").hide();
		$("#nac").show();
	});
	
	
	function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
	}
	
		switch(getCookie("value")) {
		case "imagerie":
			$("#consultation").hide();
			$("#imagerie").show();
			$("#analyses").hide();
			$("#chirurgie").hide();
			$("#hospitalisation").hide();
			$("#nac").hide();
			break;
		case "analyses":
			$("#consultation").hide();
			$("#imagerie").hide();
			$("#analyses").show();
			$("#chirurgie").hide();
			$("#hospitalisation").hide();
			$("#nac").hide();
			break;
		case "chirurgie":
			$("#consultation").hide();
			$("#imagerie").hide();
			$("#analyses").hide();
			$("#chirurgie").show();
			$("#hospitalisation").hide();
			$("#nac").hide();
			break;
		case "hosp":
			$("#consultation").hide();
			$("#imagerie").hide();
			$("#analyses").hide();
			$("#chirurgie").hide();
			$("#hospitalisation").show();
			$("#nac").hide();
			break;
		case "nac":
			$("#consultation").hide();
			$("#imagerie").hide();
			$("#analyses").hide();
			$("#chirurgie").hide();
			$("#hospitalisation").hide();
			$("#nac").show();
			break;
    default:
      $("#consultation").show();
			$("#imagerie").hide();
			$("#analyses").hide();
			$("#chirurgie").hide();
			$("#hospitalisation").hide();
			$("#nac").hide();
			break;
	}
	
	
	//VENTE
    $("#croquettes").click(function() {
        if ($("#article-croquettes").css("display") == "none") {
            $("#article-croquettes").css("display", "block");
            $("#article-croquettes").css("display", "block");
        } else {
            $("#article-croquettes").css("display", "none");
        }
    }); 

    $("#vermifuges").click(function() {
        if ($("#article-vermifuges").css("display") == "none") {
            $("#article-vermifuges").css("display", "block");
        } else {
            $("#article-vermifuges").css("display", "none");
        }
    }); 

    $("#shampoings").click(function() {
        if ($("#article-shampoings").css("display") == "none") {
            $("#article-shampoings").css("display", "block");
        } else {
            $("#article-shampoings").css("display", "none");
        }
    }); 

    $("#brosses").click(function() {
        if ($("#article-brosses").css("display") == "none") {
            $("#article-brosses").css("display", "block");
        } else {
            $("#article-brosses").css("display", "none");
        }
    }); 

    $("#colliers").click(function() {
        if ($("#article-colliers").css("display") == "none") {
            $("#article-colliers").css("display", "block");
        } else {
            $("#article-colliers").css("display", "none");
        }
    }); 
});

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