<div class="navbar">
  <div class="navbar-inner">
    <?php if($team->id_event == 5 || $team->id_event == 2) { ?>
       <a class="brand" href="#"><?php echo $team->team_name;?></a>
    <?php } else { ?> 
       <a class="brand" href="#">Tim <?php echo $team->team_name;?></a>
    <?php } ?>
    <ul class="nav">
      <li <?php if ($selected == 1) echo 'class="active"'; ?>><a href="<?php echo site_url('member/dashboard'); ?>">Depan</a></li>
      
      <?php if($team->id_event == 5 || $team->id_event == 2) { ?>
      <li <?php if ($selected == 2) echo 'class="active"'; ?>><a href="<?php echo site_url('member/detail'); ?>">Profil Pribadi</a></li>
      <li <?php if ($selected == 3) echo 'class="active"'; ?>><a href="<?php echo site_url('member/edit'); ?>">Ubah Profil</a></li>
      <?php } else { ?>  
      <li <?php if ($selected == 2) echo 'class="active"'; ?>><a href="<?php echo site_url('member/detail'); ?>">Lihat Tim</a></li>
      <li <?php if ($selected == 3) echo 'class="active"'; ?>><a href="<?php echo site_url('member/edit'); ?>">Ubah Tim</a></li>
      <?php } ?>  
      
      <?php if($team->id_event == 1 || $team->id_event == 2 || $team->id_event == 3 || $team->id_event == 4) { ?>
      <li <?php if ($selected == 6) echo 'class="active"'; ?>><a href="<?php echo site_url('member/payment'); ?>">Unggah Bukti Pembayaran</a></li>
      <?php } ?>
      <?php if($team->id_event == 5) { ?>
      <li <?php if ($selected == 7) echo 'class="active"'; ?>><a href="<?php echo site_url('member/cvoac'); ?>">CV dan Portofolio</a></li>
      <?php } ?>     
      <?php if($team->id_event == 6) { ?>
      <li <?php if ($selected == 8) echo 'class="active"'; ?>><a href="<?php echo site_url('member/apps_idea'); ?>">Ide Aplikasi</a></li>
      <?php } ?>     
      <?php if($team->id_event == 7) { ?>
      <li <?php if ($selected == 8) echo 'class="active"'; ?>><a href="<?php echo site_url('member/game_idea'); ?>">Ide Game</a></li>
      <?php } ?>   
      <?php if($team->id_event == 1 || $team->id_event == 2) { ?>
      <li <?php if ($selected == 9) echo 'class="active"'; ?>><a href="<?php echo site_url('member/cpcproof'); ?>">Unggah Surat Keterangan</a></li>
      <?php } ?>   
      
      <?php if($team->id_event == 6 || $team->id_event == 7) { ?>
      <li <?php if ($selected == 10) echo 'class="active"'; ?>><a href="<?php echo site_url('member/prototype'); ?>">Upload Prototype</a></li>
      <?php } ?> 
      
      <li><a href="<?php echo site_url('auth/logout'); ?>">Keluar</a></li>
    </ul>
  </div>
</div>
