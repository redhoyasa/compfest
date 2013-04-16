<div style="height:50px;">&nbsp;</div>
<!-- Pembimbing -->
<div class="span6 well" style="position:relative;left:50%;margin-left:-250px;">
<form style="text-align:center;margin:auto;"class="form-horizontal" method="post" action="<?php echo site_url('member/payment'); ?>" enctype="multipart/form-data">
    <h3>Unggah Bukti Pembayaran</h3>
    <br>
    <?php 
        $td = $this->kompetisi_model->get_team($this->users_model->get_login_info($this->session->userdata('email'))->id_team);
        if($td->payment != '') {
    ?>
        <h5>Sudah melakukan pembayaran</h5>
        <img src="<?php echo  site_url('uploads/payment') .'/'. $td->payment; ?>" width="400px">
        <h5>Unggah Ulang?</h5>
    <?php } ?>
    <div class="control-group">
    <label class="control-label">Bukti Pembayaran</label>
    <div class="controls">
    <input type="file" name="payment">
    </div>
    </div>
    <input type="submit" value="Unggah" class="btn btn-danger">
</form>
</div>

<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">