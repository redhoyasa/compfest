<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/WOWSlider/engine1/style.css" />
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/WOWSlider/engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	<div id="middle">
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</div>
			
		
			<div class="playground-header" style="margin-top:70px">
				<img src="<?php echo base_url(); ?>assets/img/playground/ui/header.png"/>
			</div>
			
			<?php
				$db['default']['hostname'] = 'localhost';
				$db['default']['username'] = 'root';
				$db['default']['password'] = '';
				$db['default']['database'] = 'webcoba';
				
				$mysql = mysql_connect($db['default']['hostname'], $db['default']['username'], $db['default']['password']);
				mysql_select_db($db['default']['database'], $mysql) or die(mysql_error());
				
				$playground_sql = "SELECT *
						         FROM playground";
				$playground_res = mysql_query($playground_sql, $mysql) or die (mysql_error($mysql));
				
			?>
			
		<div class="clearfix playground-top">
			<img src="<?php echo base_url();?>assets/img/playground/ui/robot.png" style="float:left; margin-right: 50px" />
			<img src="<?php echo base_url();?>assets/img/playground/ui/free.png" style="float:right" width="100" height="100"/>
			<p>Playground adalah pameran IT interaktif, terdiri dari startup, perusahaan IT,
			komunitas, karya kampus, dan finalis kompetisi CompFest.</p>
		
		</div>
		
		<div class="playground-how-to-play">
			<div class="playground-how-to-mid">
				<img src="<?php echo base_url(); ?>assets/img/playground/ui/ijo2.png" style="float:left; margin-top: 1.53em; margin-right: 10px" />
				<h1>Langkah-langkah Bermain di Playground</h1>
				<img src="<?php echo base_url();?>assets/img/playground/ui/how-to-play.png" />
			</div>
		</div>
					
		<div id="container">
							
				<div class="clearfix seminar-instance">
					
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
					<div style="clear:both; height: 50px"></div>
					
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
						$pg_challenge = $ev['challenge'];
						$pg_twitter = $ev['twitter'];
						
						
						?>
						<div class="playground-main-desc-floater">
							<div class="playground-main-desc-text">
								<div class="playground-main-desc-img">
									<img src="<?php echo base_url(); ?>assets/img/playground/<?php if ($pg_img == 'telunjuk') echo $pg_img.'.png'; else echo $pg_img.'.jpg'?>">
								</div>
								
								<h1 style="font-weight:bold;"><?php echo $pg_name?></h1>
								<a href="https://twitter.com/share" class="twitter-share-button twitter-share-button-desc" data-url="http://compfest.web.id/playground" data-text="Ayo datang ke playground @CompFest dan rasakan tantangan dari <?php echo $pg_name?> <?php echo $pg_twitter?>" data-size="large" data-hashtags="FantasticJourney">Tweet</a>
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
					
					<div style="clear:both; margin-top:50px"></div>
				
	
				
					
		</div>
					
				</div>
					
					<div class="clearfix playground-lokasi">
						<img src="<?php echo base_url(); ?>assets/img/playground/ui/ijo2.png" style="float:left; margin-top: 1.53em; margin-right: 10px" />
						<h1>Lokasi</h1>
						<div class="playground-balairungPic">
						</div>
						<div class="playground-map">
							<iframe width="400" height="303" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en-US&amp;geocode=&amp;q=Balairung+Universitas+Indonesia,+Depok,+West+Java,+Indonesia&amp;aq=0&amp;oq=balaurung+&amp;sll=-6.367932,106.829681&amp;sspn=0.012305,0.021136&amp;ie=UTF8&amp;hq=Balairung+Universitas+Indonesia,+Depok,+West+Java,+Indonesia&amp;t=m&amp;ll=-6.355904,106.832943&amp;spn=0.029856,0.085745&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
						</div>
						<div style="clear:both; height: 25px;"></div>
						<h2> Contact Person </h2>
						<div style="height:9px"></div>
						<h3> Tommy : 0812 8786 1186 </h3>
					</div>
				
				
				
	<div id="playground-subscribe">
		<h3 id="playground-Tdetail">
			Ayo sebarkan event ini ke teman-temanmu!
		</h3>
	
		<div id="playground-share">
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://compfest.web.id/playground" data-text="Let's play at @CompFest Playground and join our" data-size="small" data-hashtags="FantasticJourney">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			<div class="fb-like" data-href="http://compfest.web.id/playground" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true" data-font="verdana" data-action="recommend"></div>
		</div>
	</div>

		<link rel="stylesheet" type="text/css" href="<?php site_url();?>assets/css/playground.css">
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/playground.js"></script>