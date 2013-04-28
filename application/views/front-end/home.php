<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/slider/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/home.css" type="text/css" media="screen" />
<script src="<?php echo base_url(); ?>assets/plugins/slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/home.js"></script>

<div id="middle">
	<div id="slider-wrapper" class="theme-default">
	    <div id="slider" class="nivoSlider">
	        <img class="imgSlider" src="http://fc07.deviantart.net/fs71/f/2013/105/c/8/c8c4ef5d1f4852c10c038f4962c8bf52-d61w9jg.jpg" alt="" title="Eiffel Tower"/>
	        <img class="imgSlider" src="http://fc01.deviantart.net/fs70/f/2013/106/4/7/recall_ok_by_oer_wout-d61xgjy.jpg" alt="" title="Sunset"/>
	        <img class="imgSlider" src="http://fc07.deviantart.net/fs71/i/2013/106/3/4/peles_castle_by_alex230-d61xtkr.jpg" alt="" title="Castle"/>
	    </div>
	</div>
	<div id="htmlcaption" class="nivo-html-caption">
	    <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
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
                   		$("#twitter-tweet > span").stop().animate({
							top: -50,
							opacity: 0,
						}, 800, function() {
							$("#tweet").html(data.results[c].text);
							$("#tweet-time").html(data.results[c].created_at);
							$(this).stop().animate({
								top: 100,
							}, 0, function() {
								$(this).stop().animate({
									top: 0,
									opacity: 1,
								}, 800);
							});
						});
                   		c = c == data.results_per_page - 1 ? 0 : c+1;
                   	
                   },5000)
     	});
    });
	</script>

	<div id="sharebox">
		<a href="https://twitter.com/compfest" target="_blank" id="twitterbox">
			<div id="twitter-logo"></div>
			<div id="twitter-tweet"><span>
				<p id="tweet"></p>
				<p id="tweet-time"></p>
			</span></div>
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
	    