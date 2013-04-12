<div id="container">
		<div class="content-title">Daftar Kompetisi</div>
		<div class="content-main">
			<div class="thumbnail" id="register-thumbnail"></div>
			<div class="main" id="register-main">
				
				<form class="form-horizontal" method="post" action="<?php echo site_url('competition/register_competition'); ?>">
					<div class="control-group">
						<label class="control-label" for="inputNama">Nama Tim</label>
						<div class="controls">
							<?php echo form_error('team_name'); ?>
							<input type="text" id="inputNamaTim" placeholder="nama tim" name="team_name" value="<?php echo set_value('team_name'); ?>">
							&nbsp;&nbsp;<span class="info" id="nameInfo"></span>
						</div>
					</div>


					<div class="control-group">
						<label class="control-label" for="inputEmail">Email</label>
						<div class="controls">
							<?php echo form_error('email'); ?>
							<input type="email" id="inputEmail" placeholder="email" name="email" value="<?php echo set_value('email'); ?>">
							&nbsp;&nbsp;<span class="info" id="emailInfo"></span>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="inputNoid">Password</label>
						<div class="controls">
							<?php echo form_error('password'); ?>
							<input type="password" id="inputPassword" name="password">&nbsp;&nbsp;<span class="info" id="passInfo"></span>
							<br><span class="help-block">Digunakan untuk memasuki member area</span>
						</div>
					</div>
					<br>
					<div class="control-group">
						<label class="control-label" for="inputInstitution">Instansi</label>
						<div class="controls">
							<?php echo form_error('institution'); ?>
							<input type="text" id="inputInstitution" placeholder="nama instansi" name="institution" value="<?php echo set_value('institution'); ?>">	
							&nbsp;&nbsp;<span class="info" id="institutionInfo"></span>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label" for="inputCompetition">Kompetisi</label>
						<div class="controls">
						<?php 
						$kompetisi = $this->kompetisi_model->getEvent();
						foreach ($kompetisi as $k) {
						?>
							<label class="radio">
								<input type="radio" value="<?php echo $k->id_event; ?>" name="competition" <?php echo set_radio('competition', $k->id_event); ?>><?php echo $k->event_name; ?><br>
							</label>
						<?php } ?>
						<?php echo form_error('competition'); ?>
						</div>
					</div>


				<div class="control-group">
						<div class="controls">
							<button type="submit" class="btn">Register</button>
					</div>
				</div>
		</form>

			</div>
	</div>
</div>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/register.css">
	<script type="text/javascript" src="../js/validateCompetition.js"></script>