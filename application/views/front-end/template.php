<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CompFest 2013</title>
		<meta name="google-site-verification" content="DfXfK2mu30XCrE6UguErHz8bxjNCGJ4WuvORTIAoAKQ" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.png" type="image/x-icon">
		<link rel="icon" href="<?php echo base_url(); ?>favicon.png" type="image/x-icon">
		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/js/script.js" type="text/javascript"></script>
		<style>
			.under:hover {
				text-decoration: underline;
			}
		</style>
	</head>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-39025081-1']);
	  _gaq.push(['_setDomainName', 'compfest.web.id']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	
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
						<p id="forgot" style="visibility:hidden;">or, <a style="visibility:hidden;" href="#">forgot password?</a></p>
						<div id="button-login">LOGIN</div>
					</form>
				</div>
			<?php
				}else{
			?>
				<div id="logout">
					<p>Login sebagai &nbsp;</p><p id="user" style="font-weight:bold;"><?php echo $this->session->userdata('email'); ?>|&nbsp;</p><a class="under" style="font-weight:bold;" href="<?php echo site_url('member'); ?>">Member Area</a><p>&nbsp;|&nbsp;</p><a class="under" style="color:red;"href="<?php echo site_url('auth/logout'); ?>">logout</a>
				</div>
			<?php
				}	
			?>
			
			
			
			
			
			<nav>
				<ul id="first">
					<li class="menu" id="menu-home"><a href="<?php echo base_url(); ?>">
						<div><p>HOME</p></div>
					</a></li>

					<li class="menu" id="menu-about"><a href="<?php echo base_url('about'); ?>">
						<div><p>ABOUT</p></div>
					</a></li>

					<li class="menu" id="menu-news"><a href="<?php echo base_url('news'); ?>">
						<div><p>NEWS</p></div>
					</a></li>
					
					<li class="menu" id="bufferMenu">
						<a href="<?php echo base_url(); ?>"><div id="logo"><img src="<?php echo base_url(); ?>assets/img/logo.png"></div></a>
					</li>
					
					<li class="menu" id="menu-competition"><a href="<?php echo base_url('competition'); ?>">
						<div><p>COMPETITION</p></div></a>
					</li>				
					
					<li class="menu" id="menu-event"><a href="<?php echo base_url('seminar'); ?>">
						<div><p>EVENT</p></div></a>

						<ul class="second">
							<li><a href="<?php echo base_url('roadshow'); ?>"><div><p>ROADSHOW</p></div></a></li>
							<li><a href="<?php echo base_url('seminar'); ?>"><div><p>SEMINAR</p></div></a></li>
							<li><a href="<?php echo base_url('playground'); ?>"><div><p>PLAYGROUND</p></div></a></li>
							<li><a href="<?php echo base_url('entertainment'); ?>"><div><p>ENTERTAINMENT</p></div></a></li>
						</ul>
					</li>

					<li class="menu" id="menu-contact"><a href="<?php echo base_url('contact'); ?>">
						<div><p>CONTACT</p></div></a>
					</li>
				</ul>
			</nav>

			<div id="content">

				<?php echo $content; ?>

			</div>



			<div id="footer">
				<!--div id="sponsors">
					SPONSORS
				</div>
				<div id="medparts">
					MEDIA PARTNERS
				</div-->
				<a href="<?php echo base_url();?>partners">
				<img src="<?php echo base_url();?>assets/img/sponmedpart.png">
				</a>
			</div>

			

		</div>
		<div style="width:100%;"  id="running-text">
				<iframe style="height:44px;width:100%;" src="http://localhost/animation/sam"></iframe>
		</div>
	</body>
</html>