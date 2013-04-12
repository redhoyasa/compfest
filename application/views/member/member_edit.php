 <h2 style="text-align:center;">Edit Profile Tim</h2>
<div class="wrapper-dash">
<form class="form-horizontal" method="post" action="<?php echo site_url('member/update_member'); ?>" enctype="multipart/form-data">

<!-- Pembimbing -->
<div class="span6 well">
    <h3>Pembimbing</h3>
    <input type="hidden" name="register_role_p" value="9">

    <div class="control-group">
    <label class="control-label">Nama</label>
    <div class="controls">
    <input type="text" name="register_name_p"> 
    <br><?php echo form_error('register_name_p'); ?>
    </div>
    </div>

    <div class="control-group">
    <label class="control-label">Email</label>
    <div class="controls">
    <input type="text" name="register_email_p">
    </div>
    </div>

    <div class="control-group">
    <label class="control-label">Nomor Telepon</label>
    <div class="controls">
    <input type="text" name="register_phone_p">
    </div>
    </div>

    <div class="control-group">
    <label class="control-label">Kartu Identitas</label>
    <div class="controls">
    <input type="file" name="register_id_p">
    </div>
    </div>

    <div class="control-group">
    <label class="control-label">Foto</label>
    <div class="controls">
    <input type="file" name="register_photo_p">
    </div>
    </div>
</div>

<!-- Anggota -->
<?php 
    $team = $this->users_model->get_login_info($this->session->userdata('email'));
    $event = $this->kompetisi_model->getEventById($team->id_event);

    for ($r = 1; $r <= $event->members; $r++) {
?>
<div class="span6 well">

    <?php if($r != 1) { ?>
    <h3>Anggota <?php echo $r ?></h3>
    <?php } else { ?>
    <h3>Ketua Tim</h3>
    <?php } ?>
    <input type="hidden" name="register_role_<?php echo $r; ?>" value="<?php echo $r ?>">

    <div class="control-group">
    <label class="control-label">Nama</label>
    <div class="controls">
    <input type="text" name="register_name_<?php echo $r; ?>">   
    <br><?php echo form_error('register_name_' . $r); ?>
    </div>
    </div>

    <div class="control-group">
    <label class="control-label">Email</label>
    <div class="controls">
    <input type="text" name="register_email_<?php echo $r; ?>">
    </div>
    </div>

    <div class="control-group">
    <label class="control-label">Nomor Telepon</label>
    <div class="controls">
    <input type="text" name="register_phone_<?php echo $r; ?>">
    </div>
    </div>

    <div class="control-group">
    <label class="control-label">Kartu Identitas</label>
    <div class="controls">
    <input type="file" name="register_id_<?php echo $r; ?>">
    </div>
    </div>

    <div class="control-group">
    <label class="control-label">Foto</label>
    <div class="controls">
    <input type="file" name="register_photo_<?php echo $r; ?>">
    </div>
    </div>
</div>
<?php } ?>



<div class="span12">
    <div class="control-group">
    <label class="control-label"></label>
    <div class="controls">
    <input type="submit" value="Simpan" class="btn-large btn btn-danger">
    </div>
    </div>
</div>
</form>
</div>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">