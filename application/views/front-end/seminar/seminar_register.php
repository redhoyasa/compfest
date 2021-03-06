<div id="inner-content">
		<div id="content-title">Daftar Seminar</div>
		<div class="content-main">
			<div class="thumbnail" id="register-thumbnail"></div>
			<div class="main" id="register-main">

				<form class="form-horizontal" method="post" action="<?php echo site_url('seminar/register_seminar'); ?>">
					<div class="control-group">
						<label class="control-label" for="inputNama">Nama</label>
						<div class="controls">
							<input type="text" id="inputNama" placeholder="nama lengkap" name="name" value="">
							<span id="nameInfo">Nama Lengkap</span>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="inputEmail">Email</label>
						<div class="controls">
							<input type="text" id="inputEmail" placeholder="email" name="email" value="">
							<span id="emailInfo">Email yang valid</span>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="inputNoid">Nomor Identitas</label>
						<div class="controls">
							<input type="text" id="inputNoid" placeholder="nomor identitas" name="id_no" value="">
							<span id="noIdInfo">Nomor KTP/Kartu Pelajar/Kartu Mahasiswa/SIM</span>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label" for="inputNoTl">Nomor Telepon</label>
						<div class="controls">
							<input type="text" id="inputNoTl" placeholder="nomor telepon" name="phone" value="">
							<span id="teleponInfo">Nomor HP atau Telepon Rumah</span>
						</div>
					</div>

					<!--
					<div class="control-group">
						<div class="controls">
								<div class="alert alert-error" style="width:200px;">Pilih salah satu seminar</div>
						</div>
					</div>
					-->
						
						<?php 
							$row = $this->seminar_model->getSeminar();
							foreach ($row as $r) {
						?>
							<div class="control-group">
								<label class="control-label" for="seminar"><?php echo $r->name; ?></label>
								<div class="controls-seminar">
									<input type="checkbox" id="seminar-<?php echo $r->id_seminar?>" name="seminar-<?php echo $r->id_seminar?>" value="1"
									<?php if(isset($s['formerror-'.$r->id_seminar])) echo "checked"; ?>>
									<br>
									
									<div class="motivation">
									Motivasi: 
									<textarea id="motivation-<?php echo $r->id_seminar?>" name="motivation-<?php echo $r->id_seminar?>"><?php echo set_value('motivation-'.$r->id_seminar); ?></textarea>
									<span id="motivationInfo-<?php echo $r->id_seminar?>"></span>
									</div>
									
								</div>
								
							</div>
							<div class="control-group">
								<div class="controls">
									<?php echo form_error('motivation-'. $r->id_seminar); ?>
								</div>
							</div>
						<?php
							} 
						?>

						<div class="control-group">
							<div class="controls">
								<button type="submit" class="btn">Register</button>
							</div>
						</div>
				</form>


			</div>
	</div>
</div>
	<?php
		$this->load->view('front-end/socialbox');
	?>
</div>
</section>
		<script type="text/javascript" src="../js/validateSeminar.js"></script>