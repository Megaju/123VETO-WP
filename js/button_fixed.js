$(document).ready(function () {
	var origOffsetY = $('#priseRDV').offset().top;



	function scroll() {
		if ($(window).scrollTop() >= origOffsetY) {
			$('#priseRDV').css("position", "fixed");
			$('#priseRDV').css("top", "0px");
			$('#priseRDV').css("width", "22.3%");
		}
		else {
			$('#priseRDV').css("position", "static");
			$('#priseRDV').css("width", "100%");
		}
	}
	document.onscroll = scroll;
});
