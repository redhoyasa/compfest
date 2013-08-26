
$(document).ready(function(){
    $('nav a').bind('click',function(event){
        var $anchor = $(this);
                            
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1000,'easeInOutExpo');                            
    	event.preventDefault();
    });
    /*
    $('.box').css({ 'margin-right' : '-1700px'});

    
    	setTimeout(function() {
    		$('#a1').css("-moz-transition","all 2s linear");
    		$('#a1').css("-webkit-transition","all 2s linear");
    		$('#a1').css("-o-transition","all 2s linear");
    		$('#a1').css("transition","all 2s linear");
    		$('#a1').css({'margin' : 'auto'});  
    	},1000,'easeInOutExpo');


    $('#n2').click(function(){
    	setTimeout(function() {
    		$('#a2').css("-moz-transition","all 2s linear");
    		$('#a2').css("-webkit-transition","all 2s linear");
    		$('#a2').css("-o-transition","all 2s linear");
    		$('#a2').css("transition","all 2s linear");
    		$('#a2').css({'margin' : 'auto'});  
    	},1000,'easeInOutExpo');
    }); 
    $('#n3').click(function(){
    	setTimeout(function() {
    		$('#a3').css("-moz-transition","all 2s linear");
    		$('#a3').css("-webkit-transition","all 2s linear");
    		$('#a3').css("-o-transition","all 2s linear");
    		$('#a3').css("transition","all 2s linear");
    		$('#a3').css({'margin' : 'auto'});  
    	},1000,'easeInOutExpo');
    }); */
});
