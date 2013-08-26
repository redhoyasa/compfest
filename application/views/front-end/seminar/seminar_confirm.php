<?php
	
?>



<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/register.css">
<style>
	#container {
		overflow : auto;
		width : 900px;
		margin-left : -450px;
		font-size : 14px;
		text-align : center;
	}
	
	#confirm {
		width : 900px;
		margin-top : 10px;
		text-align : center;
	}
	
	.g {
		background : #39B54D!important;
		margin-left : 390px!important;
	}
	.btn {
		height: 30px!important;
line-height: 30px!important;
background: #ed1c24;
float : left;
border-radius: 5px!important;
color: white!important;
cursor: pointer!important;
padding: 3px 9px 3px 9px!important;
font-family: Tahoma,sans-serif!important;
border: none!important;
-webkit-transition: all 0.2s linear;
-moz-transition: all 0.2s linear;
-ms-transition: all 0.2s linear;
opacity : 0.8;
	}

	.btn:hover {
		opacity : 1;
	}
	
	.mov {
		background : #fefefe;
		padding : 3px 5px 3px 5px;
		border : 1px solid #f0f0f0;
		max-width : 700px;
		height    : 400px;
		word-wrap : break-word;
		padding: 20px;
		line-height : 20px;
		text-align : justify;
border-radius: 10px;
height: 100px;
margin-left: 80px;
margin-top: 10px;
margin-bottom : 10px;
	}
	
	
</style>
<div style="height:50px;">&nbsp;</div>
<div id="container">

	<?php
		$token = $this->uri->segment('4');
	$id_user = $this->uri->segment('3');
	echo "Hai, $name! anda telah terdaftar sebagai peserta Seminar CompFest 2013 untuk seminar<br>";
	echo "<div class=\"mov\"><ol>";
	foreach ($seminar as $s) {
		echo "<li>" . $this->seminar_model->getSeminarById($s->id_seminar)->name . "</li>";
	}
	echo "</ol></div>";
	echo "Apakah data tersebut sudah benar?<br>";
	?>
	<div id="confirm">
			<a class="btn g" href="<?php echo site_url('/seminar/attend/' . $id_user . '/' . $token);?>">Hadir</a>
			<a class="btn" style="margin-left:10px;" href="<?php echo site_url('/seminar/cancel/' . $id_user . '/' . $token);?>">Batalkan</a>	
	</div>
	
</div>

</div>