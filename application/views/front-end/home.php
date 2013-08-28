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
	<a href="<?php echo base_url(); ?>news"><img id="news-title" src="<?php echo base_url(); ?>assets/img/title-home/news-banner.png" /></a>
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
	<a href="<?php echo base_url(); ?>seminar"><img id="seminars-title" src="<?php echo base_url(); ?>assets/img/title-home/seminar-banner.png" style="float:none;"/></a> <br/>
	<div class="register-button">
		<a class="button"  href="<?php echo site_url(); ?>seminar/register"><p id="register-tulisan">REGISTER</p></a>
	</div>
	<ul>
		<li>
			<div class="content-text">
				<img class="speaker-img" src="<?php echo base_url(); ?>assets/img/seminar/home/wisnu.jpg" />	
				<p class="title" style="display:table; margin-left:10px; font-weight: bold;">"Encourage Innovation in Indonesia through Research"</p>
				<p class="speaker" style="display:table; margin-left:10px">By Wishnu Jatmiko</p>
				<p class="date"style="display:table; margin-left:10px">Sabtu, 21 September 2013 09.30-11.00 WIB</p>
				<p class="venue"style="display:table; margin-left:10px">Anex Room Balairung, Universitas Indonesia</p><br/>
				
				<p class="desc" style="text-indent: 30px;">Seminar tentang riset riset gitu deh pokokya. Pembicaranya dosen ane sob. Udah sering banget ke Jepang.
					Beliau udah banyak bikin alat alat kece badai ga ada obat. Kaya alat alatnya doraemon sob. ini cuma dummy text. hahaaha 
				</p>
				
			</div>
		</li>
		<li>
			<div class="content-text">
				<img class="team-img" src="<?php echo base_url(); ?>assets/img/seminar/home/oskar.jpg" />	
				<p class="title" style="display:table; margin-left:10px; font-weight: bold;">"Innovation of Speech and Natural Language Processing"</p>
				<p class="speaker" style="display:table; margin-left:10px">By Oskar Riandi</p>
				<p class="date"style="display:table; margin-left:10px">Sabtu, 21 September 2013 11.00-12.30 WIB</p>
				<p class="venue"style="display:table; margin-left:10px">Anex Room Balairung, Universitas Indonesia</p><br/>
				
				<p class="desc" style="text-indent: 30px;">Seminar tentang riset riset gitu deh pokokya. Pembicaranya dosen ane sob. Udah sering banget ke Jepang.
					Beliau udah banyak bikin alat alat kece badai ga ada obat. Kaya alat alatnya doraemon sob. ini cuma dummy text. hahaaha 
				</p>
			</div>
		</li>
		<li>
			<div class="content-text">
				<img class="team-img" src="<?php echo base_url(); ?>assets/img/seminar/home/andri.jpg" />	
				<p class="title" style="display:table; margin-left:10px; font-weight: bold;">"Solving today's Enterprise Problem with Big Data Management"</p>
				<p class="speaker" style="display:table; margin-left:10px">By Andri Rizki</p>
				<p class="date"style="display:table; margin-left:10px">Sabtu, 21 September 2013 13.30-15.00 WIB</p>
				<p class="venue"style="display:table; margin-left:10px">Anex Room Balairung, Universitas Indonesia</p><br/>
				
				<p class="desc" style="text-indent: 30px;">Seminar tentang riset riset gitu deh pokokya. Pembicaranya dosen ane sob. Udah sering banget ke Jepang.
					Beliau udah banyak bikin alat alat kece badai ga ada obat. Kaya alat alatnya doraemon sob. ini cuma dummy text. hahaaha 
				</p>
			</div>
		</li>
		<li>
			<div class="content-text">
				<img class="team-img" src="<?php echo base_url(); ?>assets/img/seminar/home/rene.jpg" />	
				<p class="title" style="display:table; margin-left:10px; font-weight: bold;">"Innovate or Perish"</p>
				<p class="speaker" style="display:table; margin-left:10px">By Rene Suhardono Canoneo</p>
				<p class="date"style="display:table; margin-left:10px">Sabtu, 21 September 2013 16.00-17.30 WIB</p>
				<p class="venue"style="display:table; margin-left:10px">Anex Room Balairung, Universitas Indonesia</p><br/>
				
				<p class="desc" style="text-indent: 30px;">Seminar tentang riset riset gitu deh pokokya. Pembicaranya dosen ane sob. Udah sering banget ke Jepang.
					Beliau udah banyak bikin alat alat kece badai ga ada obat. Kaya alat alatnya doraemon sob. ini cuma dummy text. hahaaha 
				</p>
			</div>
		</li>
		<li>
			<div class="content-text">
				<img class="team-img" src="<?php echo base_url(); ?>assets/img/seminar/home/adhicipta.jpg" />	
				<p class="title" style="display:table; margin-left:10px; font-weight: bold;">"Indonesian Animation Strategy Goes International"</p>
				<p class="speaker" style="display:table; margin-left:10px">By Adhicipta R. Wirawan</p>
				<p class="date"style="display:table; margin-left:10px">Minggu, 22 September 2013 09.30-11.00 WIB</p>
				<p class="venue"style="display:table; margin-left:10px">Anex Room Balairung, Universitas Indonesia</p><br/>
				
				<p class="desc" style="text-indent: 30px;">Seminar tentang riset riset gitu deh pokokya. Pembicaranya dosen ane sob. Udah sering banget ke Jepang.
					Beliau udah banyak bikin alat alat kece badai ga ada obat. Kaya alat alatnya doraemon sob. ini cuma dummy text. hahaaha 
				</p>
			</div>
		</li>
		<li>
			<div class="content-text">
				<img class="team-img" src="<?php echo base_url(); ?>assets/img/seminar/home/izak.jpg" />	
				<p class="title" style="display:table; margin-left:10px; font-weight: bold;">"Advance Payment for Mobile and Community"</p>
				<p class="speaker" style="display:table; margin-left:10px">By Izak Jenie</p>
				<p class="date"style="display:table; margin-left:10px">Minggu, 22 September 2013 11.00-12.30 WIB</p>
				<p class="venue"style="display:table; margin-left:10px">Anex Room Balairung, Universitas Indonesia</p><br/>
				
				<p class="desc" style="text-indent: 30px;">Seminar tentang riset riset gitu deh pokokya. Pembicaranya dosen ane sob. Udah sering banget ke Jepang.
					Beliau udah banyak bikin alat alat kece badai ga ada obat. Kaya alat alatnya doraemon sob. ini cuma dummy text. hahaaha 
				</p>
			</div>
		</li>
		<li>
			<div class="content-text">
				<img class="team-img" src="<?php echo base_url(); ?>assets/img/seminar/home/dodyalfred.jpg" />	
				<p class="title" style="display:table; margin-left:10px; font-weight: bold;">"Gameconomics: Turning Game Into Successful Business"</p>
				<p class="speaker" style="display:table; margin-left:10px">By Dodi Dharma & Alfred Boediman</p>
				<p class="date"style="display:table; margin-left:10px">Minggu, 22 September 2013 09.30-11.00 WIB</p>
				<p class="venue"style="display:table; margin-left:10px">Anex Room Balairung, Universitas Indonesia</p><br/>
				
				<p class="desc" style="text-indent: 30px;">Seminar tentang riset riset gitu deh pokokya. Pembicaranya dosen ane sob. Udah sering banget ke Jepang.
					Beliau udah banyak bikin alat alat kece badai ga ada obat. Kaya alat alatnya doraemon sob. ini cuma dummy text. hahaaha 
				</p>
			</div>
		</li>
		<li>
			<div class="content-text">
				<img class="team-img" src="<?php echo base_url(); ?>assets/img/seminar/home/firstman.jpg" />	
				<p class="title" style="display:table; margin-left:10px; font-weight: bold;">"Innovation of Perceptul Computing"</p>
				<p class="speaker" style="display:table; margin-left:10px">By Firsman Marpaung</p>
				<p class="date"style="display:table; margin-left:10px">Sabtu, 21 September 2013 11.00-12.30 WIB</p>
				<p class="venue"style="display:table; margin-left:10px">Anex Room Balairung, Universitas Indonesia</p><br/>
				
				<p class="desc" style="text-indent: 30px;">Seminar tentang riset riset gitu deh pokokya. Pembicaranya dosen ane sob. Udah sering banget ke Jepang.
					Beliau udah banyak bikin alat alat kece badai ga ada obat. Kaya alat alatnya doraemon sob. ini cuma dummy text. hahaaha 
				</p>
			</div>
		</li>
	</ul>
	<div id="seminar-nav" class="navi">
		<a class="nav-left" data-dir="prev" href="#">	<img src="<?php echo base_url(); ?>assets/img/nav-left.png" /></a>
		<a class="nav-right" data-dir="next" href="#">	<img src="<?php echo base_url(); ?>assets/img/nav-right.png" /></a>
	</div>
</div>



<div id="competitions-final" class="content rightcol">
	<img id="compfinal-title" src="<?php echo base_url(); ?>assets/img/title-home/compfinal-banner.png" style="float:none;"/><br/>
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
	<a href="<?php echo base_url(); ?>playground"><img id="playground-title" src="<?php echo base_url(); ?>assets/img/title-home/playground-banner.png" style="float:none;"/></a><br/>
	<ul>
		<li>
			<div class="content-text">
			<img class="team-img" src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif" />
			<p class="title" style="display:table; margin-left:10px; font-weight: bold;">Tinker Game</p>
			<p class="category" style="display:table; margin-left:10px; font-weight: bold;">Game Developer</p><br/>
			<p class="desc" style="text-indent: 30px;">Seminar tentang riset riset gitu deh pokokya. Pembicaranya dosen ane sob. Udah sering banget ke Jepang.
				Beliau udah banyak bikin alat alat kece badai ga ada obat. Kaya alat alatnya doraemon sob. ini cuma dummy text. Udah sering banget ke Jepang.
				Beliau udah banyak bikin alat alat kece badai ga ada obat. Kaya alat alatnya doraemon sob. ini cuma dummy text. hahaaha  
			</p>
			</div>
		</li>
		<li>
			<div class="content-text">
			<img class="team-img" src="<?php echo base_url(); ?>assets/img/placehold/150x150.gif" />
			<p class="title" style="display:table; margin-left:10px; font-weight: bold;">Google Student Ambasador</p>
			<p class="category" style="display:table; margin-left:10px; font-weight: bold;">Gatau Ini Apaan</p><br/>
			<p class="desc" style="text-indent: 30px;">Seminar tentang riset riset gitu deh pokokya. Pembicaranya dosen ane sob. Udah sering banget ke Jepang.
				Beliau udah banyak bikin alat alat kece badai ga ada obat. Kaya alat alatnya doraemon sob. ini cuma dummy text. Seminar tentang riset riset gitu deh pokokya. Pembicaranya dosen ane sob. Udah sering banget ke Jepang.
				Beliau udah banyak bikin alat alat kece badai ga ada obat. Kaya alat alatnya doraemon sob. ini cuma dummy text. hahaaha  
			</p>
			</div>
		</li>
	</ul>
	<div class="navi" id="playground-nav">
		<a class="nav-left" data-dir="prev" href="#">	<img src="<?php echo base_url(); ?>assets/img/nav-left.png" /></a>
		<a class="nav-right" data-dir="next" href="#">	<img src="<?php echo base_url(); ?>assets/img/nav-right.png" /></a>
	</div>
</div>
<div id="entertaiment" class="content rightcol" style="margin-bottom: 30px">
	<a href="<?php echo base_url(); ?>entertainment"><img id="entertainment-title" src="<?php echo base_url(); ?>assets/img/title-home/entertainment-banner.png" style="float:none;"/></a><br/>
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
</div>  

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/homeslider.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/slider/carousel.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/slider/holder.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/home.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/slider/transitions.min.js" type="text/javascript"></script>