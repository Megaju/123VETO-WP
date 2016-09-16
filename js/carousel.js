$(document).ready(function() {

	$("#carousel1").click(function() {
		$(".carousel-img").css("background-image", "url(wp-content/themes/123VETO-WP/img/caroussel/Espace_Vente.JPG)");
		$("#carousel-titre").html("Titre Associé");
		$("#carousel-text").html("Texte descriptif");
	});

	$("#carousel2").click(function() {
		$(".carousel-img").css("background-image", "url(wp-content/themes/123VETO-WP/img/facade.JPG)");
		$("#carousel-titre").html("Text1");
		$("#carousel-text").html("Blablablablablablalba");
	});

	$("#carousel3").click(function() {
		$(".carousel-img").css("background-image", "url(wp-content/themes/123VETO-WP/img/dr-aurelie.jpg)");
		$("#carousel-titre").html("Text2");
		$("#carousel-text").html("Blablabloublalblabloubloubloublou");
	});
});
