<?php
	$id_user = $this->uri->segment(3);
	$user = $this->seminar_model->getUserById($id_user);
?>

<form class="form-horizontal" method="post" action="#">
	<h3>General Information</h3>

	<div class="control-group">
		<label class="control-label">Nama</label>
		<div class="controls">
			<input type="text" placeholder="<?php echo $user->name ?>" disabled data-role="none">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Email</label>
		<div class="controls">
			<input type="text" placeholder="<?php echo $user->email ?>" disabled data-role="none">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Nomor Identitas</label>
		<div class="controls">
			<input type="text" placeholder="<?php echo $user->id_no ?>" disabled data-role="none">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Phone</label>
		<div class="controls">
			<input type="text" placeholder="<?php echo $user->phone ?>" disabled data-role="none">
		</div>
	</div>

	<h3>Motivation</h3>

	<?php 
		$seminar = $this->seminar_model->getSeminarUserById($id_user);
		foreach ($seminar as $s) {
	?>

	<div class="control-group">
		<label class="control-label"><?php echo $this->seminar_model->getSeminarById($s->id_seminar)->name; ?></label>
		<div class="controls">
			<textarea disabled><?php echo $s->motivation; ?></textarea>
		</div>
	</div>

	<?php } ?>

	<div class="control-group">
		<div class="controls">
		<?php if($user->status == 1) { ?>
			<a data-ajax="false" class="btn btn-primary" data-role="none" href="<?php echo site_url('admin/update_seminar_user') .'/'. $id_user .'/2'; ?>"><i class="icon-ok"></i> Accept</a>
		<?php } else { ?>
			<?php if($user->status == 3) { ?>
				<span class="alert alert-success">Peserta mengkonfirmasi kehadirannya</span>
			<?php }  else if($user->status == 4) { ?>
				<span class="alert alert-danger">Peserta menolak kehadirannya</span>
			<?php }else if($user->status == 2) { ?>
				<span class="alert">Menunggu Konfirmasi Peserta</span>
			<?php } ?>
			<a class="btn btn-danger" data-role="none" href="<?php echo site_url('admin/update_seminar_user') .'/'. $id_user .'/1'; ?>"><i class="icon-ok"></i> Reject</a>
		<?php } ?>
		</div>
	</div>
</form>
