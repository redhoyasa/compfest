<div data-role="collapsible" data-collapsed="true" data-theme="f" data-content-theme="d">
				

	<h3>More in this section</h3>
	
	<ul data-role="listview" data-theme="c" data-dividertheme="d">
	
			<li data-role="list-divider">Menu</li>
			<li><a href="<?php echo site_url('admin') ?>">Home</a></li>
			<li><a href="<?php echo site_url('admin/page') ?>">Page</a></li>
			<li><a href="<?php echo site_url('admin/news') ?>">News</a></li>
			<li><a href="<?php echo site_url('auth/logout') ?>" data-ajax="false">Logout (level <?php echo $this->session->userdata('event'); ?>)</a></li>
			
			<?php if($this->session->userdata('event') == '0' || $this->session->userdata('event') == '1') { ?>
			<li data-role="list-divider">Competition</li>
			<?php 
			$kompetisi = $this->kompetisi_model->getEvent();
				foreach ($kompetisi as $k) {
				?>
				<li><a href="<?php echo site_url('admin/competition') .'/'. $k->id_event ?>"><?php echo $k->event_name ?></a></li>
				<?php } ?>
			<?php } ?>

			<?php if($this->session->userdata('event') == '0' || $this->session->userdata('event') == '2') { ?>
			<li data-role="list-divider">Seminar</li>
			<li><a href="<?php echo site_url('admin/seminar') ?>">Semua</a></li>
				<?php 
				$kompetisi = $this->seminar_model->getSeminar();
				foreach ($kompetisi as $k) {
				?>
				<li><a href="<?php echo site_url('admin/seminar') .'/'. $k->id_seminar ?>"><?php echo $k->name ?></a></li>
				<?php } ?>
			<?php } ?>
			
			

	</ul>
</div>
