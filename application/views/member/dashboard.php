<br><br><br>
<?php
  $team = $this->users_model->get_login_info($this->session->userdata('email'));
  $event = $this->kompetisi_model->getEventById($team->id_event);
  $nama = $team->team_name;
  switch($team->team_status) {
    case 0: $notif = "Tim ".$team->team_name ." belum melengkapi profile anggota tim"; break;
    case 1: $notif = "Profil tim ".$team->team_name ." sudah lengkap, harap tunggu finalisasi panitia unggah bukti pembayaran"; break;
    case 2: $notif = "Tim ".$team->team_name ." sudah finalisasi sebagai peserta"; break;
  }
?>
<div class="wrapper-dash">
  <h1 class="h1" style="text-align:center;">Selamat Datang Tim <?php echo $nama;?></h1><br>
  <hr>
  <div class="grid2 span6 well">
    <h3>Profile Tim</h3><br>
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
  <div class="grid2 span6 well"><br>
    <h3>Ganti Password</h3>
    <?php 
    echo "<br>";
    echo validation_errors(); 
    if(isset($passu)) {
      echo '<div class="well alert-error gagal" style="text-align:center;">Password berhasil diubah</div>';
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

    <div class="control-group grid2">
          <input type="submit" value="Ganti" class="btn btn-danger">
    </div>
    </form>
  </div>

  <div style="clear:both;height:10px;">&nbsp;</div>
<br>
<hr>
<?php 
    if($team->payment == '' && $event->payment == '1' ) {
?>
    <div class="grid2 well span6 alert">Tim <?php echo $team->team_name; ?> belum mengunggah bukti pembayaran
      <br> 
        <br>
        Silahkan unggah bukti pembayaran 
          <div class=" grid2 control-group"><br>
          <input type="submit" value="Unggah Bukti" class="grid2 btn btn-primary">
        </div>
    </div>
<?php } ?>


<div class="grid2 span6 success"><?php echo $notif ?>
  <br>
  <?php 
    if ($team->team_status == 0) {
  ?>
   <br>
    Silahkan melengkapi profil tim Anda
    <div class="grid2 control-group"><br>
        <input type="submit" value="Edit Tim" class="grid2 btn btn-danger">
   </div>
 
   <?php } ?>
</div>

</div>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>assets/css/dashboard.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">