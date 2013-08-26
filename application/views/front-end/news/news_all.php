<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/news-all.css">
<div id="container">
		<div class="content-title">CompFest News</div>

		<div id="wrap">
		<?php 
			$row = $this->news_model->get_all_news();
			foreach ($row as $r) {
				if ($r->publish == 1){
		?>
			<div class="news-main news-top">
				<div class="news-title"><a href="<?php echo site_url('news/' . $r->url); ?>"><?php echo $r->title; ?></a> </div>
				<div class="news-thumbnail"></div>
				<div class="news-date"><?php echo date('l, F-j-Y G:i', strtotime($r->timestamp)). " WIB"; ?></div>
				<div class="news-content">
				<p><?php echo substr(strip_tags($r->content,""),0,200)."  . . . "; ?></p>
				</div>
				<!--span class="sup"><a class="news-button" href="<?php echo site_url('news/' . $r->url); ?>">Read more</a></span-->
			</div>
		<?php
				} 
			}
		?>
		</div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".news-main").hover(function(){
			
		var x = Math.floor((Math.random()*5));

		var array = [
			"#2ECC71",
			"#f4b400",
			"#E74C3C",
			"#3498DB",
			"#F7931E"
		];
			$(this).css({
				"background":array[x],
				"color" :"white"
			});
		},function(){
			$(this).css({
				"background":"white",
				"color" :"#4d4d4d"
			});
		});

		$(".news-main").click(function(){
			window.location = $(this).find(".news-title a").attr("href");
		});


	});
</script>

