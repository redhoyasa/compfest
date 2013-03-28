<?php if($this->uri->segment(3))  { ?>
	<h1>Seminar <?php echo $this->seminar_model->getSeminarById($this->uri->segment(3))->name ?></h1>
<?php } else { ?>
	<h1>Semua Seminar</h1>
<?php } ?>

<table class="table table-striped">
	<tr>
		<th>Nama</th><th>Email</th><th>Status</th><th></th>
	</tr>
<?php 
if($this->uri->segment(3))  {
 	$seminar = $this->seminar_model->get_seminar_register($this->uri->segment(3));
} else {
	$seminar = $this->seminar_model->get_seminar_register();
}
foreach ($seminar as $s) {
?>
	<tr>
		<td><?php echo $s->name; ?></td><td><?php echo $s->email; ?></td><td><?php echo $this->status->seminar_status($s->status); ?></td><td><a href="<?php echo site_url('admin/seminar_user/') .'/'. $s->id_seminar_user; ?>">Detail</a></td>
	</tr>
<?php
	}
?>
</table>