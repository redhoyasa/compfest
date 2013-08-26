<?php
  $team = $this->users_model->get_login_info($this->session->userdata('email'));
  $event = $this->kompetisi_model->getEventById($team->id_event);
  $nama = $team->team_name;
  $nav['team'] = $team;
  $nav['selected'] = 1;
?>
<style>#content {overflow:hidden!important;	border : 0!important;
	background : transparent!important;}</style>
<div style="height:50px;">&nbsp;</div>
<div class="wrapper-dash">

<?php $this->load->view('member/dashboard_navigation',$nav); ?>


<?php if($team->team_status == 1) { ?>
  <div class="row-fluid">
    <span class="alert alert-success span12">
      Anda telah mengkonfirmasi keikutsertaan tim anda di <?php echo $this->kompetisi_model->getEventById($team->id_event)->event_name; ?>. Silahkan menunggu konfirmasi dari panitia :)
    </span>
  </div>
<?php } ?>

<?php if($team->idea_fix == 1) { ?>
  <div class="row-fluid">
    <span class="alert alert-success span12">
	Anda sudah melakukan finalisasi ide, silahkan tunggu persetujuan dari panitia. Klik <a href="<?php echo site_url('member/unfinalization') ?>">BATAL</a> untuk membatalkan finalisasi.
    </span>
  </div>
<?php } ?>

<?php if($team->idea_fix == 2) { ?>
  <div class="row-fluid">
    <span class="alert alert-success span12">
	Ide Anda sudah diterima, lihat tab ide untuk melihat ide Anda.
    </span>
  </div>
<?php } ?>

<?php if($team->team_status == 2) { ?>
  <div class="row-fluid">
    <span class="alert alert-info span12">
      Tim anda telah terdaftar sebagai peserta kompetisi <?php echo $this->kompetisi_model->getEventById($team->id_event)->event_name; ?>, Selamat berjuang! :D
    </span>
  </div>
<?php } ?>

<!-- idea message -->
<?php if ($team->idea_fix == 0 && ($team->id_event == 6 || $team->id_event == 7)) { ?>
<?php if(count($this->status->idea_status()) > 0) { ?>
  <?php foreach ($this->status->idea_status() as $r) { ?>
        <div class="row-fluid">
          <span class="alert alert-danger span12"><?php echo $r; ?></span>
        </div>
  <?php } ?>
<?php } else { ?>
	  <div class="row-fluid">
	    <span class="alert alert-warning span12">
	      Kelengkapan ide <?php if ($team->id_event == 6) echo "aplikasi"; if ($team->id_event == 7) echo "game";?> Anda telah lengkap. Anda harus melakukan finalisasi agar ide Anda dapat diterima.
	      <br>
	      Dengan melakukan finalisasi, Anda telah menyatakan bahwa ide Anda sudah tidak dapat diubah, <a href="<?php echo site_url('member/finalization') ?>">FINALISASI</a>  
	    </span>
	  </div>
<?php } ?>	
<?php } ?>	 

<?php if(count($this->status->team_status()) == 0 && $team->team_status == 0) { ?>
  <div class="row-fluid">
    <span class="alert alert-success span12" style="text-align:center;">
    Data dan berkas telah lengkap.<br><br> Silahkan melakukan <a href="<?php echo site_url('member/confirm') ?>">KONFIRMASI</a> bahwa data dan berkas yang diberikan merupakan data yang sah dari Tim <?php echo $team->team_name;?> !
  </div>
<?php } else { ?>
      <?php foreach ($this->status->team_status() as $r) { ?>
        <div class="row-fluid">
          <span class="alert alert-danger span12"><?php echo $r; ?></span>
        </div>
      <?php } ?>
<?php } ?>
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
	
	<?php if($team->id_event == 5) {?>
	<div class="control-group">
    <label class="control-label">Posisi</label>
    <div class="controls">
      <input type="text" placeholder="<?php echo $this->status->oac_position($team->role_oac); ?>" disabled>
    </div>
    </div>
	<?php } ?>
	
	<?php if($team->id_event == 6) {?>
	<label class="control-label">Kategori</label>
	    <div class="controls">
	      <input type="text" placeholder="<?php echo $this->status->mobile_category($team->cat_mit); ?>" disabled>
	    </div>
	<?php } ?>
    </form>
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
   <p>&nbsp;</p>
    </form>
  </div>  
</div>
<div style="clear:both;height:10px;">&nbsp;</div>

</div>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" media="screen">