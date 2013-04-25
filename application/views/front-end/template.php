<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Computer Festival 2013</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/js/script.js" type="text/javascript"></script>
	</head>

	<body>
		<div id="wrap">
			<div id="login">
				<input class="field" type="text" name="username" placeholder=" username" style="margin-left:40px;">
				<input class="field" type="password" name="password" placeholder=" password">
				<input id="button-go" type="submit" name="login" value="GO!">
				<p id="forgot">or, <a href="#">forgot password?</a></p>
				<div id="button-login">LOGIN</div>
			</div>
			<!--
			<div id="logout">
				<p>Hi,&nbsp;</p><p id="user" style="font-weight:bold;">RwCn</p><p>&nbsp;:)&nbsp;|&nbsp;</p><a href="#">settings</a><p>&nbsp;|&nbsp;</p><a href="#">LOGOUT</a>
			</div>
			-->
			<a href="#"><div id="logo"><img src="<?php echo base_url(); ?>assets/img/Logo-web.png"/></div></a>
			<nav>
				<ul id="first">
					<a href="<?php echo base_url(); ?>"><li id="menu-home" style="border-bottom: 5px solid #000000">
						<p>HOME</p>
					</li></a>
					<a href="<?php echo base_url(); ?>"><li id="menu-about" style="border-bottom: 5px solid #f7931e">
						<p>ABOUT</p>
					</li></a>
					<a href="<?php echo base_url('news'); ?>"><li id="menu-news" style="border-bottom: 5px solid #e8d700">
						<p>NEWS</p>
					</li></a>
					<a href="#"><li id="bufferMenu"></li></a>
					<a href="<?php echo base_url('competition'); ?>"><li id="menu-competition" style="border-bottom: 5px solid #3d99d0">
						<p>COMPETITION</p>
						<ul class="second">
							<li><p>3D ANIMATION</p></li>
							<li><p>PROGRAMMING</p></li>
							<li><p>ROBOTIC</p></li>
						</ul>
					</li></a>				
					<a href="<?php echo base_url('seminar'); ?>"><li id="menu-event" style="border-bottom: 5px solid #e40613">
						<p>EVENT</p>
						<ul class="second">
							<li><p>ROADSHOW</p></li>
							<li><p>SEMINAR</p></li>
						</ul>
					</li></a>
					<a href="<?php echo base_url(); ?>"><li id="menu-contact" style="border-bottom: 5px solid #8cc63f">
						<p>CONTACT</p>
					</li></a>
				</ul>
			</nav>
	
			<div id="content">

				<?php echo $content; ?>

			</div>

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