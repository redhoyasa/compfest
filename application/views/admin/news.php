<h1>News</h1>
<hr>
<a data-ajax="false" href="<?php echo site_url('admin/add_news') ?>" data-role="none" data-inline="true" class="btn btn-primary">Tambah Baru</a>
<hr>

<table class="table table-striped">
	<tr>
		<th>No</th><th>Title</th><th>URL</th><th></th>
	</tr>
<?php 
$page = $this->news_model->get_all_news();
if($page != false) {
$no = 1;
foreach ($page as $p) {
?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $p->title; ?></td>
		<td><?php echo $p->url; ?></td>
		<td><a data-ajax="false" href="<?php echo site_url('admin/edit_news/' . $p->id_news) ?>">Edit</a> || <a data-ajax="false" href="<?php echo site_url('admin/delete_news/' . $p->id_news) ?>">Hapus</a></td>
	</tr>
	<?php
}
}
?>
</table>