<?php 
    $team = $this->users_model->get_login_info($this->session->userdata('email'));
    $event = $this->kompetisi_model->getEventById($team->id_event);
?>
<style>#content {overflow:hidden!important;	border : 0!important;
	background : transparent!important;}</style>
<div style="height:50px;">&nbsp;</div>
<div class="wrapper-dash">

<?php 
$nav['team'] = $team;
$nav['selected'] = 7;
$this->load->view('member/dashboard_navigation',$nav); 
?>

<div class="row-fluid">
    <div class="span12 well" style="text-align:center;">
    <?php if($this->uri->segment('3') == 'fail') { ?>
        <span class="alert alert-danger">Gagal mengunggah dokumen CV, pastikan file berformat pdf dengan ukuran maks. 2MB</span>
        <hr>
    <?php } ?>
    <form class="form-horizontal" method="post" action="<?php echo site_url('member/cvoac'); ?>" enctype="multipart/form-data">
        <br>
        <?php 
            $td = $this->kompetisi_model->get_team($this->users_model->get_login_info($this->session->userdata('email'))->id_team);
            if($td->cv_oac != '') {
        ?>
            <span class="alert alert-success">Sudah mengunggah CV</span>
            <hr>
            <a href="<?php echo  site_url('uploads/cv') .'/'. $td->cv_oac; ?>">Unduh CV</a>
            <hr>
            <span class="alert">Unggah Ulang?</span>
        <?php } else { ?>
		<span class="alert alert-danger">Belum mengunggah CV</span>
	<?php } ?>

        <?php 
            $team = $this->users_model->get_login_info($this->session->userdata('email'));
            if($team->team_status == 0) { 
        ?>
        <input type="file" name="cvoac">
        <hr>
        <p>
        CV dalam bentuk pdf dengan ukuran maks. 2MB<br>
        </p>
        <br>
        <input type="submit" value="Unggah CV" class="btn btn-danger">
        <?php } ?>
    </form>
    </div>
</div>


<div class="row-fluid">
    <div class="span12 well" style="text-align:center;">
    <?php if($this->uri->segment('3') == 'fail2') { ?>
        <span class="alert alert-danger">Gagal mengunggah dokumen portofolio, pastikan file berformat pdf/doc/docx/txt/zip dengan ukuran maks. 2MB</span>
        <hr>
    <?php } ?>
    <form class="form-horizontal" method="post" action="<?php echo site_url('member/pfoac'); ?>" enctype="multipart/form-data">
        <br>
        <?php 
            $td = $this->kompetisi_model->get_team($this->users_model->get_login_info($this->session->userdata('email'))->id_team);
            if($td->pf_oac != '') {
        ?>
            <span class="alert alert-success">Sudah mengunggah Portofolio</span>
            <hr>
            <a href="<?php echo  site_url('uploads/pf') .'/'. $td->pf_oac; ?>">Unduh portofolio</a>
            <hr>
            <span class="alert">Unggah Ulang?</span>
        <?php } else { ?>
		<span class="alert alert-danger">Belum mengunggah Portofolio</span>
	<?php } ?>
		
        <?php 
            $team = $this->users_model->get_login_info($this->session->userdata('email'));
            if($team->team_status == 0) { 
        ?>
        <input type="file" name="pfoac">
        <hr>
        <p>
        File berupa dokumen/notes berformat pdf/doc/docx/txt/zip/rar dengan ukuran maks. 2MB<br>
        dokumen/notes berisi link  (youtube/vimeo/sound cloud/deviantArt dll)<br>
        </p>
        <br>
        <input type="submit" value="Unggah Portofolio" class="btn btn-danger">
        <?php } ?>
    </form>
    </div>
</div>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">