<h1>Page</h1>
<hr>
<a data-ajax="false" href="<?php echo site_url('admin/add_page') ?>" data-role="none" data-inline="true" class="btn btn-primary">Tambah Baru</a>
<hr>

<table class="table table-striped">
	<tr>
		<th>No</th><th>Title</th><th>Position</th><th>URL</th><th></th>
	</tr>
<?php 
$page = $this->page_model->get_all_page(0);
$no = 1;
if($page != false) {
foreach ($page as $p) {
?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $p->title; ?></td>
		<td><?php echo $p->position; ?></td>
		<td><?php echo $p->url; ?></td>
		<td><a data-ajax="false" href="<?php echo site_url('admin/edit_page/' . $p->id_page) ?>">Edit</a> || <a data-ajax="false" href="<?php echo site_url('admin/delete_page/' . $p->id_page) ?>">Hapus</a></td>
	</tr>
	<?php
	
	$page2 = $this->page_model->get_all_page($p->id_page);
	if($page2 != false) {
		$no2 = 1;
		foreach ($page2 as $p2) {
	?>
		<tr>
			<td><?php echo "--> " . $no2++; ?></td>
			<td><?php echo "--> " . $p2->title; ?></td>
			<td><?php echo "--> " .$p2->position; ?></td>
			<td><?php echo "--> " .$p2->url; ?></td>
			<td><a data-ajax="false" href="<?php echo site_url('admin/edit_page/' . $p2->id_page) ?>">Edit</a> || <a data-ajax="false" href="<?php echo site_url('admin/delete_page/' . $p2->id_page) ?>">Hapus</a></td>
		</tr>
	<?php
		}
	}
}
}
?>
</table>