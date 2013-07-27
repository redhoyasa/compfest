<?php 
    $team = $this->users_model->get_login_info($this->session->userdata('email'));
    $event = $this->kompetisi_model->getEventById($team->id_event);
    $nav['selected'] = 8;
?>
<style>#content {overflow:hidden!important;	border : 0!important;
	background : transparent!important;}</style>
<div style="height:50px;">&nbsp;</div>
<div class="wrapper-dash">

<?php 
$nav['team'] = $team;
$this->load->view('member/dashboard_navigation',$nav); 
?>

<div class="row-fluid">
    <div class="span12 well">
    
    <?php echo form_error('nama_aplikasi'); ?>
    <?php echo form_error('latar_ide'); ?>
    <?php echo form_error('tujuan_aplikasi'); ?>
    <h3>Ide Aplikasi</h3>
    
    <?php 
    
    $team = $this->users_model->get_login_info($this->session->userdata('email'));
		
    $event = $this->kompetisi_model->getEventById($team->id_event);
    
    ?>
    
    <form class="form-horizontal" method="post" action="<?php echo site_url('member/update_apps_idea'); ?>" enctype="multipart/form-data">
    
    	<div class="control-group">
    		<label class="control-label">Kategori ide</label>
		<div class="controls">
		<input type="checkbox" name="categories[]" value="1" <?php if (strpos($team->idea_cat_mit,'1') !== false) { echo 'checked'; } ?> <?php if($team->idea_fix >= 1) echo "disabled"?> /> Transportation </br>
		<input type="checkbox" name="categories[]" value="2" <?php if (strpos($team->idea_cat_mit,'2') !== false) { echo 'checked'; } ?> <?php if($team->idea_fix >= 1) echo "disabled"?>/> Environment </br>
		<input type="checkbox" name="categories[]" value="3" <?php if (strpos($team->idea_cat_mit,'3') !== false) { echo 'checked'; } ?> <?php if($team->idea_fix >= 1) echo "disabled"?>/> Health </br>
		<input type="checkbox" name="categories[]" value="4" <?php if (strpos($team->idea_cat_mit,'4') !== false) { echo 'checked'; } ?> <?php if($team->idea_fix >= 1) echo "disabled"?>/> I Love My City </br>
		</div>
    	</div>
    
        <div class="control-group">
            <label class="control-label">Nama Aplikasi</label>
            <div class="controls">
            <input type="text" name="nama_aplikasi" maxlength="50" placeholder="Maksimal 50 karakter" style="width: 350px;" value="<?php echo set_value('nama_aplikasi',$team->name_mit); ?>" <?php if($team->idea_fix >= 1) echo "disabled"?> >   
            
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label">Latar Belakang Ide</label>
            <div class="controls">
            <textarea name="latar_ide" maxlength="750" cols="50" rows="30" style="width: 350px; height: 200px; resize= none;" placeholder="Maksimal 750 karakter" <?php if($team->idea_fix >= 1) echo "disabled"?>><?php echo set_value('latar_ide',$team->back_mit); ?></textarea>   
            
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label">Tujuan dan Deskripsi Aplikasi</label>
            <div class="controls">
            <textarea name="tujuan_aplikasi" maxlength="1500" cols="50" rows="30" style="width: 350px; height: 200px; resize= none;" placeholder="Maksimal 1500 karakter" <?php if($team->idea_fix >= 1) echo "disabled"?>><?php echo set_value('tujuan_aplikasi',$team->purpose_mit); ?></textarea>
            
            </div>
        </div>
        
        
        
    
    </div>
    
    <input type="submit" value="Simpan" class="btn btn-xlarge btn-danger">
    </form>
</div>



<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">