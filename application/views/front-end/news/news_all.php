<div id="inner-content">
		<div id="content-title">News</div>


		<?php 
			$row = $this->news_model->get_all_news();
			foreach ($row as $r) {
				if ($r->publish == 1){
		?>
			<div class="content-main">
				<div class="title"><a href="#"><?php echo $r->title; ?></a> </div>
				<div class="thumbnail"></div>
				<div class="main">
				<p><?php echo $r->content; ?></p>
				</div>
			</div>
		<?php
				} 
			}
		?>
</div>

	<?php
		$this->load->view('front-end/socialbox');
	?>
			
</div>
</section>