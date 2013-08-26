<?php
	session_start();
	unset($_SESSION['npm']);
	header("location:index.php");
?>