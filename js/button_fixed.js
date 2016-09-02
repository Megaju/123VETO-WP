$(document).ready(function () {
	var button = $('#priseRDV');
	var origOffsetY = button.offset().top;

	function scroll() {
		if ($(window).scrollTop() >= origOffsetY) {
			$('#priseRDV').css("position", "fixed");
			$('#priseRDV').css("top", "0px");
			$('#priseRDV').css("left", "15px");
			$('#priseRDV').css("width", "20.1%");
		}
		else {
			$('#priseRDV').css("position", "static");
			$('#priseRDV').css("width", "100%");
		}
	}
	document.onscroll = scroll;
});