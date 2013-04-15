<?php
  $team = $this->users_model->get_login_info($this->session->userdata('email'));
  $event = $this->kompetisi_model->getEventById($team->id_event);
  $nama = $team->team_name;
  switch($team->team_status) {
    case 0: $notif = "Tim ".$team->team_name ." belum melengkapi profile anggota tim."; break;
    case 1: $notif = "Profil tim ".$team->team_name ." sudah lengkap, silahkan melakukan konfirmasi."; break;
    case 2: $notif = "Tim ".$team->team_name ." sudah finalisasi sebagai peserta."; break;
  }
?>
<h2 style="text-align:center;">Selamat Datang Tim <?php echo $nama;?></h2>
<div class="wrapper-dash">

<div class="row-fluid">
    
    <?php if($team->team_status == 0) { ?>
      <span class="alert span12">
      <a href="<?php echo site_url('member/edit'); ?>">Edit Tim</a>
      <a href="<?php echo site_url('member/detail'); ?>">Detail Tim</a>
      <a href="<?php echo site_url('member/payment'); ?>">Unggah Bukti Pembayaran</a>
      </span>
    <?php } ?>

    <?php if($team->team_status == 1) { ?>
      <span class="alert span12">
      <a href="<?php echo site_url('member/edit'); ?>" onclick="return confirm('Profile tim anda sudah lengkap, perubahan anggota mengharuskan anda mengisi form anggota dari awal.')">Edit Tim</a>
      <a href="<?php echo site_url('member/detail'); ?>">Lihat Tim</a>
      <a href="<?php echo site_url('member/payment'); ?>">Unggah Bukti Pembayaran</a>
      </span>
    <?php } ?>

    <?php if($team->team_status == 2) { ?>
      <span class="alert span12">
      Anda telah terdaftar sebagai peserta Kompetisi <?php echo $this->kompetisi_model->getEventById($team->id_event)->event_name; ?>
      </span>
    <?php } ?>

    <?php if($team->payment == '' && $event->payment == '1' ) { ?>
    <span class="span12 alert alert-error">Tim <?php echo $team->team_name; ?> belum mengunggah bukti pembayaran</span>
    <?php } ?>
    <span class="span12 alert alert-error"><?php echo $notif ?></span>
    <?php if($team->team_status == 1) { ?>
      <span class="span12 alert">Dengan melakukan konfirmasi, kami menyetujui segala peraturan Kompetisi Compfest 2013. Segala data yang kami kirim dapat kami pertanggung jawabkan kebenarannya (blablabla kaya pesan persetujuan mengikuti kompetisi gitu dah)
      <a href="<?php echo site_url('member/confirm'); ?>">Selesaikan Pendaftaran</a></span>
    <?php } ?>
</div>

<div class="row-fluid">
  <div class="span6 well">
    <h3>Profile Tim</h3>
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
  </div>

  <div class="span6 well">
    <h3>Ganti Password</h3>
    <?php 
    echo validation_errors(); 
    if(isset($passu)) {
      echo '<div class="well alert-error" style="text-align:center;">Password berhasil diubah</div>';
    }
    ?>

    <form class="form-horizontal" method="post" action="<?php echo site_url('member/update'); ?>">
    <div class="control-group">
    <label class="control-label">Password Baru</label>
    <div class="controls">
      <input type="password" name="password">   
    </div>
    </div>

    <div class="control-group">
    <label class="control-label">Ulangi Password</label>
    <div class="controls">
      <input type="password" name="re_password">
    </div>
    </div>

    <div class="control-group">
    <label class="control-label"></label>
    <div class="controls">
      <input type="submit" value="Ganti" class="btn btn-danger">
    </div>
    </div>
    </form>
  </div>  
</div>
<div style="clear:both;height:10px;">&nbsp;</div>


</div>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">