$(document).ready(function(){
	$(".fancybox").click(function(){
		var $nowShow = $(".competition-wrapper:visible");
		var tinggi;
		$nowShow.hide();
		if ($(this).attr('id') == 'cp-link') {
			$nowShow = $('#cp');
			height = 30 + $nowShow.height();
			$(".content-wrapper").height(tinggi);
			$nowShow.fadeIn();
		}
		if ($(this).attr('id') == 'open-link') {
			$nowShow = $('#open');
			height = 30 + $nowShow.height();
			$(".content-wrapper").height(height);
			$nowShow.fadeIn();
		}
		if ($(this).attr('id') == 'robot-link') {
			$nowShow = $('#robot');
			height = 30 + $nowShow.height();
			$(".content-wrapper").height(height);
			$nowShow.fadeIn();
		}
		if ($(this).attr('id') == 'wa-link') {
			$nowShow = $('#wa');
			height = 30 + $nowShow.height();
			$(".content-wrapper").height(height);
			$nowShow.fadeIn();
		}
	});
});
