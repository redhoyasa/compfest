<?php 
    $team = $this->users_model->get_login_info($this->session->userdata('email'));
    $nav['selected'] = 6;
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
    <?php if($this->uri->segment('3') == 'fail') { ?>
        <span class="alert alert-danger">Gagal mengunggah bukti pembayaran, pastikan file berformat gif/jpg/png dengan ukuran maks. 2MB</span>
        <hr>
    <?php } ?>
    <form class="form-horizontal" method="post" action="<?php echo site_url('member/payment'); ?>" enctype="multipart/form-data">
        <br>
        <?php 
            $td = $this->kompetisi_model->get_team($this->users_model->get_login_info($this->session->userdata('email'))->id_team);
            if($td->payment != '') {
        ?>
            <span class="alert alert-success">Sudah melakukan pembayaran</span>
            <hr>
            <img class="img-polaroid" src="<?php echo  site_url('uploads/payment') .'/'. $td->payment; ?>" width="400px">
            <hr>
            
        <?php } ?>

        <?php 
            $team = $this->users_model->get_login_info($this->session->userdata('email'));
            if($team->team_status == 0) { 
        ?>
        <span class="alert">Unggah Ulang?</span>
        <input type="file" name="payment">
        <hr>
        <input type="submit" value="Unggah" class="btn btn-danger">
        <?php } ?>
    </form>
    </div>
</div>

<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">