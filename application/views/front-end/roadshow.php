<div id="inner-content">
			<div id="content-title">Roadshow</div>
			
			<div id="timeline">

			</div>

		</div>

		</div>
	
	
</section>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/timeline.css">
<style type="text/css">section{height: 550px;}</style>
<script src="<?php echo base_url(); ?>assets/plugins/timeline/timeline-min.js" type="text/javascript"></script>
<script>
		$(function(){
	
			var timeline = new VMM.Timeline();
			timeline.init("data.json");

		});
</script>