<?php 
$id_event = $this->uri->segment('3'); 
?>
<h1>Competition: <?php echo $this->kompetisi_model->getEventById($id_event)->event_name; ?></h1>

<table class="table table-striped">
	<tr>
		<th>No</th><th style="width:200px;">Team</th><th>Email</th><th>Status</th><th>Institution</th><th></th>
	</tr>
<?php 
$team = $this->kompetisi_model->get_team_by_event($id_event);
if($team != false) {
$no = 1;
foreach ($team as $t) {
?>
	<tr>
		<td><?php echo $no++; ?></td>
		<?php if(strlen($t->team_name) > 15) {?>
		<td><?php echo substr($t->team_name,0,20); ?> ...</td>
		<?php } else { ?>
		<td><?php echo $t->team_name; ?></td>
		<?php } ?>
		<td><?php echo $t->email; ?></td>
		<td><?php echo $this->status->team_resume_status($t->team_status); ?></td>
		<td><?php echo $t->institution; ?></td>
		<td><a data-ajax="false" href="<?php echo site_url('admin/competition_team/' . $t->id_team) ?>">Detail</a></td>
	</tr>
	<?php
}
}
?>
</table>