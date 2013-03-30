$(document).ready(function() {
	$('#slider').nivoSlider();


	//MENU BAR
	$("#menu-event").hover(function(){
		$("#menu-event>ul").css("display","block");
		$("#menu-event>ul").animate({
			opacity:1
		},200);
	},function(){
		$("#menu-event>ul").animate({
			opacity:0
		},200);
		$("#menu-event>ul").css("display","none");
	});

	$("#menu-competition").hover(function(){
		$("#menu-competition>ul").css("display","block");
		$("#menu-competition>ul").animate({
			opacity:1
		},200);
	},function(){
		$("#menu-competition>ul").animate({
			opacity:0
		},200);
		$("#menu-competition>ul").css("display","none");
	});
});