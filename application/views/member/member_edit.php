<?php 
    $team = $this->users_model->get_login_info($this->session->userdata('email'));
    $event = $this->kompetisi_model->getEventById($team->id_event);
    $nav['selected'] = 3;
?>
<style>#content {overflow:hidden!important;	border : 0!important;
	background : transparent!important;}
</style>
<div style="height:50px;">&nbsp;</div>
<div class="wrapper-dash">

<?php 
$nav['team'] = $team;
$this->load->view('member/dashboard_navigation',$nav); 
?>

<div class="row-fluid">
	<span class="span12 alert">Kosongkan nama untuk menghapus anggota.</span>
</div>

<form class="form-horizontal" method="post" action="<?php echo site_url('member/updatemember'); ?>">


<div class="row-fluid">
<!-- Pembimbing -->
<?php 
	if($team->id_event == 1 || $team->id_event == 2 || $team->id_event == 3 || $team->id_event == 4) {
		$pembimbing = $this->member_model->get_member($team->id_team,'9');
		if($pembimbing == true) {
?>
			<div class="span6 well">

				<h3>Pembimbing</h3>
				<div class="control-group">
				<label class="control-label">Nama</label>
				<div class="controls">
				<input type="text" value="<?php echo set_value('register_name_p',$pembimbing->register_name); ?>" name="register_name_p">
				</div>
				</div>

				<div class="control-group">
				<label class="control-label">Email</label>
				<div class="controls">
				 <input type="text" value="<?php echo set_value('register_email_p',$pembimbing->register_email); ?>" name="register_email_p">
				</div>
				</div>

				<div class="control-group">
				<label class="control-label">Nomor Telepon</label>
				<div class="controls">
				 <input type="text" value="<?php echo set_value('register_phone_p',$pembimbing->register_phone); ?>" name="register_phone_p">
				</div>
				</div>
				
			</div>
<?php
		} else {
?>
			<div class="span6 well">

				<h3>Pembimbing</h3>
				<div class="control-group">
				<label class="control-label">Nama</label>
				<div class="controls">
				<input type="text" value="" name="register_name_p">
				</div>
				</div>

				<div class="control-group">
				<label class="control-label">Email</label>
				<div class="controls">
				 <input type="text" value="" name="register_email_p">
				 <?php echo form_error('register_email_p'); ?>
				</div>
				</div>

				<div class="control-group">
				<label class="control-label">Nomor Telepon</label>
				<div class="controls">
				 <input type="text" value="" name="register_phone_p">
				 <?php echo form_error('register_phone_p'); ?>
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
        
    if($members) {

        $ii = 0;
        foreach($members as $r) {
            $ii++;
            if($r->register_role == 9) {
                continue;
            }
?>
            <div class="span6 well">

                <?php if($r->register_role != 1) { ?>
                    <h3><?php echo $this->status->detail_role($r->register_role); ?></h3>
                <?php } else { ?>
                    <h3><?php echo $this->status->detail_role(1); ?></h3>
                <?php } ?>

                <div class="control-group">
                <label class="control-label">Nama</label>
                <div class="controls">
                    <input type="text" value="<?php echo set_value('register_name_' . $ii,$r->register_name); ?>" name="register_name_<?php echo $ii; ?>">
                    <?php echo form_error('register_name_' . $ii); ?>
                </div>
                </div>

                <div class="control-group">
                <label class="control-label">Email</label>
                <div class="controls">
                    <input type="text" value="<?php echo set_value('register_email_' . $ii, $r->register_email); ?>" name="register_email_<?php echo $ii; ?>">
                    <?php echo form_error('register_email_' . $ii); ?>
                </div>
                </div>

                <div class="control-group">
                <label class="control-label">Nomor Telepon</label>
                <div class="controls">
                    <input type="text" value="<?php echo set_value('register_phone_' . $ii, $r->register_phone); ?>" name="register_phone_<?php echo $ii; ?>">
                    <?php echo form_error('register_phone_' . $ii); ?>
                </div>
                </div>
                
                <?php if($team->id_event == 5) {?>
				<div class="control-group">
			    	<label class="control-label">Posisi</label>
			    	<div class="controls">
			      	<select name="role_oac">
			      		<option value="0" <?php if($team->role_oac == 0) echo 'selected';  ?>>---</option>
			      		<option value="1" <?php if($team->role_oac == 1) echo 'selected';  ?>>Animator</option>
			      		<option value="2" <?php if($team->role_oac == 2) echo 'selected';  ?>>Modeler</option>
			      		<option value="3" <?php if($team->role_oac == 3) echo 'selected';  ?>>Designer & Ilustrator</option>
			      		<option value="4" <?php if($team->role_oac == 4) echo 'selected';  ?>>Sound Engineer</option>
			      	</select>
			    	</div>
			    </div>
				<?php } ?>
            </div>
            <?php if($ii % 2 == 1) { ?>
                </div>
                <div class="row-fluid">
            <?php } ?>
        <?php } ?>
    <?php } else { ?>
        <?php 
            $team = $this->users_model->get_login_info($this->session->userdata('email'));
            $event = $this->kompetisi_model->getEventById($team->id_event);

            for ($r = 1; $r <= $event->members; $r++) {
        ?>
        <div class="span6 well">

            <?php if($r != 1) { ?>
            <h3><?php echo $this->status->detail_role($r); ?></h3>
            <?php } else { ?>
            <h3><?php echo $this->status->detail_role(1); ?></h3>
            <?php } ?>
            <div class="control-group">
            <label class="control-label">Nama</label>
            <div class="controls">
            <input type="text" name="register_name_<?php echo $r; ?>">   
            <?php echo form_error('register_name_' . $r); ?>
            </div>
            </div>

            <div class="control-group">
            <label class="control-label">Email</label>
            <div class="controls">
            <input type="text" name="register_email_<?php echo $r; ?>">
            <?php echo form_error('register_email_' . $r); ?>
            </div>
            </div>

            <div class="control-group">
            <label class="control-label">Nomor Telepon</label>
            <div class="controls">
            <input type="text" name="register_phone_<?php echo $r; ?>">
            <?php echo form_error('register_phone_' . $r); ?>
            </div>
            </div>
			
			<?php if($team->id_event == 5) {?>
				<div class="control-group">
			    	<label class="control-label">Posisi</label>
			    	<div class="controls">
			      	<select name="role_oac">
			      		<option value="0">---</option>
			      		<option value="1">Animator</option>
			      		<option value="2">Modeller</option>
			      		<option value="3">Designer & Ilustrator</option>
			      		<option value="4">Sound Engineer</option>
			      	</select>
			    	</div>
			    </div>
			<?php } ?>
        </div>
            <?php if($r % 2 == 1) { ?>
                </div>
                <div class="row-fluid">
            <?php } ?>
        <?php } ?>
    <?php } ?>
</div>
    <input type="submit" value="Simpan" class="btn btn-xlarge btn-danger">
</form>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" media="screen">