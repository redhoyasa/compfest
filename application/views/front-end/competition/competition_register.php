<div id="inner-content">
		<div id="content-title">Daftar Kompetisi</div>
		<div class="content-main">
			<div class="thumbnail" id="register-thumbnail"></div>
			<div class="main thm" id="register-main">
				<form class="form-horizontal" method="post" action="<?php echo site_url('competition/register_competition'); ?>">
					<div class="control-group">
						<label class="control-label" for="inputNama">Nama Tim</label>
						<div class="controls">
							<input type="text" id="inputNamaTim" placeholder="nama tim" name="team_name" value="">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="inputEmail">Email</label>
						<div class="controls">
							<input type="text" id="inputEmail" placeholder="email" name="email" value="">
							
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="inputNoid">Password</label>
						<div class="controls">
							<input type="password" id="inputPassword" name="password"><br>
							<span class="help-block">Digunakan untuk memasuki member area</span>
						</div>
					</div>
					<br>
					<div class="control-group">
						<label class="control-label" for="inputInstitution">Instansi</label>
						<div class="controls">
							<input type="text" id="inputInstitution" placeholder="nama instansi" name="institution" value="">	
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
	<?php
		$this->load->view('front-end/socialbox');
	?>

</div>
</section>