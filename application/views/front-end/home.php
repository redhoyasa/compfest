<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/slider/carousel.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/home.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" media="screen" />


<div id="middle">

<div id="this-carousel-id" class="carousel slide">
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo base_url(); ?>assets/img/header-red.png" width="1200px" height="480px" alt="" />
      <div class="carousel-caption">
        <p>Event merah bro</p>
      </div>
    </div>
    <div class="item">
      <img width="1200" height="480" src="<?php echo base_url(); ?>assets/img/competition/header-bg.png" alt="" />
      <div class="carousel-caption">
        <p>Caption text here</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x480" alt="" />
      <div class="carousel-caption">
        <p>Caption text here</p>
      </div>
    </div>
    <div class="item">
      <img width="1200" height="480" src="<?php echo base_url(); ?>assets/img/about/header-web-green.png" alt="" />
      <div class="carousel-caption">
        <p>Caption text here</p>
      </div>
    </div>
  </div><!-- /.carousel-inner -->
  <!--  Next and Previous controls below
        href values must reference the id for this carousel -->
    <a class="carousel-control left" href="#this-carousel-id" data-slide="prev"><span class="icon-prev"></span></a>
    <a class="carousel-control right" href="#this-carousel-id" data-slide="next"><span class="icon-next"></span></a>
</div>

<br><br>
<div id="video-banner">
	<div id="box">
	<iframe width="530" height="325" src="http://www.youtube.com/embed/auHYjYb6ogw" frameborder="0" allowfullscreen></iframe>
	</div>
	<div id="banner">
		<img class="team-img" src="<?php echo base_url(); ?>assets/img/placehold/530x200.gif" />	
	</div>
</div>
<?php 
	$row = $this->news_model->get_all_news();
		foreach ($row as $r) {
			if ($r->publish == 1){
?>

<div id="headline">
	<img id="news-title" src="<?php echo base_url(); ?>assets/img/title-home/news-banner.png" />
	<h3 id="headline-title" style="font-size:1.6em;"><a style="color: #007ac3;" href="<?php echo site_url('news/' . $r->url); ?>"><?php echo $r->title; ?></a></h3><br>
	<p id="headline-date" style="font-size:0.9em;"><?php echo date('l, F j Y G:i ', strtotime($r->timestamp)); ?></p>
	<div id="headline-imgBox"><img src="<?php echo base_url();?>assets/img/home-news.png"></div>
	<p id="headline-article">
	<?php echo substr(strip_tags($r->content),0,1500)." ..."; ?>
	</p>
	<div id="readmore">
		<a href="<?php echo site_url('news/' . $r->url); ?>">Read More</a>
	</div>
</div>	

<?php
	break;
		} 
	}
?>
	<div style="clear:both;"></div>
<div id="seminars" class="content leftcol">
	<div class="content-text">
		<img id="seminars-title" src="<?php echo base_url(); ?>assets/img/title-home/seminar-banner.png" style="float:none;"/> <br/>
		<img class="team-img" src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif" />	
		<p class="title" style="display:table; margin-left:10px; font-weight: bold;">"Encourage Innovation in Indonesia through Research"</p>
		<p class="speaker" style="display:table; margin-left:10px">By Wishnu Jatmiko</p>
		<p class="date"style="display:table; margin-left:10px">Sabtu, 21 September 2013 09.30-11.00 WIB</p>
		<p class="venue"style="display:table; margin-left:10px">Anex Room Balairung, Universitas Indonesia</p><br/>
		
		<p style="text-indent: 30px;">Seminar tentang riset riset gitu deh pokokya. Pembicaranya dosen ane sob. Udah sering banget ke Jepang.
			Beliau udah banyak bikin alat alat kece badai ga ada obat. Kaya alat alatnya doraemon sob. ini cuma dummy text. hahaaha 
		</p>
		<div class="competition-register-button">
				<a class="comp-button"  href="<?php echo site_url(); ?>competition/register"><p id="competition-register-tulisan">REGISTER</p></a>
		</div>
	</div>
	<div id="navi">
		<div id="nav-left"><a href="#">	<img src="<?php echo base_url(); ?>assets/img/nav-left.png" /></a></div>
		<div id="nav-right"><a href="#">	<img src="<?php echo base_url(); ?>assets/img/nav-right.png" /></a></div>
	</div>

</div>
<div id="competitions-final" class="content rightcol">
	<img id="compfinal-title" src="<?php echo base_url(); ?>assets/img/title-home/compfinal-banner.png" style="float:none;"/><br/>
	<div class="content-text">
		<img class="team-img" src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif" />	
	</div>
</div>
<div id="playground" class="content leftcol" style="margin-bottom: 30px">
	<img id="playground-title" src="<?php echo base_url(); ?>assets/img/title-home/playground-banner.png" style="float:none;"/><br/>
	<div class="content-text">
		<img class="team-img" src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif" />
		<p class="title" style="display:table; margin-left:10px; font-weight: bold;">Tinker Game</p>
		<p class="category" style="display:table; margin-left:10px; font-weight: bold;">Game Developer</p><br/>
		<p style="text-indent: 30px;">Seminar tentang riset riset gitu deh pokokya. Pembicaranya dosen ane sob. Udah sering banget ke Jepang.
			Beliau udah banyak bikin alat alat kece badai ga ada obat. Kaya alat alatnya doraemon sob. ini cuma dummy text. hahaaha 
		</p>
	</div>
	<div id="navi">
		<div id="nav-left"><a href="#">	<img src="<?php echo base_url(); ?>assets/img/nav-left.png" /></a></div>
		<div id="nav-right"><a href="#">	<img src="<?php echo base_url(); ?>assets/img/nav-right.png" /></a></div>
	</div>
</div>
<div id="entertaiment" class="content rightcol" style="margin-bottom: 30px">
	<img id="entertainment-title" src="<?php echo base_url(); ?>assets/img/title-home/entertainment-banner.png" style="float:none;"/><br/>
	<img class="team-img" src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif" />	
</div>
	  <script type="text/javascript">
    		//var url = 'http://search.twitter.com/search.json?q=from:compfest&callback=?';
    		var url = '<?php echo base_url();?>twitterFetch/Twitter-PHP/fetch.php';
    
    var tweet;
    $(document).ready(function() {
       $.getJSON(url,function (data) {
                   tweet = data;
                   var c = 0;
                   
                   setInterval(function(){
                   
                   		tweet[c].text = tweet[c].text.length > 100 ? tweet[c].text.substr(0,100) + "..." : tweet[c].text;
                   		tweet[c].created_at = tweet[c].created_at.length > 25 ? tweet[c].created_at.substr(0,25) : tweet[c].created_at;
                   		$("#twitter-tweet > span").stop().animate({
							top: -50,
							opacity: 0,
						}, 800, function() {
							$("#tweet").html(tweet[c].text);
							//$("#tweet-time").html(tweet[c].created_at);
							$(this).stop().animate({
								top: 100,
							}, 0, function() {
								$(this).stop().animate({
									top: 0,
									opacity: 1,
								}, 1000);
							});
						});
                   		c = c == tweet.length - 1 ? 0 : c+1;
                   	
                   },5000)
     	});
    });
  	</script>
	<div id="sharebox">
		<a href="https://twitter.com/compfest" target="_blank" id="twitterbox">
			<div id="twitter-logo"></div>
			<div id="twitter-tweet"><span style="font-size:12px;">
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
</div>  
</div>


<script src="<?php echo base_url(); ?>assets/plugins/slider/carousel.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/slider/holder.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/home.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/slider/transitions.min.js" type="text/javascript"></script>