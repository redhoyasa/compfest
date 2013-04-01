<div id="container">
		<div class="content-title">News</div>


		<?php 
			$row = $this->news_model->get_all_news();
			foreach ($row as $r) {
				if ($r->publish == 1){
		?>
			<div class="news-main">
				<div class="news-title"><a href="<?php echo site_url('news/' . $r->url); ?>"><?php echo $r->title; ?></a> </div>
				<div class="news-thumbnail"></div>
				<div class="news-date"><?php echo $r->timestamp; ?></div>
				<div class="news-main">
				<p><?php echo $r->content; ?></p>
				</div>
			</div>
		<?php
				} 
			}
		?>
</div>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/news.css">
