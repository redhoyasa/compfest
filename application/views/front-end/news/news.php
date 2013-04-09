<div id="container">

		<?php 
			$r = $this->news_model->get_news_url($url);

			if ($r == false){
				show_404();
			}else{
				if ($r->publish == 1){
		?>
			<div class="news-main">
				<h2 class="news-page-header"><?php echo $r->title;?></h2>
				<div class="news-thumbnail"></div>
				<div class="news-date"><?php echo date('M j Y g:i A', strtotime($r->timestamp)); ?></div>
				<div class="news-main">
				<p><?php echo $r->content; ?></p>
				</div>
			</div>
		<?php
				} 
			}
		?>
</div>

<div id="recent">
	<h2 class="recent-header">Berita Terbaru</h2>
	<ul>
	<?php 
			$row = $this->news_model->get_all_news();
			foreach ($row as $r) {
				if ($r->publish == 1){
		?>
			<li class="news-list" ><a href="<?php echo site_url('news/' . $r->url); ?>"><?php echo $r->title; ?></a></li>
		<?php
				} 
			}
		?>
	</ul>
</div>


<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/news.css">
