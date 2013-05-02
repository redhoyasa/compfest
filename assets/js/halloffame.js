$(document).ready(function() {

	var current = 1;
	var total = $("#hof-main > ul").attr("value");
	
	$("#arrow-next").bind("click", function(event) {
	
		var prevPic = "#pic-" + current;
		current++;
		if (current > total) current = 1;
		var currentPic = "#pic-" + current;
		
		$(prevPic).fadeOut("slow");
		$(currentPic).fadeIn("slow");
		
	});
	
	$("#arrow-back").bind("click", function(event) {
	
		var prevPic = "#pic-" + current;
		current--;
		if (current < 1) current = total;
		var currentPic = "#pic-" + current;
		
		$(prevPic).fadeOut("slow");
		$(currentPic).fadeIn("slow");
		
	});
	
	$("#hof-gallery > img").bind("click", function(event) {
		var prevPic = "#pic-" + current;
		current = $(this).attr("href");
		var currentPic = "#pic-" + current;
		
		$(prevPic).fadeOut("slow");
		$(currentPic).fadeIn("slow");
	});

});
