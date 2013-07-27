<?php
session_start();

if ($_POST) {
	include 'connection.php';
	
	$query = mysql_query("SELECT npm FROM register WHERE npm = '$_POST[npm]'");
	$user = mysql_num_rows($query);
	
	if($user > 0) {
		$_SESSION['npm'] = $_POST['npm'];
		header("location:ask.php");
	} else {
		$valid = false;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Pengumpulan Tugas Compfest</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<script src="bootstrap/js/jquery-latest.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    </head>

<style>
</style>
<body data-spy="scroll" data-target=".subnav" data-offset="50">

    <div class="container">
		<div class="row">
            <div class="page-header" style="text-align: center;">
                <h1>Pengumpulan Tugas Compfest</h1>
            </div>
        </div>

        <div class="well" style="margin: auto; width: 40%; text-align: center;">
			<?php if(isset($valid)) { ?>
				<div class="alert alert-error">
					Otentifikasi Gagal
				</div>
			<?php } ?>
            <form method="post">
                <h2>NPM</h2>
                <input type="text" name="npm" /><br />
                <input type="submit" class="btn btn-primary" value="Masuk" />
            </form>
        </div>
    </div><!-- /container -->

  </body>
</html>
