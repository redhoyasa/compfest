<?php
  $team = $this->users_model->get_login_info($this->session->userdata('email'));
  $event = $this->kompetisi_model->getEventById($team->id_event);
  $nama = $team->team_name;
  switch($team->team_status) {
    case 0: $notif = "Tim ".$team->team_name ." belum melengkapi profile anggota tim"; break;
    case 1: $notif = "Profil tim ".$team->team_name ." sudah lengkap, harap tunggu finlasisasi panitia unggah bukti pembayaran"; break;
    case 2: $notif = "Tim ".$team->team_name ." sudah finalisasi sebagai peserta"; break;
  }
?>
  
  <h2 style="text-align:center;">Selamat Datang Tim <?php echo $nama;?></h2>
  <div class="wrapper-dash">
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
  <div style="clear:both;height:10px;">&nbsp;</div>

<?php 
    if($team->payment == '' && $event->payment == '1' ) {
?>
    <div class="well span6 alert-error">Tim <?php echo $team->team_name; ?> belum mengunggah bukti pembayaran
      <br> 
      Silahkan unggah bukti pembayaran 
      <div class="control-group">
        <label class="control-label"></label>
      <div class="controls">
      <input type="submit" value="Unggah Bukti" class="btn btn-primary">
    </div>
    </div>
    </div>
<?php } ?>
<div class="well span6 alert-error"><?php echo $notif ?>
  <?php 
    if ($team->team_status == 0) {
  ?>
   <div class="control-group">
      <div class="controls">
      <label class="control-label">&nbsp;</label>
      <input type="submit" value="Edit Tim" class="btn btn-danger">
   </div>
   </div>
   <?php } ?>
</div>

</div>