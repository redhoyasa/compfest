<!-- Pembimbing -->
<?php 
    $team = $this->users_model->get_login_info($this->session->userdata('email'));
    $pembimbing = $this->member_model->get_member($team->id_team,'9');
    if($pembimbing == false) {
?>
        <div class="span6 well">
        <h3>Belum memasukan identitas ada pembimbing</h3>
        </div>
<?php
    } else {
?>
        <div class="span6 well">

            <h3>Pembimbing</h3>
            <?php 
                if(isset($upload[9])) {
                    echo '<div class="alert alert-error" style="text-align:center";">Gagal memasukan data</div>' ;
                }
            ?>
            <div class="control-group">
            <label class="control-label">Nama</label>
            <div class="controls">
            <input type="text" placeholder="<?php echo $pembimbing->register_name; ?>" disabled>
            </div>
            </div>

            <div class="control-group">
            <label class="control-label">Email</label>
            <div class="controls">
             <input type="text" placeholder="<?php echo $pembimbing->register_email; ?>" disabled>
            </div>
            </div>

            <div class="control-group">
            <label class="control-label">Nomor Telepon</label>
            <div class="controls">
             <input type="text" placeholder="<?php echo $pembimbing->register_phone; ?>" disabled>
            </div>
            </div>

            <div class="control-group">
            <label class="control-label">Kartu Identitas</label>
            <div class="controls">
            <img src="<?php echo base_url(); ?>uploads/idcard/<?php if($pembimbing->register_id != '') echo $pembimbing->register_id; else echo "dummy.png"; ?>" width="200">
            </div>
            </div>

            <div class="control-group">
            <label class="control-label">Foto</label>
            <div class="controls">
            <img src="<?php echo base_url(); ?>uploads/photo/<?php if($pembimbing->register_photo != '') echo $pembimbing->register_photo; else echo "dummy.png"; ?>" width="200">
            </div>
            </div>
        </div>
<?php 
    } 
?>



<!-- Anggota -->
<?php 
    $members = $this->member_model->get_all_member($team->id_team);
    foreach($members as $r) {
    
    if($r->register_role == 9) {
        continue;
    }
?>
<div class="span6 well">

    <?php if($r->register_role != 1) { ?>
        <h3>Anggota <?php echo $r->register_role; ?></h3>
    <?php } else { ?>
        <h3>Ketua Tim</h3>
    <?php } ?>

    <?php 
        if(isset($upload[$r])) {
            echo '<div class="alert alert-error" style="text-align:center";">Gagal Memasukan data</div>' ;
        }
    ?>

    <div class="control-group">
    <label class="control-label">Nama</label>
    <div class="controls">
    <input type="text" placeholder="<?php echo $r->register_name; ?>" disabled>
    </div>
    </div>

    <div class="control-group">
    <label class="control-label">Email</label>
    <div class="controls">
     <input type="text" placeholder="<?php echo $r->register_email; ?>" disabled>
    </div>
    </div>

    <div class="control-group">
    <label class="control-label">Nomor Telepon</label>
    <div class="controls">
     <input type="text" placeholder="<?php echo $r->register_phone; ?>" disabled>
    </div>
    </div>

    <div class="control-group">
    <label class="control-label">Kartu Identitas</label>
    <div class="controls">
    <img src="<?php echo base_url(); ?>uploads/idcard/<?php if($r->register_id != '') echo $r->register_id; else echo "dummy.png"; ?>" width="200">
    </div>
    </div>

    <div class="control-group">
    <label class="control-label">Foto</label>
    <div class="controls">
    <img src="<?php echo base_url(); ?>uploads/photo/<?php if($r->register_photo != '') echo $r->register_photo; else echo "dummy.png"; ?>" width="200">
    </div>
    </div>
</div>
 

<?php } ?>
