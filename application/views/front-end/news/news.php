<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

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
					<table>
					<tr>	
					<td><div class="fb-like" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true" data-font="tahoma" data-action="recommend"></div></td>
					<td>&nbsp;&nbsp;&nbsp;</td>
					<td><div class="twitter-hack"><a href="https://twitter.com/share" class="twitter-share-button" data-via="CompFest">Tweet</a></div></td>
				</tr>
				</table>
				<div class="news-main">
				<p><?php echo $r->content; ?></p>
				</div>
			</div>
			<br>		
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
