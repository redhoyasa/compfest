<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/home.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" media="screen" />



<div id="middle">

<img width="1180" src="<?php echo base_url(); ?>assets/img/header-red.png">

<!--
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
  </div>
    <a class="carousel-control left" href="#this-carousel-id" data-slide="prev"><span class="icon-prev"></span></a>
    <a class="carousel-control right" href="#this-carousel-id" data-slide="next"><span class="icon-next"></span></a> -->
</div>

<br><br>
<div id="video-banner">
	<div id="box">
	<iframe width="530" height="325" src="http://www.youtube.com/embed/EuMVXg6FlbQ" frameborder="0" allowfullscreen></iframe>
	<!--<iframe width="530" height="325" src="http://www.youtube.com/embed/auHYjYb6ogw" frameborder="0" allowfullscreen></iframe>-->
	</div>
	<div id="banner" style="display:none;">
		<img class="team-img" src="<?php echo base_url(); ?>assets/img/placehold/530x200.gif" />	
	</div>
</div>
<?php 
	$row = $this->news_model->get_all_news();
		foreach ($row as $r) {
			if ($r->publish == 1){
?>

<div id="headline">
	<a href="<?php echo base_url(); ?>news"><img class="content-title" id="news-title" src="<?php echo base_url(); ?>assets/img/title-home/news-banner.png" /></a>
	<h3 id="headline-title" style="font-size:1.6em;"><a style="color: #007ac3;" href="<?php echo site_url('news/' . $r->url); ?>"><?php echo $r->title; ?></a></h3><br>
	<p id="headline-date" style="font-size:0.9em;"><?php echo date('l, F j Y G:i ', strtotime($r->timestamp)); ?></p>
	<div id="headline-imgBox"><img src="<?php echo base_url();?>assets/img/home-news.png"></div>
	<p id="headline-article">
	<?php echo substr(strip_tags($r->content),0,300)." ..."; ?>
	</p>
	<a href="<?php echo site_url('news/' . $r->url); ?>">
	<div id="readmore">
		<p>Read More</p>
	</div>
	</a>
</div>	

<?php
	break;
		} 
	}
?>
	<?php
		$db['default']['hostname'] = 'localhost';
		$db['default']['username'] = 'k5334818_webcoba';
		$db['default']['password'] = '0103301034';
		$db['default']['database'] = 'k5334818_webcoba';
		$mysql = mysql_connect($db['default']['hostname'], $db['default']['username'], $db['default']['password']);
		mysql_select_db($db['default']['database'], $mysql) or die(mysql_error());
		$playground_sql = "SELECT *
						         FROM playground_home";
		$playground_res = mysql_query($playground_sql, $mysql) or die (mysql_error($mysql));
		$seminar_sql = "SELECT * 
								FROM seminar_home";
		$seminar_res = mysql_query($seminar_sql, $mysql) or die (mysql_error($mysql));
		?>
	<div style="clear:both;"></div>
<div id="seminars" class="content leftcol">
	<a href="<?php echo base_url(); ?>seminar"><img class="content-title" id="seminars-title" src="<?php echo base_url(); ?>assets/img/title-home/seminar-banner.png" style="float:none;"/></a> <br/>
	<div class="register-button">
		<a class="button"  href="<?php echo site_url(); ?>seminar/register"><p id="register-tulisan">REGISTER</p></a>
	</div>
	<ul>
		<?php
			while ($ev = mysql_fetch_array($seminar_res)) {
			$sm_id = $ev['id'];
			$sm_title = $ev['title'];
			$sm_speak = $ev['speaker'];
			$sm_img_name = $ev['img_name'];
			$sm_loc = $ev['location'];
			$sm_date = $ev['date'];
			$sm_desc = $ev['description'];
		?>		
			<li>
				<div class="content-text">
				<img class="team-img" src="<?php echo base_url(); ?>assets/img/home/seminar/<?php echo $sm_img_name?>.jpg" />	
				<p class="title" style="display:table; margin-left:10px; font-weight: bold;">"<?php echo $sm_title ?>"</p>
				<div class="details">
					<p class="speaker" style="display:table; margin-left:10px">by <?php echo $sm_speak?></p>
					<p class="date"style="display:table; margin-left:10px"><?php echo $sm_date?></p>
					<p class="venue"style="display:table; margin-left:10px"><?php echo $sm_loc?></p><br/>
				</div>
				<p class="desc" style="text-indent: 30px;">
				</p>
			</div>
			</li>
		<?php
			}
		?>
	</ul>
	<div id="seminar-nav" class="navi">
		<a class="nav-left" data-dir="prev" href="#">	<img src="<?php echo base_url(); ?>assets/img/home/nav-left.png" /></a>
		<a class="nav-right" data-dir="next" href="#">	<img src="<?php echo base_url(); ?>assets/img/home/nav-right.png" /></a>
	</div>
</div>



<div id="competitions-final" class="content rightcol">
	<img class="content-title" id="compfinal-title" src="<?php echo base_url(); ?>assets/img/title-home/compfinal-banner.png" style="float:none;"/><br/>
	<div id="competition-nav">
		<a href="1">Programming</a> |
		<a href="2">Open Animation</a> |
		<a href="3">Robotic</a> |
		<a href="4">Mobile IT</a> |
		<a href="5">Edugames</a> |
		<a href="6">App Center</a>
	</div>
	<div id="slider-mover-comp-wrapper">
		<ul id="slider-mover">
			<li id="first">
				<div class="competition-slider-wrapper" id="cp">
					<div class="competition-main-slider-button" style="margin-right: 5px;">
						<a data-dir="prev" href="#"><img src="<?php echo base_url(); ?>assets/img/home/slider-left.png"/></a>
					</div>
					<div class="competition-main-slider">
						<div class="data-slider" data-total="4"></div>
							<ul>
								<li><a class="competition-box-slider" href="1" data-axis="160" data-ordinate="195">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team A </p>
									<p class="competition-box-caption2"> Universitas Indonesia </p>
									</a></li>
								<li><a class="competition-box-slider" href="2" data-axis="180" data-ordinate="195">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team B </p>
									<p class="competition-box-caption2"> Institiut Teknologi Depok </p>
									</a></li>
								<li><a class="competition-box-slider" href="3" data-axis="700" data-ordinate="150">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team C </p>
									<p class="competition-box-caption2"> Institut Pertanian Depok </p>
									</a></li>
								<li><a class="competition-box-slider" href="4" data-axis="50" data-ordinate="80">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team D </p>
									<p class="competition-box-caption2"> Universitas Margonda </p>
									</a></li>
							</ul>
					</div>
					<div class="competition-main-slider-button" style="margin-left: 5px;">
						<a data-dir="next" href="#"><img src="<?php echo base_url(); ?>assets/img/home/slider-right.png"/></a>
					</div>

				</div>
			</li>
			<li>
				<div class="competition-slider-wrapper" id="oa">
					<div class="competition-main-slider-button" style="margin-right: 5px;">
						<a data-dir="prev" href="#"><img src="<?php echo base_url(); ?>assets/img/home/slider-left.png"/></a>
					</div>
					<div class="competition-main-slider">
						<div class="data-slider" data-total="5"></div>
							<ul>
								<li><a class="competition-box-slider" href="1" data-axis="160" data-ordinate="195">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team A </p>
									<p class="competition-box-caption2"> Universitas Indonesia </p>
									</a></li>
								<li><a class="competition-box-slider" href="2" data-axis="180" data-ordinate="195">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team B </p>
									<p class="competition-box-caption2"> Institiut Teknologi Depok </p>
									</a></li>
								<li><a class="competition-box-slider" href="3" data-axis="700" data-ordinate="150">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team C </p>
									<p class="competition-box-caption2"> Institut Pertanian Depok </p>
									</a></li>
								<li><a class="competition-box-slider" href="4" data-axis="50" data-ordinate="80">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team D </p>
									<p class="competition-box-caption2"> Universitas Margonda </p>
									</a></li>
								<li><a class="competition-box-slider" href="4" data-axis="50" data-ordinate="80">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team D </p>
									<p class="competition-box-caption2"> Universitas Margonda </p>
									</a></li>	
							</ul>
						</div>
					<div class="competition-main-slider-button" style="margin-left: 5px;">
						<a data-dir="next" href="#"><img src="<?php echo base_url(); ?>assets/img/home/slider-right.png"/></a>
					</div>

				</div>
			</li>
			<li>
				<div class="competition-slider-wrapper" id="ro">
					<div class="competition-main-slider-button" style="margin-right: 5px;">
						<a data-dir="prev" href="#"><img src="<?php echo base_url(); ?>assets/img/home/slider-left.png"/></a>
					</div>
					<div class="competition-main-slider">
						<div class="data-slider" data-total="5"></div>
							<ul>
								<li><a class="competition-box-slider" href="1" data-axis="160" data-ordinate="195">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team A </p>
									<p class="competition-box-caption2"> Universitas Indonesia </p>
									</a></li>
								<li><a class="competition-box-slider" href="2" data-axis="180" data-ordinate="195">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team B </p>
									<p class="competition-box-caption2"> Institiut Teknologi Depok </p>
									</a></li>
								<li><a class="competition-box-slider" href="3" data-axis="700" data-ordinate="150">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team C </p>
									<p class="competition-box-caption2"> Institut Pertanian Depok </p>
									</a></li>
								<li><a class="competition-box-slider" href="4" data-axis="50" data-ordinate="80">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team D </p>
									<p class="competition-box-caption2"> Universitas Margonda </p>
									</a></li>
								<li><a class="competition-box-slider" href="4" data-axis="50" data-ordinate="80">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team D </p>
									<p class="competition-box-caption2"> Universitas Margonda </p>
									</a></li>	
							</ul>
						</div>
					<div class="competition-main-slider-button" style="margin-left: 5px;">
						<a data-dir="next" href="#"><img src="<?php echo base_url(); ?>assets/img/home/slider-right.png"/></a>
					</div>

				</div>
			</li>
			<li>
				<div class="competition-slider-wrapper" id="mi">
					<div class="competition-main-slider-button" style="margin-right: 5px;">
						<a data-dir="prev" href="#"><img src="<?php echo base_url(); ?>assets/img/home/slider-left.png"/></a>
					</div>
					<div class="competition-main-slider">
						<div class="data-slider" data-total="5"></div>
							<ul>
								<li><a class="competition-box-slider" href="1" data-axis="160" data-ordinate="195">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team A </p>
									<p class="competition-box-caption2"> Universitas Indonesia </p>
									</a></li>
								<li><a class="competition-box-slider" href="2" data-axis="180" data-ordinate="195">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team B </p>
									<p class="competition-box-caption2"> Institiut Teknologi Depok </p>
									</a></li>
								<li><a class="competition-box-slider" href="3" data-axis="700" data-ordinate="150">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team C </p>
									<p class="competition-box-caption2"> Institut Pertanian Depok </p>
									</a></li>
								<li><a class="competition-box-slider" href="4" data-axis="50" data-ordinate="80">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team D </p>
									<p class="competition-box-caption2"> Universitas Margonda </p>
									</a></li>
								<li><a class="competition-box-slider" href="4" data-axis="50" data-ordinate="80">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team D </p>
									<p class="competition-box-caption2"> Universitas Margonda </p>
									</a></li>	
							</ul>
						</div>
					<div class="competition-main-slider-button" style="margin-left: 5px;">
						<a data-dir="next" href="#"><img src="<?php echo base_url(); ?>assets/img/home/slider-right.png"/></a>
					</div>

				</div>
			</li>
			<li>
				<div class="competition-slider-wrapper" id="edu">
					<div class="competition-main-slider-button" style="margin-right: 5px;">
						<a data-dir="prev" href="#"><img src="<?php echo base_url(); ?>assets/img/home/slider-left.png"/></a>
					</div>
					<div class="competition-main-slider">
						<div class="data-slider" data-total="5"></div>
							<ul>
								<li><a class="competition-box-slider" href="1" data-axis="160" data-ordinate="195">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team A </p>
									<p class="competition-box-caption2"> Universitas Indonesia </p>
									</a></li>
								<li><a class="competition-box-slider" href="2" data-axis="180" data-ordinate="195">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team B </p>
									<p class="competition-box-caption2"> Institiut Teknologi Depok </p>
									</a></li>
								<li><a class="competition-box-slider" href="3" data-axis="700" data-ordinate="150">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team C </p>
									<p class="competition-box-caption2"> Institut Pertanian Depok </p>
									</a></li>
								<li><a class="competition-box-slider" href="4" data-axis="50" data-ordinate="80">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team D </p>
									<p class="competition-box-caption2"> Universitas Margonda </p>
									</a></li>
								<li><a class="competition-box-slider" href="4" data-axis="50" data-ordinate="80">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team D </p>
									<p class="competition-box-caption2"> Universitas Margonda </p>
									</a></li>	
							</ul>
						</div>
					<div class="competition-main-slider-button" style="margin-left: 5px;">
						<a data-dir="next" href="#"><img src="<?php echo base_url(); ?>assets/img/home/slider-right.png"/></a>
					</div>

				</div>
			</li>
			<li>
				<div class="competition-slider-wrapper" id="ac">
					<div class="competition-main-slider-button" style="margin-right: 5px;">
						<a data-dir="prev" href="#"><img src="<?php echo base_url(); ?>assets/img/home/slider-left.png"/></a>
					</div>
					<div class="competition-main-slider">
						<div class="data-slider" data-total="5"></div>
							<ul>
								<li><a class="competition-box-slider" href="1" data-axis="160" data-ordinate="195">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team A </p>
									<p class="competition-box-caption2"> Universitas Indonesia </p>
									</a></li>
								<li><a class="competition-box-slider" href="2" data-axis="180" data-ordinate="195">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team B </p>
									<p class="competition-box-caption2"> Institiut Teknologi Depok </p>
									</a></li>
								<li><a class="competition-box-slider" href="3" data-axis="700" data-ordinate="150">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team C </p>
									<p class="competition-box-caption2"> Institut Pertanian Depok </p>
									</a></li>
								<li><a class="competition-box-slider" href="4" data-axis="50" data-ordinate="80">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team D </p>
									<p class="competition-box-caption2"> Universitas Margonda </p>
									</a></li>
								<li><a class="competition-box-slider" href="4" data-axis="50" data-ordinate="80">
									<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
									<p class="competition-box-caption"> Team D </p>
									<p class="competition-box-caption2"> Universitas Margonda </p>
									</a></li>	
							</ul>
						</div>
					<div class="competition-main-slider-button" style="margin-left: 5px;">
						<a data-dir="next" href="#"><img src="<?php echo base_url(); ?>assets/img/home/slider-right.png"/></a>
					</div>

				</div>
			</li>
		</ul>
	</div>
</div>


<div id="playground" class="content leftcol" style="margin-bottom: 30px">
	<a href="<?php echo base_url(); ?>playground"><img class="content-title" id="playground-title" src="<?php echo base_url(); ?>assets/img/title-home/playground-banner.png" style="float:none;"/></a>
		<br/>
		
	<ul>
		<?php
			while ($ev = mysql_fetch_array($playground_res)) {
			$pg_id = $ev['id'];
			$pg_name = $ev['nama'];
			$pg_img = str_replace(" ", "-", strtolower($pg_name));
			$pg_coord_x = $ev['kordinat-x'];
			$pg_coord_y = $ev['kordinat-y'];
			$pg_cat = $ev['kategori'];
			$pg_desc = $ev['deskripsi'];
			$pg_twitter = $ev['twitter'];
			$pg_desc1 = $ev['deskripsi_bebenah'];
			$pg_display = $ev['display'];
		?>		
			<li style="<?php echo $pg_display ?>;">
				<div class="content-text">
					<div class="left-col">
						<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://compfest.web.id/playground" data-text="Ayo datang ke playground @CompFest dan rasakan tantangan dari <?php echo $pg_name?> <?php echo $pg_twitter?>" data-size="large" data-hashtags="FantasticJourney">Tweet</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						<img class="team-img" alt="<?php echo $pg_name ?>" src="<?php echo base_url(); ?>assets/img/home/playground/<?php echo $pg_img?>.jpg">
					</div>
					<p class="title"><?php echo $pg_name ?></p>
					<p class="category"><?php echo $pg_cat?></p>
					
					<p class="desc1">"<?php echo $pg_desc?>"</p><br/>
					<p class="desc"><?php echo $pg_desc1 ?></p>
				</div>
			</li>
		<?php
			}
		?>
	</ul>
	
	<div class="navi" id="playground-nav">
		<a class="nav-left" data-dir="prev" href="#">	<img src="<?php echo base_url(); ?>assets/img/home/nav-left.png" /></a>
		<a class="nav-right" data-dir="next" href="#">	<img src="<?php echo base_url(); ?>assets/img/home/nav-right.png" /></a>
	</div>
</div>

<div id="entertaiment" class="content rightcol" style="margin-bottom: 30px">
	<a href="<?php echo base_url(); ?>entertainment"><img class="content-title" id="entertainment-title" src="<?php echo base_url(); ?>assets/img/title-home/entertainment-banner.png" style="float:none;"/></a><br/>
	<img src="<?php echo base_url(); ?>assets/img/home/cs-entertain.png"/>
	<!-- ENTERTAINMENT
	<div class="entertainment-main-slider-button" style="margin-right: 5px;">
		<a data-dir="prev" href="#"><img src="<?php echo base_url(); ?>assets/img/home/slider-left.png"/></a>
	</div>
	<div class="entertainment-main-slider">
		
	
		<div class="data-slider" data-total="4"></div>
		<ul>
			<li><a class="entertainment-box-slider" href="1" data-axis="160" data-ordinate="195">
				<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
				<p class="entertainment-box-caption"> Raiso </p>
				<p class="entertainment-box-caption2"> Guest Star </p>
				</a></li>
			<li><a class="entertainment-box-slider" href="2" data-axis="180" data-ordinate="195">
				<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
				<p class="entertainment-box-caption"> Asciipella </p>
				<p class="entertainment-box-caption2"> Fasilkom </p>
				</a></li>
			<li><a class="entertainment-box-slider" href="3" data-axis="700" data-ordinate="150">
				<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
				<p class="entertainment-box-caption"> Jokowi </p>
				<p class="entertainment-box-caption2"> Gubernur </p>
				</a></li>
			<li><a class="entertainment-box-slider" href="4" data-axis="50" data-ordinate="80">
				<img src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif">
				<p class="entertainment-box-caption"> SBY </p>
				<p class="entertainment-box-caption2"> Presiden </p>
				</a></li>
		</ul>
	</div>
		
		<div class="entertainment-main-slider-button" style="margin-left: 5px;">
			<a data-dir="next" href="#"><img src="<?php echo base_url(); ?>assets/img/home/slider-right.png"/></a>
		</div>	
	-->
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
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/homeslider.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/slider/carousel.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/slider/holder.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/home.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/slider/transitions.min.js" type="text/javascript"></script>