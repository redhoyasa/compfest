<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/WOWSlider/engine1/style.css" />
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/WOWSlider/engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	<div id="middle">

<img width="1180" src="<?php echo base_url(); ?>assets/img/header-red.png">
</div>
			
		
			<div class="playground-header">
				<img src="<?php echo base_url(); ?>assets/img/playground/header-playground.png"/>
			</div>
			
			<?php
				$db['default']['hostname'] = 'localhost';
				$db['default']['username'] = 'root';//k5334818_webcoba';
				$db['default']['password'] = '';//0103301034';
				$db['default']['database'] = 'webcoba';//k5334818_webcoba';
				
				$mysql = mysql_connect($db['default']['hostname'], $db['default']['username'], $db['default']['password']);
				mysql_select_db($db['default']['database'], $mysql) or die(mysql_error());
				
				$playground_sql = "SELECT *
						         FROM playground";
				$playground_res = mysql_query($playground_sql, $mysql) or die (mysql_error($mysql));
				
			?>

		<div id="container">
							
				<div class="clearfix seminar-instance">
				
					<iframe width="1000" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en-US&amp;geocode=&amp;q=Balairung+Universitas+Indonesia,+Depok,+West+Java,+Indonesia&amp;aq=0&amp;oq=balaurung+&amp;sll=-6.367932,106.829681&amp;sspn=0.012305,0.021136&amp;ie=UTF8&amp;hq=Balairung+Universitas+Indonesia,+Depok,+West+Java,+Indonesia&amp;t=m&amp;ll=-6.355904,106.832943&amp;spn=0.029856,0.085745&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
					<br />
					<div class="playground-how-to-play">
						<img src="<?php echo base_url();?>assets/img/playground/pg-how-to-play.png" />
					</div>
					<div class="playground-main-slider-wrap">
					<div class="playground-main-slider-button">
						<a data-dir="prev" href="#"><img src="<?php echo base_url(); ?>assets/img/playground/slider-left.png"/></a>
					</div>
					
					<div class="playground-main-slider">
					
					<?php
					$totalPlayground = mysql_num_rows($playground_res);
					?>
					<div class="data-slider" data-total="30"></div>
					<ul>
					<?php
					
					while ($ev = mysql_fetch_array($playground_res)) {
						$pg_id = $ev['id'];
						$pg_name = $ev['nama'];
						$pg_img = str_replace(" ", "-", strtolower($pg_name));
						$pg_coord_x = $ev['kordinat-x'];
						$pg_coord_y = $ev['kordinat-y'];
						$pg_cat = $ev['kategori'];
						
						?>
						<li><a class="playground-box-slider" href="<?php echo $pg_id?>" data-axis="<?php echo $pg_coord_x?>" data-ordinate="<?php echo $pg_coord_y?>">
							<img src="<?php echo base_url(); ?>assets/img/playground/<?php if ($pg_img == 'telunjuk') echo $pg_img.'.png'; else echo $pg_img.'.jpg'?>">
							<p class="playground-box-caption"> <?php echo $pg_name?></p>
							<p class="playground-box-caption2"> <?php echo $pg_cat?></p>
						</a></li>
						<?php
						
					}
					?>
					</div>
					
					<div class="playground-main-slider-button">
						<a data-dir="next" href="#"><img src="<?php echo base_url(); ?>assets/img/playground/slider-right.png"/></a>
					</div>
					</div>
					<div style="clear:both;"></div>
					
					<div class="playground-main-desc">
					<div class="playground-desc-mover">
					
					<?php
					
					$playground_res = mysql_query($playground_sql, $mysql) or die (mysql_error($mysql));
					while ($ev = mysql_fetch_array($playground_res)) {
						$pg_id = $ev['id'];
						$pg_name = $ev['nama'];
						$pg_img = str_replace(" ", "-", strtolower($pg_name));
						$pg_cat = $ev['kategori'];
						$pg_desc = $ev['deskripsi'];
						$pg_challenge = $ev['chellange'];
						$pg_twitter = $ev['twitter'];
						
						
						?>
						<div class="playground-main-desc-floater">
							<div class="playground-main-desc-text">
								<img src="<?php echo base_url(); ?>assets/img/playground/<?php if ($pg_img == 'telunjuk') echo $pg_img.'.png'; else echo $pg_img.'.jpg'?>">
								<h1 style="font-weight:bold;"><?php echo $pg_name?></h1>
								<a href="https://twitter.com/share" class="twitter-share-button" style="position: absolute; top:0; right:0;"data-url="http://compfest.web.id/playground" data-text="Ayo datang ke playground @CompFest dan rasakan tantangan dari <?php echo $pg_name?> <?php echo $pg_twitter?>" data-size="large" data-hashtags="FantasticJourney">Tweet</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
								
								<h2><?php echo $pg_cat?></h2>
								<p style="text-align:justify;margin-top:15px;line-height:25px;"><?php echo $pg_desc?></p>
							</div>
							<div class="playground-side-desc-text">
								<h1>Challenges!</h1>
								<?php echo $pg_challenge?>
							</div>
						</div>
						<?php
						
					}
					?>
						
					</div>
					</div>
					
					<div style="clear:both;"></div>
					
					<!-- BELUM ADA DATA LOKASI STAND -->
					<div style="display:none">
						<h1>Map</h1>
						<div class="playground-map">
							<div class="playground-map-pointer"></div>
						</div>
					</div>
					
				</div>
	
				
					
		</div>
	<div id="playground-subscribe">
		<h3 id="playground-Tdetail">
			Ayo sebarkan event ini ke teman-temanmu!
		</h3>
	
		<div id="playground-share">
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://compfest.web.id/playground" data-text="Rasakan serunya petualangan di playground IT Expo @CompFest cek disini" data-size="small" data-hashtags="FantasticJourney" style ="">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			<div class="fb-like" data-href="http://compfest.web.id/playground" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true" data-font="verdana" data-action="recommend"></div>

		</div>
	</div>

		<link rel="stylesheet" type="text/css" href="<?php site_url();?>assets/css/playground.css">
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/playground.js"></script>