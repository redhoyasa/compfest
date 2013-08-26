<style>
	h5 {
	  font-size : 14px;
	  color : #4e4e4e;
	  font-weight: bold;
	  text-align : center;
	}
</style>
<div style="height:50px;">&nbsp;</div>
<br>
<br>
<br>
<div id="container">
	<h3>Terima Kasih!</h3>	<br>
	<h5>Email kamu telah terdaftar</h5><br>
	<h5>Kamu akan mendapat update berita tentang CompFest melalui email</h5><br>
	<h5>Ayo sebarkan event ini ke teman-temanmu!</h5>

	<div class="content-main">
		<div class="thumbnail" id="register-thumbnail"></div>
		<div class="main" id="register-main">
			<br>
			<center> <a id="words" href="https://twitter.com/share" class="twitter-share-button" data-url="http://compfest.web.id/seminar" data-text="Yuk ikutan Seminar @CompFest. Balairung UI, 21-22 Sept 2013 http://compfest.web.id/seminar" data-size="large">Tweet</a>
			<script>
				! function (d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0],
						p = /^http:/.test(d.location) ? 'http' : 'https';
					if (!d.getElementById(id)) {
						js = d.createElement(s);
						js.id = id;
						js.src = p + '://platform.twitter.com/widgets.js';
						fjs.parentNode.insertBefore(js, fjs);
					}
				}(document, 'script', 'twitter-wjs');
			</script>
			</center>
		</div>
	</div>
	
</div>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/register.css">
<script type="text/javascript">
	$(document).ready(function() {
		var index = Math.floor((Math.random()*5));

		var array = [
			"Yuk ikutan Seminar @CompFest. Balairung UI, 21-22 Sept 2013 ",
			"Dare to join the best IT Seminar this year? Let's join Seminar @CompFest! Balairung UI, 21-22 Sept 2013",
			"Seminar @CompFest : Creative Technopreneurship towards Globalization",
			"Ingin tahu tentang Seminar @Compfest? Ayo cek",
			"Gue bakal dateng Seminar Compfest 2013, Balairung UI, 21-22 Sept 2013 @CompFest"
		];

		var _fix = array[index];
		console.log(index+" "+_fix);
		$("#words").attr('data-text',_fix);
	});
</script>
