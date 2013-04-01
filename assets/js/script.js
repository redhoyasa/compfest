$(document).ready(function() {

	//LOGIN BAR
	var buka = 0;
	$("#login").css("right",(window.innerWidth-1180)/2+"px");
	$("#logout").css("right",(window.innerWidth-1180)/2+"px");

	$("#button-login").click(function(){
		if (buka == 0){
			$("#login").animate({
				top:"0"
			})
			buka = 1;
		} else {
			$("#login").animate({
				top:"-30px"
			})
			buka = 0;
		}
	});


	//MENU BAR
	$(".second>li").hover(function(){
		$(this).animate({
			opacity:1
		});
	},function(){
		$(this).animate({
			opacity:0.75
		});
	});


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