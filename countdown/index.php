<html>
	<head>
		<link href="style.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/jquery.countdown.js"></script>
	</head>
	
	
	<body>

		

		<div id="mid">
			<h1>WE'RE <span style="color:#ED1C24;">LAUNCHING!</span></h1>
			<!--div class="box" id="satu">
				<div class="plus">DAYS</div>
			</div>
			<div class="box" id="dua">
				<div class="plus">HOURS</div>
			</div>
			<div class="box" id="tiga">
				<div class="plus">MINS</div>
			</div>
			<div class="box" id="empat">
				<div class="plus">SECS</div>
			</div-->
			<div class="za">

			</div>
			<div style="clear:both;height:20px;"></div>
			<div style="clear:both;">
				<a href="https://twitter.com/CompFest" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow @CompFest</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div>
		</div>


		<script type="text/javascript">
	/*	$(function() {
    $('#za').countdown({
	        date: "September 5, 2013 21:00:00",
	        refresh : 1000
	    });
	});*/

	$('.za').countdown({
		date:"September 5, 2013 21:00:00",
        render: function(data) {
          var el = $(this.el);
          el.empty()
            .append("<div class=\"box\"><div class=\"time\">" + this.leadingZeros(data.hours, 2) + " </div><div class=\"plus\">hours</div></div>")
            .append("<div class=\"box\"><div class=\"time\">" + this.leadingZeros(data.min, 2) + " </div><div class=\"plus\">min</div></div>")
            .append("<div class=\"box\"><div class=\"time\">" + this.leadingZeros(data.sec, 2) + " </div><div class=\"plus\">sec</div></div>");
        }
      });
	</script>

	</body>
</html>