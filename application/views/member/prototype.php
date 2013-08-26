<?php 
    $team = $this->users_model->get_login_info($this->session->userdata('email'));
    $nav['selected'] = 10;
?>
<style>#content {overflow:hidden!important;	border : 0!important;
	background : transparent!important;}
	.danger {
		color : #EE363C;
		font-size:14px;
		font-weight : bold;
	}	
</style>
<div style="height:50px;">&nbsp;</div>
<div class="wrapper-dash">

<?php 
$nav['team'] = $team;
$this->load->view('member/dashboard_navigation',$nav); 
?>


<div class="row-fluid">        
<span class="alert alert-danger">Pengumpulan ditutup.</span>
</div>
<?php /*
    <div class="span12 well" style="text-align:center;">
    <?php if($this->uri->segment('3') == 'fail') { ?>
        <span class="alert alert-danger">Gagal mengunggah prototype, pastikan file berformat zip/rar</span>
        <hr>
    <?php } ?>
    <form class="form-horizontal" method="post" action="<?php echo site_url('member/upload_prototype'); ?>" enctype="multipart/form-data">
        <br>

        <?php 
            $team = $this->users_model->get_login_info($this->session->userdata('email'));
        ?>
        <span class="danger span12">Pastikan format file adalah zip/rar</span>
        <?php if ($team->prototype != 0) {?>
        <span class="alert span12">Sudah mengunggah prototype sebanyak <?php echo $team->prototype?> kali</span>
        <?php } else { ?>
        <span class="alert span12">Belum mengunggah prototype. Silahkan unggah prototype tim Anda</span>	
        <?php } ?>
        <input type="file" name="prototype">
        <hr>
        <input type="submit" value="Unggah" class="btn btn-danger">
    </form>
    </div>
*/ ?>
</div>

<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">