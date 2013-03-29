		<div id="content-home">
			<div id="slider">
				<img src="http://farm6.staticflickr.com/5268/5893255075_0f8787f78c_z.jpg" alt="Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/">
			    <img src="http://farm5.staticflickr.com/4091/4833681624_c8b6fa82d7_z.jpg" alt="Photo by: Daniel Parks Link: http://www.flickr.com/photos/parksdh/5227623068/">
			    <img src="http://farm5.staticflickr.com/4071/4298825842_989fa3c187_z.jpg" alt="Photo by: Mike Ranweiler Link: http://www.flickr.com/photos/27874907@N04/4833059991/">
			    <img src="http://farm1.staticflickr.com/27/97577796_94967c3555_z.jpg" alt="Photo by: Stuart SeegerLink: http://www.flickr.com/photos/stuseeger/97577796/">
			   	<iframe width="640" height="450" src="http://www.youtube.com/embed/zCMEm63Ypfk" frameborder="0" allowfullscreen></iframe>
			</div>
			<?php
				$this->load->view('front-end/socialbox');
			?>
		</div>
			<div id="news">
				<ul id="js-news" class="js-hidden">
					<?php 
						$row = $this->news_model->get_all_news();
						foreach ($row as $r) {
							if ($r->publish == 1){
					?>
						 <li class="news-item"><a href="#"><?php echo $r->title; ?></a></li>
					<?php
							} 
						}
					?>
				</ul>
			</div>
			<div id="sponsor">
				<p style="margin: 2px 0 0 2px;">Sponsored by:</p> 
			</div>

		</div>
	</section>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slider.css">
	<script src="<?php echo base_url(); ?>assets/plugins/slider/jquery.slides.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/slider/slider.js" type="text/javascript"></script>
	<link href="<?php echo base_url(); ?>assets/plugins/news/ticker-style.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo base_url(); ?>assets/plugins/news/jquery.ticker.js" type="text/javascript"></script>

	<script type="text/javascript">
	    $(function () {
	        $('#js-news').ticker({
	        	titleText: 'News :'
	        });	
	    });
	</script>