$(document).ready(function() {
	//$('#slider').nivoSlider();
/*
	$("#menu-event").hover(function(){
		$("#hover-event").slideToggle();
	});
*/

	$("#menu-event").mouseover(function(){
		$("#hover-event").css("display","block");
		$("#hover-event").animate({
			opacity:1
		},200);
	});
	$("#menu-event").mouseleave(function(){
		$("#hover-event").animate({
			opacity:0
		},200);
		setTimeout(function(){
			$("#hover-event").css("display","none");
		},200);
	});
});