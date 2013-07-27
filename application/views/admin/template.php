
<!DOCTYPE html> 
<html> 
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Admin - Compfest</title> 
	<link rel="stylesheet"  href="<?php echo base_url(); ?>jquery.mobile-1.0.min.css" />  
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/jqm-docs.css"/>
	<script src="<?php echo base_url(); ?>jquery.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.mobile.themeswitcher.js"></script>
	<script src="<?php echo base_url(); ?>js/jqm-docs.js"></script>
	<script src="<?php echo base_url(); ?>jquery.mobile-1.0.min.js"></script>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>js//nicEdit.js"></script>
	<script type="text/javascript">
		bkLib.onDomLoaded(function() { nicEditors.allTextAreas({iconsPath : '<?php echo base_url() ?>js/nicEditorIcons.gif', fullPanel : true}) });
	</script>
</head> 
<body> 

	<div data-role="page" class="type-interior">

		<div data-role="header" data-theme="b">
		<h1>Admin Compfest</h1>
		<a href="<?php echo site_url('auth/logout') ?>" data-ajax="false" data-icon="delete" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-home">Logout</a>
	</div><!-- /header -->

	<div data-role="content">
		<div class="content-primary">
			<?php echo $content; ?>
			
		</div><!--/content-primary -->		
	
		<div class="content-secondary">
			<?php $this->load->view('admin/sidebar'); ?>
		</div>		

	</div><!-- /content -->

<div data-role="footer" class="footer-docs" data-theme="c">
		<p>&copy; Desain</p>
</div>
	
</div><!-- /page -->

</body>
</html>