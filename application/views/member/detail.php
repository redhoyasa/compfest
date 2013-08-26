<?php 
    $team = $this->users_model->get_login_info($this->session->userdata('email'));
    $event = $this->kompetisi_model->getEventById($team->id_event);
    $nav['selected'] = 2;
?>
<style>#content {overflow:hidden!important;	border : 0!important;
	background : transparent!important;}
		.alert-warning {
		font-size : 14px!important;
	}
</style>
<div style="height:50px;">&nbsp;</div>
<div class="wrapper-dash">

<?php 
$nav['team'] = $team;
$this->load->view('member/dashboard_navigation',$nav); 
?>

<?php if(count($this->status->team_status()) == 0 && $team->team_status == 0) { ?>
  <div class="row-fluid">
    <span class="alert alert-success span12">
        Data dan berkas telah lengkap. Silahkan melakukan konfirmasi di halaman <a href="<?php echo site_url('member/dashboard'); ?>">depan</a>
    </span>
  </div>
<?php } else { ?>
      <?php foreach ($this->status->team_status() as $r) { ?>
        <div class="row-fluid">
          <span class="alert alert-danger span12"><?php echo $r; ?></span>
        </div>
      <?php } ?>
<?php } ?>

<div class="row-fluid">
<!-- Pembimbing -->
<?php 
    if($team->id_event == 1 || $team->id_event == 2 || $team->id_event == 3 || $team->id_event == 4) {
		$pembimbing = $this->member_model->get_member($team->id_team,'9');
		if($pembimbing == false) {
?>
			<div class="span6 well">
			<h3>Belum memasukan identitas pembimbing</h3>
			</div>
<?php
		} else {
?>
			<div class="span6 well form-horizontal">
				<h3>Pembimbing</h3>
				<div class="control-group">
				<label class="control-label">Nama</label>
				<div class="controls">
				<input type="text" placeholder="<?php echo $pembimbing->register_name; ?>" disabled>
				</div>
				</div>

				<div class="control-group">
				<label class="control-label">Email</label>
				<div class="controls">
				 <input type="text" placeholder="<?php echo $pembimbing->register_email; ?>" disabled>
				</div>
				</div>

				<div class="control-group">
				<label class="control-label">Nomor Telepon</label>
				<div class="controls">
				 <input type="text" placeholder="<?php echo $pembimbing->register_phone; ?>" disabled>
				</div>
				</div>
			</div>
<?php 
		} 
	}
?>



<!-- Anggota -->
<?php 
    $members = $this->member_model->get_all_member($team->id_team);
    $ii = 0;
    foreach($members as $r) {
    $ii++;
    if($r->register_role == 9) {
        continue;
    }
?>
    <div class="span6 well form-horizontal">
    <?php if($r->register_role != 1) { ?>
        <h3><?php echo $this->status->detail_role($r->register_role); ?></h3>
    <?php } else { ?>
        <h3><?php echo $this->status->detail_role(1); ?></h3>
    <?php } ?>

    <?php if($r->register_name == '') { ?>
        <hr>
        <span class="alert span12">Tidak ada</span>
    <?php } else { ?> 

        
        <div class="control-group">
        <label class="control-label">Nama</label>
        <div class="controls">
        <input type="text" placeholder="<?php echo $r->register_name; ?>" disabled>
        </div>
        </div>

        <div class="control-group">
        <label class="control-label">Email</label>
        <div class="controls">
         <input type="text" placeholder="<?php echo $r->register_email; ?>" disabled>
        </div>
        </div>

        <div class="control-group">
        <label class="control-label">Nomor Telepon</label>
        <div class="controls">
         <input type="text" placeholder="<?php echo $r->register_phone; ?>" disabled>
        </div>
        </div>
        
        <?php if($team->id_event == 5) {?>
	<div class="control-group">
    	<label class="control-label">Posisi</label>
    	<div class="controls">
      	<input type="text" placeholder="<?php echo $this->status->oac_position($team->role_oac); ?>" disabled>
    	</div>
    	</div>
    	<?php } ?>

        <div class="control-group">
        <label class="control-label">Kartu Identitas</label>
        <div class="controls">
        <?php if($r->register_id == '') { ?>
            <span class="alert alert-warning">Belum mengunggah kartu identitas</span>       
        <?php } else { ?>
            <img class="img-polaroid" src="<?php echo base_url(); ?>uploads/idcard/<?php echo $r->register_id; ?>" width="200">
        <?php } ?>
            <?php if($team->team_status == 0) { ?>
            <hr>
            <form method="post" action="<?php echo site_url('member/idcard'); ?>" enctype="multipart/form-data">
                <input type="file" name="idcard">
                <input type="hidden" value="<?php echo $r->register_role; ?>" name="role">
                <input type="submit" value="Unggah" class="btn btn-info">
            </form>
            <?php } ?>
        </div>
        </div>
		
	<?php if($team->id_event != 1 && $team->id_event != 2 && $team->id_event != 3 && $team->id_event != 4 && $team->id_event != 5) { ?>
        <div class="control-group">
        <label class="control-label">Foto</label>
        <div class="controls">
        <?php if($r->register_photo == '') { ?>
            <span class="alert alert-warning">Belum mengunggah foto, silahkan unggah</span>
        <?php } else { ?>
            <img class="img-polaroid" src="<?php echo base_url(); ?>uploads/photo/<?php echo $r->register_photo; ?>" width="200">
        <?php } ?>
            <?php if($team->team_status == 0) { ?>
            <hr>
            <form method="post" action="<?php echo site_url('member/photo'); ?>" enctype="multipart/form-data">
                <input type="file" name="photo">
                <input type="hidden" value="<?php echo $r->register_role; ?>" name="role">
                <input type="submit" value="Unggah" class="btn btn-info">
            </form>
            <?php } ?>
        </div>
        </div>
		<?php } ?>
    <?php } ?>
    </div>
    <?php if($ii % 2 == 1) { ?>
        </div>
        <div class="row-fluid">
    <?php } ?>
<?php } ?>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" media="screen">	