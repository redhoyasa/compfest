$(document).ready(function(){
	$(".fancybox").click(function(){
		var $nowShow = $(".competition-wrapper:visible");
		var $selected = $(".fancybox");
		$selected.children().css({opacity: 1.0});
		if ($(this).attr('id') == 'cp-link') {
			$(this).children().css({opacity: 0.2});
			$nowShow = $('#cp');
			height = 30 + $nowShow.height();
			$('#slider-wrapper').stop().animate({marginLeft:-960+'px'},450);		
		}
		if ($(this).attr('id') == 'open-link') {
			$(this).children().css({opacity: 0.2});
			$nowShow = $('#open');
			height = 30 + $nowShow.height();
			$('#slider-wrapper').stop().animate({marginLeft:-1920+'px'},450);
		}
		if ($(this).attr('id') == 'robot-link') {
			$(this).children().css({opacity: 0.2});
			$nowShow = $('#robot');
			height = 30 + $nowShow.height();
			$('#slider-wrapper').stop().animate({marginLeft:-2880+'px'},450);
		}
		if ($(this).attr('id') == 'wa-link') {
			$(this).children().css({opacity: 0.2});
			$nowShow = $('#wa');
			height = 30 + $nowShow.height();
			$('#slider-wrapper').stop().animate({marginLeft:-3840+'px'},450);
		}
	});
});
