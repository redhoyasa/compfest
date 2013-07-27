<?php 
    $team = $this->users_model->get_login_info($this->session->userdata('email'));
    $event = $this->kompetisi_model->getEventById($team->id_event);
    $nav['selected'] = 8;
    $nav['team'] = $team;
?>
<style>#content {overflow:hidden!important;	border : 0!important;
	background : transparent!important;}</style>
<div style="height:50px;">&nbsp;</div>
<div class="wrapper-dash">

<?php $this->load->view('member/dashboard_navigation',$nav); ?>

<div class="row-fluid">
    <div class="span12 well">
    
    <?php echo form_error('nama_game'); ?>
    <?php echo form_error('latar_ide'); ?>
    <?php echo form_error('tujuan_game'); ?>
    <h3>Ide Aplikasi</h3>
    
    <?php 
    
    $team = $this->users_model->get_login_info($this->session->userdata('email'));
		
    $event = $this->kompetisi_model->getEventById($team->id_event);
    
    ?>
    
    <form class="form-horizontal" method="post" action="<?php echo site_url('member/update_game_idea'); ?>" enctype="multipart/form-data">
    
    	<div class="control-group">
    		<label class="control-label">Kategori ide</label>
		<div class="controls">
		<input type="checkbox" name="categories[]" value="1" <?php if (strpos($team->idea_cat_edu,'1') !== false) { echo 'checked'; } ?> <?php if($team->idea_fix >= 1) echo "disabled"?> /> Kids Education </br>
		<input type="checkbox" name="categories[]" value="2" <?php if (strpos($team->idea_cat_edu,'2') !== false) { echo 'checked'; } ?> <?php if($team->idea_fix >= 1) echo "disabled"?> /> Math & Science Education</br>
		<input type="checkbox" name="categories[]" value="3" <?php if (strpos($team->idea_cat_edu,'3') !== false) { echo 'checked'; } ?> <?php if($team->idea_fix >= 1) echo "disabled"?> /> Linguistic Education </br>
		<input type="checkbox" name="categories[]" value="4" <?php if (strpos($team->idea_cat_edu,'4') !== false) { echo 'checked'; } ?> <?php if($team->idea_fix >= 1) echo "disabled"?> /> General Knowledge </br>
		<input type="checkbox" name="categories[]" value="5" <?php if (strpos($team->idea_cat_edu,'5') !== false) { echo 'checked'; } ?> <?php if($team->idea_fix >= 1) echo "disabled"?> /> Creativity Development </br>
		</div>
    	</div>
    
        <div class="control-group">
            <label class="control-label">Nama Game</label>
            <div class="controls">
            <input type="text" name="nama_game" maxlength="50" placeholder="Maksimal 50 karakter" style="width: 350px;" value="<?php echo set_value('nama_aplikasi',$team->name_edu); ?>" <?php if($team->idea_fix >= 1) echo "disabled"?> >   
            
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label">Latar Belakang Ide</label>
            <div class="controls">
            <textarea name="latar_ide" maxlength="750" cols="50" rows="30" style="width: 350px; height: 200px; resize= none;" placeholder="Maksimal 750 karakter" <?php if($team->idea_fix >= 1) echo "disabled"?>><?php echo set_value('latar_ide',$team->back_edu); ?></textarea>   
            
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label">Deskripsi Game</label>
            <div class="controls">
            <textarea name="tujuan_game" maxlength="1500" cols="50" rows="30" style="width: 350px; height: 200px; resize= none;" placeholder="Maksimal 1500 karakter" <?php if($team->idea_fix >= 1) echo "disabled"?>><?php echo set_value('tujuan_aplikasi',$team->purpose_edu); ?></textarea>
            
            </div>
        </div>
        
        

    </div>
    
    <input type="submit" value="Simpan" class="btn btn-xlarge btn-danger">
    </form>
</div>



<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">