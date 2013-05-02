$(document).ready(function() {
	
	$(".choose").bind("mouseover", function(event) {
	
		var idTrigger = $(this).attr("id");
		
		$("#" + idTrigger + "> span").stop().animate({
			opacity: 0
		}, 200);
		
	});
	
	$(".choose").bind("mouseleave", function(event) {
	
		var idTrigger = $(this).attr("id");
		
		$("#" + idTrigger + "> span").stop().animate({
			opacity: 100
		}, 800);
		
	});

});
