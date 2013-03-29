<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Computer Festival 2013</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/a.css">
		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/js/script.js" type="text/javascript"></script>
	</head>

	<body>
		<div id="wrap">
			<a href="#"><div id="logo"></div></a>
			<nav>
				<ul>
					<a href="<?php echo base_url(); ?>"><li class="first-menu" id="menu-home" style="border-bottom: 5px solid #000000">
						<p>HOME</p>
					</li></a>
					<a href="<?php echo base_url(); ?>"><li class="first-menu" id="menu-about" style="border-bottom: 5px solid #f7931e">
						<p>ABOUT</p>
					</li></a>
					<a href="<?php echo base_url('news'); ?>"><li class="first-menu" id="menu-news" style="border-bottom: 5px solid #e8d700">
						<p>NEWS</p>
					</li></a>
					<a href="#"><li class="first-menu" id="bufferMenu"></li></a>
					<a href="<?php echo base_url('seminar'); ?>"><li class="first-menu" id="menu-competition" style="border-bottom: 5px solid #3d99d0">
						<p>COMPETITION</p>
					</li></a>				
					<a href="<?php echo base_url('competition'); ?>"><li class="first-menu" id="menu-event" style="border-bottom: 5px solid #e40613">
						<p>EVENT</p>
						<ul id="hover-event">
							<li>hai</li>
							<li>dota</li>
						</ul>
					</li></a>
					<a href="<?php echo base_url(); ?>"><li class="first-menu" id="menu-contact" style="border-bottom: 5px solid #8cc63f">
						<p>CONTACT</p>
					</li></a>
				</ul>
			</nav>
<!--
			<div id="content">

				<?php echo $content; ?>

			</div>
-->
			<div id="footer">
				<div id="sponsors">
					SPONSORS
				</div>
				<div id="medparts">
					MEDIA PARTNERS
				</div>
			</div>
		</div>
	</body>
</html>