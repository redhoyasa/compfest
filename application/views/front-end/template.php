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
		<header>
			<nav>
				<div class="menu">
				<ul>
					<a href="<?php echo base_url(); ?>"><li id="aa" style="border-bottom: 5px solid #ff00ff"><p>HOME</p></li></a>
					<a href="<?php echo base_url(); ?>"><li id="bb" style="border-bottom: 5px solid #e8d700"><p>ABOUT</p></li></a>
					<a href="<?php echo base_url('news'); ?>"><li id="cc" style="border-bottom: 5px solid #f7931e;"><p>NEWS</p></li></a>
					<a href="<?php echo base_url(); ?>"><div class="login">
						<form>
							<input class="input" type="text" placeholder="Username" />
							<input class="input" type="password" placeholder="Password" />
							<input class="submit" type="submit" value="Masuk" />
						</form>
					</div></a>
					<a href="<?php echo base_url('seminar'); ?>"><li id="dd" style="border-bottom: 5px solid #e40613"><p>EVENT</p></li></a>				
					<a href="<?php echo base_url('competition'); ?>"><li id="ee" style="border-bottom: 5px solid #3d99d0"><p>COMPETITION</p></li></a>
					<a href="<?php echo base_url(); ?>"><li id="ff" style="border-bottom: 5px solid #8cc63f;"><p>CONTACT</p></li></a>
				</ul>
				</div>
			</nav>
			<a href="#"><div id="logo"></div></a>
		</header>


		<div id="background"></div>

		<section>
			<div id="content">

		<?php echo $content; ?>

	</body>
</html>