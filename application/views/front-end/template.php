<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CompFest 2013</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/js/script.js" type="text/javascript"></script>
	</head>

	<body>
		<div id="wrap">

			<?php 
				if(!$this->access->is_login()) { 
			?>
					<div id="login">
					<form method="post" action="<?php echo site_url('auth/login'); ?>">
						<input class="field" type="text" name="email" placeholder=" e-mail" style="margin-left:40px;">
						<input class="field" type="password" name="password" placeholder=" password">
						<input id="button-go" type="submit" name="login" value="GO!">
						<p id="forgot">or, <a href="#">forgot password?</a></p>
						<div id="button-login">LOGIN</div>
					</form>
				</div>
			<?php
				}else{
			?>
				<div id="logout">
					<p>Login sebagai &nbsp;</p><p id="user" style="font-weight:bold;"><a href="<?php echo site_url('member'); ?>"><?php echo $this->session->userdata('email'); ?></a></p><p>,&nbsp;</p><a style="color:red;"href="<?php echo site_url('auth/logout'); ?>">Logout</a>
				</div>
			<?php
				}	
			?>
			
			
			
			
			<a href="#"><div id="logo"><img src="<?php echo base_url(); ?>assets/img/Logo-web.png"></div></a>
			<nav>
				<ul id="first">
					<li id="menu-home" style="border-bottom: 5px solid #000000"><a href="<?php echo base_url(); ?>">
						<div><p>HOME</p></div>
					</a></li>

					<li id="menu-about" style="border-bottom: 5px solid #f7931e"><a href="<?php echo base_url('about'); ?>">
						<div><p>ABOUT</p></div>
					</a></li>

					<li id="menu-news" style="border-bottom: 5px solid #e8d700"><a href="<?php echo base_url('news'); ?>">
						<div><p>NEWS</p></div>
					</a></li>
					
					<li id="bufferMenu"></li>
					
					<li class="menu" style="border-bottom: 5px solid #3d99d0"><a href="<?php echo base_url('competition'); ?>">
						<div><p>COMPETITION</p></div></a>

						<ul class="second">
							<li><a href="#"><div><p>3D ANIMATION</p></div></a></li>
							<li><a href="#"><div><p>PROGRAMMING</p></div></a></li>
							<li><a href="#"><div><p>ROBOTIC</p></div></a></li>
						</ul>
					</li>				
					
					<li class="menu" style="border-bottom: 5px solid #e40613"><a href="<?php echo base_url('seminar'); ?>">
						<div><p>EVENT</p></div></a>

						<ul class="second">
							<li><a href="<?php echo base_url('roadshow'); ?>"><div><p>ROADSHOW</p></div></a></li>
							<li><a href="<?php echo base_url('seminar'); ?>"><div><p>SEMINAR</p></div></a></li>
						</ul>
					</li>

					<li id="menu-contact" style="border-bottom: 5px solid #8cc63f"><a href="<?php echo base_url('contact'); ?>">
						<div><p>CONTACT</p></div></a>
					</li>
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