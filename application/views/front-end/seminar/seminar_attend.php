<!--span class="alert alert-success">SELAMAT</span-->
<!--Anda telah mengkonfirmasi kehadiran anda di acara Seminar CompFest 2013.-->
<br>
<!--Terima kasih atas partisipasi anda.-->
</div>
</section>
<style>

		#container {
padding: 19px;
margin-bottom: 20px;
width: 600px!important;
background-image: url("http://noisepng.com/100-90-5.png");
background-color: #f5f5f5;
border: 1px solid #e3e3e3;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
position: relative;
left: 50%;
margin-left: -300px!important;
}
	
	
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
	<h5>Anda telah mengkonfirmasi kehadiran anda di acara Seminar CompFest 2013</h5><br>
	<h5>Jangan lupa untuk membawa bukti pendaftaran yang tertera di email Anda</h5><br>
	<h5>Jika ada masalah silahkan e-mail ke seminar@compfest.web.id</h5>

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
			"I'm ready for Seminar @CompFest at Balairung UI, 21-22 Sept 2013 ",
			"Let's come to Seminar @CompFest! Balairung UI, 21-22 Sept 2013",
			"Seminar @CompFest : Creative Technopreneurship towards Globalization",
			"Ayo yang belum konfirmasi kehadiran di Seminar @CompFest 2013",
			"Gue bakal dateng Seminar Compfest 2013, Balairung UI, 21-22 Sept 2013 @CompFest"
		];

		var _fix = array[index];
		console.log(index+" "+_fix);
		$("#words").attr('data-text',_fix);
	});
</script>