$(document).ready(function() {
	var logoLeft = (window.innerWidth-145)/2;
	$("#logo").css("left",logoLeft+"px");


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

	$(".menu").hover(function(){
		$(this).find("ul").css("display","block");
		$(this).find("ul").animate({
			opacity:1
		},200);
	},function(){
		$(this).find("ul").animate({
			opacity:0
		},200);
		$(this).find("ul").css("display","none");
	});


});