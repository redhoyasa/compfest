<?php 
	$news = $this->news_model->get_news_url($this->uri->segment(2));
	if($news != false) {
?>

<h1><?php echo $news->title ?></h1>
<hr>
<?php echo $news->content; ?>

<?php } else {
	redirect('404');
} ?>