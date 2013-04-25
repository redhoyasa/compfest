$(document).ready(function() {
	
	$(".choose").bind("mouseover", function(event) {
	
		var idTrigger = $(this).attr("id");
		
		$("#" + idTrigger + "> span").hide();
		
		$("#" + idTrigger + "content").show();
		
		
		$("#" + idTrigger + "content > img").stop().animate({
			marginTop: "0px"
		}, 500, function() {
			$(this).stop().animate({
				marginBottom: "0px"
			}, 200);
		});
		
	});
	
	$(".choose").bind("mouseleave", function(event) {
	
		var idTrigger = $(this).attr("id");
		
		// $("#" + idTrigger + "content > img").stop().animate({
			// marginBottom: "500px"
		// }, 200, function() {
			// $(this).stop().animate({
				// marginTop: "1000px"
			// }, 500, function() {
				// $("#" + idTrigger + "content").hide();
				// $("#" + idTrigger + "> span").show();
			// });
		// });
		
		$("#" + idTrigger + "> span").stop().show();
		$("#" + idTrigger + "> span").stop().animate({
			top: "-246px"
		}, 0);
		
		$("#" + idTrigger + "content").stop().animate({
			opacity: 0
		}, 500, function() {
			$(this).stop().hide();
			$(this).stop().animate({
				opacity: 100,
			}, 0);
			$("#" + idTrigger + "content > img").stop().animate({
				marginTop: "1000px",
				marginBottom: "500px"
			}, 0);
			$("#" + idTrigger + "> span").stop().animate({
				top: "80px"
			}, 0);
		});
		
	});

});
