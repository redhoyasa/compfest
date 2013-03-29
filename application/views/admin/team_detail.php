<?php 
$id_team = $this->uri->segment('3'); 
$td = $this->kompetisi_model->get_team($id_team);
?>
<h1>Competition: <?php echo $td->team_name; ?></h1>
<hr>
<h3>Team Detail</h3>
<p style="font-size:18px;line-height: 1.5;">
Competition : <?php echo $this->kompetisi_model->getEventById($td->id_event)->event_name; ?> <br>
Register Time : <?php echo $td->register_time; ?><br>
Payment : <?php if($td->payment == '') { ?>
	Belum melakukan pembayaran <br>
	<?php } else { ?>
		<a href="<?php echo site_url('uploads/payment') .'/'. $td->payment; ?>" target="_blank">View</a><br>
	<?php } ?>
Status : <?php echo $this->status->team_status($td->team_status); ?><br>
Change Status:
	<a class="btn btn-primary" data-role="none" href="<?php echo site_url('admin/team_update') .'/'. $id_team .'/2'; ?>"><i class="icon-ok"></i> Accept</a>
	<a class="btn btn-warning" data-role="none" href="<?php echo site_url('admin/team_update') .'/'. $id_team .'/3'; ?>"><i class="icon-repeat"></i> Decline</a>
	<a class="btn btn-danger" data-role="none" href="<?php echo site_url('admin/team_delete') .'/'. $id_team .'/'. $td->id_event; ?>"><i class="icon-remove"></i> Delete</a>
</p>
<hr>
<h3>Member</h3>
<table class="table table-striped">
	<tr>
		<th>Role</th><th>Nama</th><th>Email</th><th>Phone</th><th>Photo</th><th>ID Card</th>
	</tr>
<?php 
$team = $this->member_model->get_all_member($id_team);

if($team != false) {
foreach ($team as $t) {
?>
	<tr>
		<?php if($t->register_role == 1)  { ?>
			<td>Ketua Tim</td>
		<?php } else if($t->register_role == 9)  { ?>
			<td>Pembimbing</td>
		<?php } else { ?>
			<td>Anggota</td>
		<?php } ?>


		<td><?php echo $t->register_name; ?></td>
		<td><?php echo $t->register_email; ?></td>
		<td><?php echo $t->register_phone; ?></td>
		<?php if($t->register_photo == '')  { ?>
			<td>-</td>
		<?php } else { ?>
			<td><a href="<?php echo site_url('uploads/photo') .'/'. $t->register_photo; ?>" target="_blank">View</a></td>
		<?php } ?>

		<?php if($t->register_id == '')  { ?>
			<td>-</td>
		<?php } else { ?>
			<td><a href="<?php echo site_url('uploads/idcard') .'/'. $t->register_id; ?>" target="_blank">View</a></td>
		<?php } ?>
		
	</tr>
	<?php
}
}
?>
</table>