$(document).ready(function () {
	var origOffsetY = $('#priseRDV').offset().top;
    
    var winwidth = $(window).width();
    
    if (winwidth <= 1085) {
        function scroll() {
            if ($(window).scrollTop() >= origOffsetY) {
                $('#priseRDV').css("position", "fixed");
                $('#priseRDV').css("top", "0px");
                $('#priseRDV').css("margin-top", "0");
                $('.content').css("margin-top", "0");
            } 
            else {
                $('#priseRDV').css("position", "absolute");
                $('#priseRDV').css("top", "auto");
                $('#priseRDV').css("margin-top", "0px");
                $('.content').css("margin-top", "60px");
            }    
    } 
    else {
        function scroll() {
            if ($(window).scrollTop() >= origOffsetY) {
                $('#priseRDV').css("position", "fixed");
                $('#priseRDV').css("top", "0px");
                $('#priseRDV').css("margin-top", "0");
                $('.content').css("margin-top", "0");
            } 
            else {
                $('#priseRDV').css("position", "absolute");
                $('#priseRDV').css("top", "auto");
                $('#priseRDV').css("margin-top", "0px");
                $('.content').css("margin-top", "0");
            }
	
        }
    
	
	document.onscroll = scroll;
});
