<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/slider/carousel.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/home.css" type="text/css" media="screen" />

<script src="<?php echo base_url(); ?>assets/plugins/slider/carousel.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/home.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/slider/transitions.min.js" type="text/javascript"></script>

<div id="middle">
	<!-- CAROUSEL (SLIDER) AREA -->
	<div id="slider" class="carousel slide">
		<ol class="carousel-indicators">
		    <li data-target=".carousel" data-slide-to="0" class="active"></li>
		    <li data-target=".carousel" data-slide-to="1"></li>
		    <li data-target=".carousel" data-slide-to="2"></li>
		</ol>

	  <!-- Carousel items -->
	  <div class="carousel-inner">
	    <div class="active item">
	    	<img src="<?php echo base_url(); ?>assets/img/slider/zawwaf.jpg">
	    	<div class="carousel-caption">
	    		<h4>ini zawwaf</h4>
	    		<p>pelawak yang beriman</p>
	    	</div>
	    </div>
	    <div class="item">
	    	<img src="<?php echo base_url(); ?>assets/img/slider/zaka.jpg">
	    	<div class="carousel-caption">
	    		<h4>ini zaka</h4>
	    		<p>belum bayar hutang</p>
	    	</div>
	    </div>
	    <div class="item">
	    	<img src="<?php echo base_url(); ?>assets/img/slider/redho.jpg">
	    	<div class="carousel-caption">
	    		<h4>ini yasha</h4>
	    		<p>tidak ikut cgt</p>
	    	</div>
	    </div>
	  </div>
	  <!-- Carousel nav -->
	  <a class="carousel-control left" href=".carousel" data-slide="prev">&lsaquo;</a>
	  <a class="carousel-control right" href=".carousel" data-slide="next">&rsaquo;</a>
	</div>

	<div id="box">

	</div>

	<div id="headline">
		<h2 style="font-size:1.9em; padding-bottom:15px">NEWS</h2>
		<h3 id="headline-title" style="font-size:1.6em;">Lorem ipsum dolor sit amet, cons...</h3>
		<p id="headline-date" style="font-size:0.9em;">October 24, 1993</p>
		<div id="headline-imgBox"></div>
		<p id="headline-article">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin iaculis rutrum sollicitudin. Donec volutpat quam in ligula convallis consequat sodales dolor ornare. Mauris id egestas magna. Duis laoreet ante sapien, bibendum suscipit augue. Nullam pellentesque, risus a lobortis commodo, lacus purus venenatis libero, at ullamcorper lectus augue sollicitudin tellus. Proin commodo, diam eget aliquam gravida, magna tortor iaculis tortor, in feugiat dui odio et leo. Quisque commodo magna eget erat placerat eget bibendum nisi rutrum.
			<br/><br/>
			Praesent metus augue, ullamcorper vitae tempor sed, consequat at odio. Praesent libero risus, sodales a feugiat non, faucibus lacinia magna. Praesent dictum malesuada urna ut feugiat. Nam sapien diam, elementum at convallis sed, bibendum pretium erat.
		</p>
	</div>	

	<script type="text/javascript">
	var url = 'http://search.twitter.com/search.json?q=from:compfest&callback=?';
    //var url = 'tweet.json';
    
    var tweet;
    $(document).ready(function() {
       $.getJSON(url,function (data) {
                   tweet = data.results;
                   var c = 0;
                   
                   setInterval(function(){
                   
                   		data.results[c].text = data.results[c].text.length > 90 ? data.results[c].text.substr(0,90) + "..." : data.results[c].text;
                   		data.results[c].created_at = data.results[c].created_at.length > 25 ? data.results[c].created_at.substr(0,25) : data.results[c].created_at;
                   		$("#tweet").html(data.results[c].text);
                   		$("#tweet-time").html(data.results[c].created_at);
                   		c = c == data.results_per_page - 1 ? 0 : c+1;
                   	
                   },5000)
     	});
    });
	</script>

	<div id="sharebox">
		<a href="https://twitter.com/compfest" target="_blank" id="twitterbox">
			<div id="twitter-logo"></div>
			<div id="twitter-tweet">
				<p id="tweet"></p>
				<p id="tweet-time"></p>
			</div>
		</a>
		<script type="text/javascript">
			function myFunction() {
				var x = screen.width/2 - 850/2;
				var y = screen.height/2 - 400/2;
				window.open('http://facebook.com/CompFest','_blank','width=850,height=400,left='+x+',top='+y);
				myWindow.focus();
				return false;
			}
		</script>
		<a id="likebox" type="button" onclick="myFunction()" value=""></a>

</div>
	    