<?php 
	$page = $this->news_model->get_news($this->uri->segment(3));
	if($page == false) {
		redirect('admin/news');
	}
?>

<h1>Add new Page</h1>
<form class="form-horizontal" method="post" data-ajax="false" action="<?php echo site_url('admin/update_news'); ?>">
	<input type="hidden" value="<?php echo $this->uri->segment(3) ?>" name="id_news">

	<div class="control-group">
		<label class="control-label">Title</label>
		<div class="controls">
			<input type="text" name="title" value="<?php echo $page->title; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">keyword</label>
		<div class="controls">
			<input type="text" name="url" value="<?php echo $page->url; ?>" data-role="none">
		</div>
	</div>

<?php if($this->session->userdata('event') == 0 || $this->session->userdata('event') == 2) { ?>
	<div class="control-group">
		<label class="control-label">Publish</label>
		<div class="controls">
			<select name="publish" data-role="none">
				<option value="1" <?php if($page->publish == 1) echo "selected" ?>>Yes</option>
				<option value="0" <?php if($page->publish == 0) echo "selected" ?>>No</option>
			</select>
		</div>
	</div>
<?php } ?>

	<div class="control-group">
		<label class="control-label">Content</label>
		<div class="controls">
			<textarea name="content" data-role="none" style="height: 800px; width:600px" ><?php echo $page->content; ?></textarea>
		</div>
	</div>

	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn btn-primary" data-role="none"><i class="icon-search icon-check"></i> Save</button>
			<a href="<?php echo site_url('admin/news'); ?>" class="btn btn-danger" data-role="none"><i class="icon-share-alt"></i> Back</a>
		</div>
	</div>
</form>
