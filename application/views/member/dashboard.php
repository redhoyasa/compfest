<?php
  $team = $this->users_model->get_login_info($this->session->userdata('email'));
  $event = $this->kompetisi_model->getEventById($team->id_event);
  $nama = $team->team_name;
  switch($team->team_status) {
    case 0: $notif = "Tim ".$team->team_name ." belum melengkapi profile anggota tim"; break;
    case 1: $notif = "Profil tim ".$team->team_name ." sudah lengkap, silahkan melakukan upload bukti pembayaran dan lakukan konfirmasi."; break;
    case 2: $notif = "Tim ".$team->team_name ." sudah finalisasi sebagai peserta."; break;
  }
?>
<div style="height:50px;">&nbsp;</div>
<h2 style="text-align:center;">Selamat Datang Tim <?php echo $nama;?></h2><br>
<?php if($team->team_status == 2) { ?>
      <h3><span class="alert-success well-small">
       Anda telah terdaftar sebagai peserta Kompetisi <?php echo $this->kompetisi_model->getEventById($team->id_event)->event_name; ?>
      </span></h3>
<?php } ?>
<?php if($team->team_status == 1) { ?>
      <h3><span class="alert-info well-small"><?php echo $notif ?>
      <a class="btn btn-primary confirm" href="<?php echo site_url('member/confirm'); ?>">Selesaikan Pendaftaran</a></span></h3>
<?php } ?>
<?php if($team->team_status == 0) { ?>
      <h3><span class="alert-error well-small"><?php echo $notif ?></span></h3>
<?php } ?>
<div class="wrapper-dash">

<div class="row-fluid">
    <br>
</div>
<br>
<div class="row-fluid">
  <div class="span6 well">
    <h3>Profile Tim</h3><br><br>
    <form class="form-horizontal">
    <div class="control-group">
    <label class="control-label">Nama Tim</label>
    <div class="controls">
      <input type="text" placeholder="<?php echo $team->team_name; ?>" disabled>   
    </div>
    </div>

    <div class="control-group">
    <label class="control-label">Institusi</label>
    <div class="controls">
      <input type="text" placeholder="<?php echo $team->institution; ?>" disabled>
    </div>
    </div>

    <div class="control-group">
    <label class="control-label">Email</label>
    <div class="controls">
      <input type="text" placeholder="<?php echo $team->email; ?>" disabled>
    </div>
    </div>

    <div class="control-group">
    <label class="control-label">Kompetisi</label>
    <div class="controls">
      <input type="text" placeholder="<?php echo $this->kompetisi_model->getEventById($team->id_event)->event_name; ?>" disabled>
    </div>
    </div>
    </form>
    <?php if($team->team_status == 0) { ?>
      <span class="menu-team">
      <h3><a class="btn btn-danger tekan edit" href="<?php echo site_url('member/edit'); ?>">Lengkapi Tim</a></h3>
      </span>
    <?php } ?>
     <?php if($team->team_status == 1) { ?>
      <span class="menu-team">
      <h3><a class="btn btn-danger tekan edit" href="<?php echo site_url('member/edit'); ?>" onclick="return confirm('Profile tim anda sudah lengkap, perubahan anggota mengharuskan anda mengisi form anggota dari awal.')">Edit Tim</a>
      <a class="btn btn-danger tekan edit" href="<?php echo site_url('member/detail'); ?>">Detail Tim</a></h3>
      </span>
    <?php } ?>
    
  </div>

  <div class="span6 well">
    <h3>Ganti Password</h3><br><br>
    <?php 
    echo validation_errors(); 
    if(isset($passu)) {
      echo '<div class="well alert-error" style="text-align:center;">Password berhasil diubah</div>';
    } 
    ?>

    <form class="form-horizontal" method="post" action="<?php echo site_url('member/update'); ?>">
    <div class="control-group">
    <label class="control-label">Password Lama</label>
    <div class="controls">
      <input type="password" name="old_password">   
    </div>
    </div>
    
    <div class="control-group">
    <label class="control-label">Password Baru</label>
    <div class="controls">
      <input type="password" name="password">   
    </div>
    </div>

    <div class="control-group">
    <label class="control-label">Ulangi Password Baru</label>
    <div class="controls">
      <input type="password" name="re_password">
    </div>
    </div>

      <h3><input type="submit" value="Ganti" class="btn"></h3>
   
    </form>
  </div>  
</div>
<div style="clear:both;height:10px;">&nbsp;</div>

    <!--
    <?php if($team->team_status == 1) { ?>
      <span class="alert span12">
      <a href="<?php echo site_url('member/edit'); ?>" onclick="return confirm('Profile tim anda sudah lengkap, perubahan anggota mengharuskan anda mengisi form anggota dari awal.')">Edit Tim</a>
      <a href="<?php echo site_url('member/detail'); ?>">Lihat Tim</a>
      <a href="<?php echo site_url('member/payment'); ?>">Unggah Bukti Pembayaran</a>
      </span>
    <?php } ?>-->

    <?php if($team->payment == '' && $event->payment == '1' ) { ?>
      <h3><span class="alert alert-error well">Tim <?php echo $team->team_name; ?> belum mengunggah bukti pembayaran
        <a class="btn btn-danger tekan edit" href="<?php echo site_url('member/payment'); ?>">Unggah Bukti Pembayaran</a>
      </span></h3>
    <?php } ?>

</div>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>assets/css/dashboard.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">