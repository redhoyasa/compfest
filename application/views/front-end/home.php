<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/home.css" type="text/css" media="screen" />
<script src="<?php echo base_url(); ?>assets/plugins/slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
	    $('#slider').nivoSlider();
	});
</script>

<div id="middle">
	    <div id="slider" class="nivoSlider">
	        <img class="imgSlider" src="<?php echo base_url(); ?>assets/img/slider/redho.jpg" alt="" title="ini RedhoYasha"/>
	        <img class="imgSlider" src="<?php echo base_url(); ?>assets/img/slider/zaka.jpg" alt="" title="ini ZakaZai"/>
	        <img class="imgSlider" src="<?php echo base_url(); ?>assets/img/slider/zawwaf.jpg" alt="" title="ini Zawwaf"/>
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

	<div id="sharebox">
		<div id="twitterbox">
			<div id="twitter-logo"></div>
			<div id="twitter-tweet"></div>
		</div>
		<div id="likebox">(y)Like</div>
	</div>
</div>