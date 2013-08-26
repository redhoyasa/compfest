<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/register.css">
<style>
	#container {
		overflow : auto;
		width : 900px;
		margin-left : -475px;
		font-size : 14px;
		text-align : center;
		background-image : none;
	}
	
	#confirm {
		width : 900px;
		margin-top : 10px;
		text-align : center;
	}
	
	.g {
		background : #39B54D!important;
		margin-left : 320px!important;
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
font-family: Arial,Tahoma,sans-serif!important;
border: none!important;
-webkit-transition: all 0.2s linear;
-moz-transition: all 0.2s linear;
-ms-transition: all 0.2s linear;
opacity : 0.5;
	}

	.btn:hover {
		opacity : 1;
	}
	
	.mov {
	background: #fefefe;
padding: 3px 5px 3px 5px;
border: 1px solid #f0f0f0;
max-width: 700px;
height: 400px;
word-wrap: break-word;
overflow-Y: scroll;
padding: 20px;
line-height: 20px;
text-align: justify;
border-radius: 3px;
height: 100%;
overflow-y: hidden;
margin-left: 80px;
margin-top: 10px;
	}
	
	b {
		font-weight : bold;
	}
	
	
</style>
<div style="height:50px;">&nbsp;</div>
<div id="container">

	<?php
		$token = $this->uri->segment('4');
		$id_user = $this->uri->segment('3');

		echo "<span id=\"top\">Hai, $nama! Anda sedang dalam proses pendaftaran Seminar CompFest dengan tema :</span><br><br><br>";
		foreach ($seminar as $s) {
			echo "<br><b>" . $this->seminar_model->getSeminarById($s->id_seminar)->name . "</b><br>" . 
			"<div class=\"mov\">".$s->motivation . '</div><br>';
		}
		echo "Apakah data tersebut sudah benar?<br>";
	?>
	<div id="confirm">
			<a class="btn g" href="<?php echo site_url('/seminar/finish/' . $id_user . '/' . $token);?>">Kirim Pendaftaran Seminar</a>
			<a style="margin-left:10px;" class="btn" href="<?php echo site_url('/seminar/refund/' . $id_user . '/' . $token);?>">Batalkan</a>	
	</div>
	
</div>

