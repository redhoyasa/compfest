$(document).ready(function(){
	$(".fancybox").click(function(){
		var $nowShow = $(".competition-wrapper:visible");
		var $selected = $(".fancybox");
		var tinggi;
		$nowShow.hide();
		$selected.children().fadeTo("fast", 1.0);
		if ($(this).attr('id') == 'cp-link') {
			$(this).children().fadeTo("fast", 0.2);
			$nowShow = $('#cp');
			height = 30 + $nowShow.height();
			$(".content-wrapper").height(height); 
			$nowShow.fadeIn();
		}
		if ($(this).attr('id') == 'open-link') {
			$(this).children().fadeTo("fast", 0.2);
			$nowShow = $('#open');
			height = 30 + $nowShow.height();
			$(".content-wrapper").height(height);
			$nowShow.fadeIn();
		}
		if ($(this).attr('id') == 'robot-link') {
			$(this).children().fadeTo("fast", 0.2);
			$nowShow = $('#robot');
			height = 30 + $nowShow.height();
			$(".content-wrapper").height(height);
			$nowShow.fadeIn();
		}
		if ($(this).attr('id') == 'wa-link') {
			$(this).children().fadeTo("fast", 0.2);
			$nowShow = $('#wa');
			height = 30 + $nowShow.height();
			$(".content-wrapper").height(height);
			$nowShow.fadeIn();
		}
	});
});
