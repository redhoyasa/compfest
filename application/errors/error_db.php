<!--DOCTYPE html>
<html lang="en">
<head>
<title>Database Error</title>
<style type="text/css">

::selection{ background-color: #E13300; color: white; }
::moz-selection{ background-color: #E13300; color: white; }
::webkit-selection{ background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	-webkit-box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 12px 15px 12px 15px;
}
</style>
</head>
<body>
	<div id="container">
		<h1><?php echo $heading; ?></h1>
		<?php echo $message; ?>
	</div>
</body>
</html-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>404 Page Not Found</title>
	<link href="<?php echo base_url()?>/assets/css/style.css">
	<link rel="shortcut icon" href="http://compfest.web.id/favicon.png" type="image/x-icon">
	<link rel="icon" href="http://compfest.web.id/favicon.png" type="image/x-icon">
	<style>
		#mid {
			font-family : Helvetica,Tahoma,Arial,sans-serif;
			text-align : center;
			position : absolute;
			top : 50%;
			left : 50%;
			margin-left : -312px;
			margin-top : -19px;
		}
		
		#mid a {
			text-decoration : none;
			border: none;
			font-weight : bold;
			font-size: 12px !important;
			background: #FF2323;
			color: #f7f7f7;
			padding: 3px !important;
			padding-left: 10px !important;
			padding-right: 10px !important;
			border-radius: 5px;
			-webkit-transition: all 0.5s ease-in-out;
			-moz-transition: all 0.5s ease-in-out;
			-transition: all 0.5s ease-in-out;
		}
	</style>
	<script>
		function bum() {
			document.getElementById('c').innerHTML = 'LOL just kidding, this is a 404 page';
		}
	</script>
</head>
<body>
	<div id="mid">
		<h1 id="c" onmouseover="bum()">OMG you've found the time machine!!! :O</h1>
		<a href="<?php echo base_url()?>">Go Home Now</a>
	</div>
</body>
</html>