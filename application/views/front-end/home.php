<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/slider/carousel.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/home.css" type="text/css" media="screen" />

<script src="<?php echo base_url(); ?>assets/plugins/slider/carousel.min.js" type="text/javascript"></script>
<!--script type="text/javascript" src="<?php echo base_url(); ?>assets/js/home.js"></script-->
<script src="<?php echo base_url(); ?>assets/plugins/slider/transitions.min.js" type="text/javascript"></script>

<div id="middle">
		<!-- CAROUSEL (SLIDER) AREA -->
<div id="slider" class="carousel slide">
<!--ol class="carousel-indicators">
<li data-target=".carousel" data-slide-to="0" class="active"></li>
<li data-target=".carousel" data-slide-to="1"></li>
<li data-target=".carousel" data-slide-to="2"></li>
</ol-->

<!-- Carousel items -->
<div class="carousel-inner">
<div class="active item">
<img width="1180" src="<?php echo base_url(); ?>assets/img/header-red.png">

</div>

<!-- Carousel nav>
<a class="carousel-control left" href=".carousel" data-slide="prev">&lsaquo;</a>
<a class="carousel-control right" href=".carousel" data-slide="next">&rsaquo;</a-->
</div>

<div id="box">
<iframe width="530" height="325" src="http://www.youtube.com/embed/auHYjYb6ogw" frameborder="0" allowfullscreen></iframe>
</div>

<?php 
	$row = $this->news_model->get_all_news();
		foreach ($row as $r) {
			if ($r->publish == 1){
?>

<div id="headline">
<h2 style="font-size:1.9em; padding-bottom:15px">NEWS</h2>
<h3 id="headline-title" style="font-size:1.6em;"><a style="color: #007ac3;" href="<?php echo site_url('news/' . $r->url); ?>"><?php echo $r->title; ?></a></h3><br>
<p id="headline-date" style="font-size:0.9em;"><?php echo date('l, F j Y G:i ', strtotime($r->timestamp)); ?></p>
<div id="headline-imgBox"><img src="<?php echo base_url();?>assets/img/home-news.png"></div>
<p id="headline-article">
<?php echo substr(strip_tags($r->content),0,380)." ..."; ?>
</p>
</div>	

<?php
	break;
		} 
	}
?>
	
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