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
Status : <?php echo $this->status->team_resume_status($td->team_status); ?><br>
Change Status:
	<a class="btn btn-primary" data-role="none" href="<?php echo site_url('admin/team_update') .'/'. $id_team .'/2'; ?>"><i class="icon-ok"></i> Accept</a>
	<a class="btn btn-warning" data-role="none" href="<?php echo site_url('admin/team_update') .'/'. $id_team .'/1'; ?>"><i class="icon-repeat"></i> Decline</a>
	<a class="btn btn-inverse" data-role="none" href="<?php echo site_url('admin/team_update') .'/'. $id_team .'/0'; ?>"><i class="icon-edit"></i> Not Complete</a>
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
} //end foreach

?>
</table>


<?php 
//khusus peserta mobile it solution
if ($td->id_event == 6){?>
<h3>Ide Aplikasi</h3>
<p style="font-size:18px;line-height: 1.5;">
<b>Nama Aplikasi</b> : <?php echo $td->name_mit; ?>
</p>

<p style="font-size:18px;line-height: 1.5;">
<b>Latar Belakang Ide</b> :<br/> <?php echo $td->back_mit; ?>
</p>

<p style="font-size:18px;line-height: 1.5;">
<b>Tujuan Aplikasi</b> :<br/> <?php echo $td->purpose_mit; ?>
</p>

<p style="font-size:18px;line-height: 1.5;">
<b>Kategori</b> :<br/>
</p>
<p>
<?php 
//parsing string buat dapetin kategori
$n = (strlen($td->idea_cat_mit)-1)/4; 
$temp = str_split($td->idea_cat_mit);
$this->load->library('status');
for ($i = 2;$n > 0;$n--){
echo '<a class="btn btn-primary" data-role="none">'.$this->status->mobile_category($temp[$i]).'</a>&nbsp;';
$i+=4;
}?>
</p>

<?php 
//muncul kalau peserta meminta finalisasi ide
if ($td->idea_fix == 1){?>
<p style="font-size:18px;line-height: 1.5;">
Tim ini meminta konfirmasi finalisasi ide:
	<a class="btn btn-primary" data-role="none" href="<?php echo site_url('admin/idea_update') .'/'. $id_team .'/2'; ?>"><i class="icon-ok"></i> Terima</a>
	<a class="btn btn-warning" data-role="none" href="<?php echo site_url('admin/idea_update') .'/'. $id_team .'/0'; ?>"><i class="icon-repeat"></i> Tolak</a>
</p>
<?php } else if ($td->idea_fix == 2){?>
	Ide sudah final
	<a class="btn btn-primary" data-role="none" href="<?php echo site_url('admin/idea_update') .'/'. $id_team .'/0'; ?>"><i class="icon-ok"></i> Batal</a>
<?php } ?>
<?php } // end inner if ?>


<?php 
//khusus peserta edugames
if ($td->id_event == 7){ ?>
<h3>Ide Game</h3>
<p style="font-size:18px;line-height: 1.5;">
<b>Nama Game</b> : <?php echo $td->name_edu; ?>
</p>

<p style="font-size:18px;line-height: 1.5;">
<b>Latar Belakang Ide</b> :<br/> <?php echo $td->back_edu; ?>
</p>

<p style="font-size:18px;line-height: 1.5;">
<b>Tujuan Game</b> :<br/> <?php echo $td->purpose_edu; ?>
</p>

<p style="font-size:18px;line-height: 1.5;">
<b>Kategori</b> :<br/>
</p>
<p>
<?php 
//parsing string buat dapetin kategori
$n = (strlen($td->idea_cat_edu)-1)/4; 
$temp = str_split($td->idea_cat_edu);
$this->load->library('status');
for ($i = 2;$n > 0;$n--){
echo '<a class="btn btn-primary" data-role="none">'.$this->status->edugames_category($temp[$i]).'</a>&nbsp;';
$i+=4;
}?>
</p>

<?php 
//muncul kalau peserta meminta finalisasi ide
if ($td->idea_fix == 1){?>
<p style="font-size:18px;line-height: 1.5;">
Tim ini meminta konfirmasi finalisasi ide:
	<a class="btn btn-primary" data-role="none" href="<?php echo site_url('admin/idea_update') .'/'. $id_team .'/2'; ?>"><i class="icon-ok"></i> Terima</a>
	<a class="btn btn-warning" data-role="none" href="<?php echo site_url('admin/idea_update') .'/'. $id_team .'/0'; ?>"><i class="icon-repeat"></i> Tolak</a>
</p>
<?php } else if($td->idea_fix == 2){?>
	Ide sudah final
	<a class="btn btn-primary" data-role="none" href="<?php echo site_url('admin/idea_update') .'/'. $id_team .'/0'; ?>"><i class="icon-ok"></i> Batal</a>
<?php } ?>
<?php } // end inner if 
?>


<?php }else{ echo "</table>"; } //end outer if 
?>

<?php if($td->id_event == 5) { ?>
<h4>Data Peserta OAC</h4>
Role : <?php echo $this->status->oac_position($td->role_oac) . "<br>"; ?>

CV : <?php if($td->cv_oac == '') { ?>
	Belum mengunggah CV<br>
	<?php } else { ?>
		<a href="<?php echo site_url('uploads/cv') .'/'. $td->cv_oac; ?>" target="_blank">View</a><br>
	<?php } ?>
Portofolio : <?php if($td->pf_oac == '') { ?>
	Belum mengunggah Portofolio<br>
	<?php } else { ?>
		<a href="<?php echo site_url('uploads/pf') .'/'. $td->pf_oac; ?>" target="_blank">View</a><br>
	<?php } ?>

<?php } ?>

<?php if($td->id_event == 1 || $td->id_event == 2) { ?>
<h4>Kelengkapan Peserta</h4>
Surat Keterangan : <?php if($td->cpc_surat == '') { ?>
	Belum mengunggah Surat Keterangan<br>
	<?php } else { ?>
		<a href="<?php echo site_url('uploads/surat') .'/'. $td->cpc_surat; ?>" target="_blank">View</a><br>
	<?php } ?>

<?php } ?>