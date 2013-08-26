<?php 
    $team = $this->users_model->get_login_info($this->session->userdata('email'));
    $nav['selected'] = 11;
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
    <div class="well">
        <span>Belum ada aplikasi yang di submit</span>
    </div>
</div>

<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">