

<h1>Add new Page</h1>
<form class="form-horizontal" method="post" data-ajax="false" action="<?php echo site_url('admin/save_news'); ?>">

	<div class="control-group">
		<label class="control-label">Title</label>
		<div class="controls">
			<input type="text" name="title" value="<?php echo set_value('title'); ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">keyword</label>
		<div class="controls">
			<input type="text" name="url" value="<?php echo set_value('url'); ?>" data-role="none">
		</div>
	</div>



	<div class="control-group">
		<label class="control-label">Content</label>
		<div class="controls">
			<textarea name="content" data-role="none" style="height: 800px; width:600px" ><?php echo set_value('content'); ?></textarea>
		</div>
	</div>

	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn btn-primary" data-role="none"><i class="icon-search icon-check"></i> Save</button>
			<a href="<?php echo site_url('admin/news'); ?>" class="btn btn-danger" data-role="none"><i class="icon-share-alt"></i> Back</a>
		</div>
	</div>
</form>
