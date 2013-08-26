<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/seminar_register.css">
<div syle="height:50px;">&nbsp;</div><br><br><br>
<h1>Registrasi Seminar</h1><br><br><br>
<div id="container">
		<h3>Data Pendaftaran</h3>
		<div class="content-main">
			<div class="thumbnail" id="register-thumbnail"></div>
			<div class="main" id="register-main">
				<form class="form-horizontal" method="post" action="<?php echo site_url('seminar/register_seminar'); ?>">
					<?php //echo validation_errors(); ?>
					<div class="control-group">
						<label class="control-label" for="inputNama">Nama Lengkap&nbsp;</label>
						<span class="controls">
							<?php echo form_error('name'); ?>
							<input type="text" id="inputNama" placeholder="Nama Lengkap" name="name" value="<?php echo set_value('name'); ?>">
						</span>
					</div>

					<div class="control-group">
						<label class="control-label" for="inputEmail">Email&nbsp;</label>
						<span class="controls">
							<?php echo form_error('email'); ?>
							<input type="text" id="inputEmail" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>">
						</span>
					</div>

					<div class="control-group">
						<label class="control-label" for="inputNoTl">Nomor Telepon&nbsp;</label>
						<span class="controls">
							<?php echo form_error('phone'); ?>
							<input type="text" placeholder="+62" style="min-width: 1px;width: 25px;" disabled>
							<input type="text" id="inputNoid" style="margin-left: 10px;min-width: 10px;width: 193px;" placeholder="8XXXXXXXXXX" name="phone" value="<?php echo set_value('phone'); ?>">

						</span>
					</div>

					<div class="control-group">
						<label class="control-label" for="inputInst">Institusi/Perusahaan&nbsp;</label>
						<span class="controls">
							<?php echo form_error('inst'); ?>
							<input type="text" id="inputInst" placeholder="Institusi/Perusahaan" name="inst" value="<?php echo set_value('inst'); ?>">
						</span>
					</div>
					
					<div class="info">Anda diwajibkan memfollow akun twitter @Compfest sebagai syarat untuk mendaftar Seminar.
						<br>
						<span>
							<a href="https://twitter.com/CompFest" class="twitter-follow-button" data-show-count="false">Follow @CompFest</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						</span>
					</div><br>
					<div class="control-group">
						<label class="control-label" for="inputTw">Twitter&nbsp;</label>
						<span class="controls">
							<?php echo form_error('tw'); ?>
							<input type="text" placeholder="@" style="min-width: 1px;width: 13px; font-size:14px;" disabled>
							<input type="text" style="margin-left: 10px;min-width: 10px;width: 193px;" id="inputNoid" placeholder="Akun Twitter" name="tw" value="<?php echo set_value('tw'); ?>">
						</span>
					</div>
					
				
					<!--
					<div class="control-group">
						<span class="controls">
								<div class="alert alert-error" style="width:200px;">Pilih salah satu seminar</div>
						</div>
					</div>
					-->
					<div class="sep">&nbsp;</div>
					<br>
						<h3>Pilihan Seminar&nbsp;</h3>
					<br><br>
						<div class="info">Untuk setiap seminar yang Anda pilih, ceritakan motivasi Anda mengikutinya. Karena kuota setiap seminar terbatas, motivasi Anda akan kami jadikan sebagai kriteria dalam menyeleksi calon peserta.</div>	
					<br>
					<br>
						<h5>Hari 1: Sabtu, 21 September 2013</h5>
					<br><br>
					<ul>
						<?php 
							$row = $this->seminar_model->getSeminar();
							$c = 0;
							foreach ($row as $r) {
							$c++;
							if ($c == 5){	
						?>
							<br>
						<h5>Hari 2: Minggu, 22 September 2013</h5>
						<br><br>
						<?php } ?>
						
						<li class="lo">
							<div class="control-group">
								<div class="control-group m">
									<span class="controls">
										<?php echo form_error('motivation-'. $r->id_seminar); ?>
									</span>
								</div>
								<span>
									<span><input data-check="0" type="checkbox" id="seminar-<?php echo $r->id_seminar?>" name="seminar-<?php echo $r->id_seminar?>" value="1"
										<?php if(isset($s['formerror-'.$r->id_seminar])) echo "checked"; ?>></span>
									<span><label class="seminar-title" for="seminar"><?php echo $r->name; ?></label></span>
									<span class="seminar-title"><?php echo $r->time; ?></span>
								</span>
								
								<br>
								<span class="controls-seminar">
									<br>
									<div class="motivation hidden" id="sem-<?php echo $r->id_seminar?>">
		<textarea class="qq" rows="5" cols="82" name="motivation-<?php echo $r->id_seminar?>" placeholder="Motivasi Anda mengikuti seminar (min 100 karakter)"><?php echo set_value('motivation-'.$r->id_seminar); ?></textarea>
									</div>
								</span>
							</div>
						</li>
						<?php
							} 
						?>

					</ul>
					<br>

					<div class="sep">&nbsp;</div>
					<br><br>
					<div class="control-group m" style="margin-left:227px;">
									<span class="controls">
										<span class="controls"><?php echo form_error('hope'); ?></span>
									</span>
								</div>
						<span class="label">Apa harapan kamu untuk CompFest yang lebih baik?&nbsp;

						</span>
					<br><br>
					<div class="control-group">
						<span class="controls">
							
							<textarea rows="5" cols="82" name="hope" placeholder="Harapan atau ide untuk CompFest"><?php echo set_value('hope'); ?></textarea>
						</span>
					</div>

					<div class="sep">&nbsp;</div>
					<br><br>
						<span class="label">Dari mana kamu mengetahui CompFest?&nbsp;</span>
					<br><br>
					<div class="control-group">
						<span class="controls">
							<?php echo form_error('list'); ?>
						<ul>
							<li class="la"><input type="checkbox" name="list" value="facebook" <?php echo set_checkbox('list', 'facebook'); ?>>Facebook</li><br>
							<li class="la"><input type="checkbox" name="list" value="twitter" <?php echo set_checkbox('list', 'twitter'); ?>>Twitter</li><br>
							<li class="la"><input type="checkbox" name="list" value="artikel" <?php echo set_checkbox('list', 'artikel'); ?>>Artikel Online</li><br>
							<li class="la"><input type="checkbox" name="list" value="poster" <?php echo set_checkbox('list', 'poster'); ?>>Poster</li><br>
							<li class="la"><input type="checkbox" name="list" value="mail" <?php echo set_checkbox('list', 'mail'); ?>>Invitation Mail</li><br>
							<li class="la"><input type="checkbox" name="list" value="teman" <?php echo set_checkbox('list', 'teman'); ?>>Teman</li><br>
							<li class="la"><input type="checkbox" name="list" value="lain" id="lain">Lainnya</li><br>
							
							<li class="la">
							<div class="other hidden" id="other">
								<input type="text" name="list2" value="<?php echo set_value('list2'); ?>">
							</div>
							</li><br>

							
						</ul>
						
						
							
						</span>
					</div>

					<br><br>
					<div class="control-group">
						<span class="controls">
							<button type="submit" class="btn">DAFTAR</button>
						</span>
					</div>
				
				</form>


			</div>
	</div>
</div>


<script type="text/javascript" src="../js/validateSeminar.js"></script>