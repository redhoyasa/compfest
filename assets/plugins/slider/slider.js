$(function(){
      $("#slider").slidesjs({
        width: 620,
        height: 270,
        navigation :{
        	active:true,
        	effect:"slide"
        },
        pagination :{
        	active:true,
        	effect:"slide"
        },
        play:{
        	active:true,
        	effect:"slide",
        	interval:5000,
        	auto:true,
        	swap:false
        }
      });
    });