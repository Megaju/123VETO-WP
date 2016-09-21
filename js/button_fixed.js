$(document).ready(function () {
	var origOffsetY = $('#priseRDV').offset().top;
    
    var winwidth = $(window).width();
    
    
        function scroll() {
            if ($(window).scrollTop() >= origOffsetY /*&& winwidth <= 1085*/) {
                $('#priseRDV').css("position", "fixed");
                $('#priseRDV').css("top", "0px");
                $('#priseRDV').css("margin-top", "0");
                /*$('.content').css("margin-top", "60px");*/
            }
            else {
                $('#priseRDV').css("position", "absolute");
                $('#priseRDV').css("top", "auto");
                $('#priseRDV').css("margin-top", "0px");
                /*$('.content').css("margin-top", "0");*/
            }
        }
    
        
    
	
	document.onscroll = scroll;
});
