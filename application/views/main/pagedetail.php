<?php 
	$page = $this->page_model->get_page_url($this->uri->segment(2));
?>

<h1><?php echo $page->title ?></h1>
<hr>
<?php echo $page->content; ?>

<?php if($this->uri->segment(2) == 'news') { 
	$news = $this->news_model->get_all_news(1);
	if($news != false) {
		foreach ($news as $n) {
?>
		<h1><a href="<?php echo site_url('news/') .'/'. $n->url ?>"><?php echo $n->title; ?></a></h1>
		<p><?php echo $n->content; ?></p>
<?php
		}
	}
} 

?>