<?php 
    $team = $this->users_model->get_login_info($this->session->userdata('email'));
    $nav['selected'] = 9;
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
    <div class="span12 well" style="text-align:center;">
    <?php
    	if ($team->id_event == 1) {
    		echo '<h1 class="alert alert-info">Unggah Surat Keterangan Mahasiswa Aktif dengan format zip/rar/docx/doc/pdf dengan ukuran maks. 8MB</h1>';	
    	} else echo '<h1 class="alert alert-info">Unggah Surat Keterangan Belum Lulus Aktif dengan format zip/rar/docx/doc/pdf dengan ukuran maks. 8MB</h1>';
    ?>
    <?php if($this->uri->segment('3') == 'fail') { ?>
        <span class="alert alert-danger">Gagal mengunggah surat, pastikan file berformat zip/rar/docx/doc/pdf dengan ukuran maks. 8MB</span>
        <hr>
    <?php } ?>
    <form class="form-horizontal" method="post" action="<?php echo site_url('member/cpcproof'); ?>" enctype="multipart/form-data">
        <br>
        <?php 
            $td = $this->kompetisi_model->get_team($this->users_model->get_login_info($this->session->userdata('email'))->id_team);
            if($td->cpc_surat != '') {
        ?>
            <span class="alert alert-success">Tim anda sudah mengunggah surat keterangan.</span>
            <hr>
            <a target="_blank" href="<?php echo  site_url('uploads/surat') .'/'. $td->cpc_surat; ?>">Unduh surat</a>
            <hr>
            
        <?php } ?>

        <?php 
            $team = $this->users_model->get_login_info($this->session->userdata('email'));
            if($team->team_status == 0) { 
        ?>
        <span class="alert">Unggah Ulang?</span>
        <input type="file" name="cpc_surat">
        <hr>
        <input type="submit" value="Unggah" class="btn btn-danger">
        <?php } ?>
    </form>
    </div>
</div>

<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">