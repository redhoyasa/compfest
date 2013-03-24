<form class="form-horizontal" method="post" action="<?php echo site_url('member/payment'); ?>" enctype="multipart/form-data">

<!-- Pembimbing -->
<div class="span6 well" style="text-align:center;">
    <h3>Unggah Bukti Pembayaran</h3>

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

    <div class="control-group">
    <label class="control-label"></label>
    <div class="controls">
    <input type="submit" value="Unggah" class="btn btn-danger">
    </div>
    </div>
</div>
</form>