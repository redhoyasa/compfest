<?php 
	$page = $this->page_model->get_page($this->uri->segment(3));
	if($page == false) {
		redirect('admin/page');
	}
?>

<h1>Edit Page</h1>
<form class="form-horizontal" method="post" data-ajax="false" action="<?php echo site_url('admin/update_page'); ?>">
	<input type="hidden" value="<?php echo $this->uri->segment(3) ?>" name="id_page">
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

	<?php if($this->session->userdata('event') == 0 || $this->session->userdata('event') == 1) { ?>
	<div class="control-group">
		<label class="control-label">Publish</label>
		<div class="controls">
			<select name="publish" data-role="none">
				<option value="1">Yes</option>
				<option value="0">No</option>
			</select>
		</div>
	</div>
	<?php } ?>

	<div class="control-group">
		<label class="control-label">Parent</label>
		<div class="controls">
			<select name="publish" data-role="none">
				<option value="0">None</option>
				<?php 
					$ppage = $this->page_model->get_all_page();
					foreach ($ppage as $p) {

						if($page->parent == $p->id_page) {
							$select = "selected";
						} else {
							$select = "";
						}
				?>
						<option  <?php echo $select; ?> value="<?php echo $p->id_page ?>"><?php echo $p->title; ?></option>
				<?php 
					}
				?>
			</select>
		</div>
	</div>


	<div class="control-group">
		<label class="control-label">Content</label>
		<div class="controls">
			<textarea name="content" data-role="none" style="height: 800px; width:600px" ><?php echo $page->content; ?></textarea>
		</div>
	</div>

	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn btn-primary" data-role="none"><i class="icon-search icon-check"></i> Save</button>
			<a href="<?php echo site_url('admin/page'); ?>" class="btn btn-danger" data-role="none"><i class="icon-share-alt"></i> Back</a>
		</div>
	</div>
</form>
