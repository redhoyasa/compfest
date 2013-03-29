$(document).ready(function() {
	var current = 1;
	var total = $("#hof-main > ul").attr("value");

	$("#arrow-next").bind("click", function(event) {
	
		var prevPic = "#pic-" + current;
		var prevDesc = "#desc-" + current;
		current++;
		if (current > total) current = 1;
		var currentPic = "#pic-" + current;
		var currentDesc = "#desc-" + current;
		
		$(prevPic).fadeOut("slow");
		$(prevDesc).fadeOut(0);
		$(currentPic).fadeIn("slow");
		$(currentDesc).fadeIn("slow");
		
	});
	
	$("#arrow-back").bind("click", function(event) {
	
		var prevPic = "#pic-" + current;
		var prevDesc = "#desc-" + current;
		current--;
		if (current < 1) current = total;
		var currentPic = "#pic-" + current;
		var currentDesc = "#desc-" + current;
		
		$(prevPic).fadeOut("slow");
		$(prevDesc).fadeOut(0);
		$(currentPic).fadeIn("slow");
		$(currentDesc).fadeIn("slow");
		
	});
	
	$("#hof-overflow-fix > img").bind("click", function(event) {
		var prevPic = "#pic-" + current;
		var prevDesc = "#desc-" + current;
		current = $(this).attr("href");
		var currentPic = "#pic-" + current;
		var currentDesc = "#desc-" + current;
		
		$(prevPic).fadeOut("slow");
		$(prevDesc).fadeOut(0);
		$(currentPic).fadeIn("slow");
		$(currentDesc).fadeIn("slow");
	});
	
	$(this).keydown(function(e){
	
		var prevPic = "#pic-" + current;
		var prevDesc = "#desc-" + current;
			
		if (e.keyCode == 37) { 
			current--;
			if (current < 1) current = total;
		} else if (e.keyCode == 39) { 
			current++;
			if (current > total) current = 1;
		}
		
		var currentPic = "#pic-" + current;
		var currentDesc = "#desc-" + current;
		
		$(prevPic).fadeOut("slow");
		$(prevDesc).fadeOut(0);
		$(currentPic).fadeIn("slow");
		$(currentDesc).fadeIn("slow");
	});
});

