<?php
session_start();
include 'connection.php';
if(!isset($_SESSION['npm'])) {
	header("location:index.php");
} 

$query = mysql_query("SELECT * FROM register WHERE npm = $_SESSION[npm]");

$linkWawancara = array(
		"Secretary" => "http://hurulaini.youcanbook.me/",
		"Event - Seminar" => "http://dimas.youcanbook.me/",
		"Event - Playground" => "http://tommyanugrah.youcanbook.me/",
		"Event - Roadshow" => "http://erocakra.youcanbook.me/",
		"Event - Entertainment" => "http://agungoo.youcanbook.me/",
		"Relation - Press" => "http://inihana.youcanbook.me/",
		"Relation - Media Partner" => "http://elsa.youcanbook.me/",
		"Relation - Online Marketing" => "http://vivi.youcanbook.me/",
		"Relation - Offline Marketing" => "http://satriodwih.youcanbook.me/",
		"Relation - Sponsorship" => "http://al-amin.youcanbook.me/",
		"HRD - Competition" => "http://kent.youcanbook.me/",
		"HRD - Relation" => "http://rizkyaprilina.youcanbook.me/",
		"HRD - Event" => "http://elisabasandid.youcanbook.me/",
		"HRD - Support" => "http://fawwaz.youcanbook.me/",
		"Support - Documentation" => "http://dokum.youcanbook.me/",
		"Support - IT Support" => "http://it_support.youcanbook.me/",
		"Support - Food & Beverages" => "http://desmul.youcanbook.me/",
		"Support - Equipment & Venue" => "http://perlengkapan.youcanbook.me/",
		"Support - Transportation & Security" => "http://transkam.youcanbook.me/",
		"Support - Fundraising" => "http://fundraising.youcanbook.me/",
		"Support - Design & Multimedia" => "http://desmul.youcanbook.me/",
		"Support - Decoration" => "http://dekorasi-cf13.youcanbook.me/",
		"Competition - Blender 3D Animation" => "http://blender.youcanbook.me/",
		"Competition - Competitive Programming" => "http://cpc.youcanbook.me/",
		"Competition - Robotic" => "http://robotic.youcanbook.me/",
		"Competition - HTML5 GameDev Challenge" => "http://fariskhi.youcanbook.me/",
		"Competition - IT Solution" => "http://itsolution.youcanbook.me/",
		"Competition - Ultrabook Apps Challenge" => "http://ultrabookapps.youcanbook.me/",
	);

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
		<link href="bootstrap/css/style.css" rel="stylesheet" media="screen">
		<script src="bootstrap/js/jquery-latest.js"></script>
		<!--script src="bootstrap/js/bootstrap.min.js"></script-->
    </head>
	<script>
	
    	$(".aw").click(function(){
		$(this).next().slideToggle();
	});
        </script>
<style>
</style>
<body data-spy="scroll" data-target=".subnav" data-offset="50">

<?php

		
		
		while($data = mysql_fetch_array($query)) {

		$satu = $data['divisi1'];
		$dua = $data['divisi2'];
?>

		<div class="container">
		<div class="row">
            <div class="page-header" style="text-align: center;">
                <h1>Pengumpulan Tugas Compfest</h1>
            </div>
        </div>
      
		<div class="navbar">
		  <div class="navbar-inner">
			<a class="brand" href="http://compfest.web.id/submit/form.php">Home</a>
			<ul class="nav">
			  <li><a href="#panduan">Panduan</a></li>
			  <li><a href="description.php">Deskripsi Tugas</a></li>
			  <li><a target="_blank" href="<?php echo $linkWawancara[$satu]; ?>">Slot Wawancara 1</a></li>
			  <li><a target="_blank" href="<?php echo $linkWawancara[$dua]; ?>">Slot Wawancara 2</a></li>
			  <li><a href="logout.php">Keluar</a></li>
			</ul>
		  </div>
		</div>
		
<?php } ?>		
        <div class="well" style="margin: auto; width: 70%; text-align: center;">
        	<h2>Deskripsi Tugas</h2>
        	<table>
        		<tr>
        			<td>
        				<div class="aw event">Event</div>
		<div class="wa">
			<ul>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/wlwmgVPagm/TUGAS-PUBLISH/EVENT/event.pdf" target="_blank"><b>Tugas Umum Event</b></a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/2t0DJzZ_EV/TUGAS-PUBLISH/EVENT/entertainment.pdf" target="_blank">Entertainment</a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/fnwShdPnw8/TUGAS-PUBLISH/EVENT/playground.pdf" target="_blank">Playground</a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/mr9qh-kAc8/TUGAS-PUBLISH/EVENT/roadshow.pdf" target="_blank">Roadshow</a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/rCFH13lmVh/TUGAS-PUBLISH/EVENT/seminar.pdf" target="_blank">Seminar</a></li>
</ul>

		</div></td>
		<td>
		<div class="aw  hra">HRD</div>
		<div class="wa">
			<ul>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/vl_KQDDIO_/TUGAS-PUBLISH/HRD/TugasOprecUmumBidangHRD.pdf" target="_blank"><b>Tugas Umum HRD</b></a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/312nJ-ZVRJ/TUGAS-PUBLISH/HRD/HRD%20Kompetisi.pdf" target="_blank">HRD Kompetisi</a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/RwHpUypwkP/TUGAS-PUBLISH/HRD/HRD%20Relasi.pdf" target="_blank">HRD Relasi</a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/c4EyKLN4Tk/TUGAS-PUBLISH/HRD/HRD%20Support.pdf" target="_blank">HRD Support</a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/ObzpQ7-H1a/TUGAS-PUBLISH/HRD/hrdEvent.pdf" target="_blank">HRD Event</a></li>
</ul>
		</div>
		</td></tr>
		<tr><td>
		<div class="aw relasi">RELATION</div>
		<div class="wa">
			<ul>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/TTCRwyKY1t/TUGAS-PUBLISH/RELATION/Relasi.pdf" target="_blank"><b>Tugas Umum Relasi</b></a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/FwHnJEX6JQ/TUGAS-PUBLISH/RELATION/Media%20Partner.pdf" target="_blank">Media Partner</a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/pQy5X47iuC/TUGAS-PUBLISH/RELATION/Offline%20Marketing.pdf" target="_blank">Offline Marketing</a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/3t5XQnSYuT/TUGAS-PUBLISH/RELATION/Online%20Marketing.pdf" target="_blank">Online Marketing</a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/j_1TW5SW_s/TUGAS-PUBLISH/RELATION/Press.pdf" target="_blank">Press</a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/aevt4xbdbc/TUGAS-PUBLISH/RELATION/Sponsorship.zip" target="_blank">Sponsorship</a></li>
</ul>

		</div>
		</td>
        		
        			<td>
        				<div class="aw komp">Competition</div>
		<div class="wa">
			<ul>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/EOQXAwxCE2/TUGAS-PUBLISH/COMPETITION/Competition.pdf" target="_blank"><b>Tugas Umum Competition</b></a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/9PmzNdI4mr/TUGAS-PUBLISH/COMPETITION/HTML5.pdf" target="_blank">HTML 5</a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/DRdn-ujnON/TUGAS-PUBLISH/COMPETITION/ITSolution.pdf" target="_blank">ITSolution</a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/gtjEEqW9rv/TUGAS-PUBLISH/COMPETITION/Programming.pdf" target="_blank">Programming</a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/PRJ88A6m5g/TUGAS-PUBLISH/COMPETITION/Robotic.pdf" target="_blank">Robotic</a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/9tI_diXP5L/TUGAS-PUBLISH/COMPETITION/Ultrabook.pdf" target="_blank">Ultrabook</a></li>
<li><a href="https://dl.dropbox.com/s/3xkyfdqssj77skx/blender3D.pdf?dl=1">Blender 3D</a></li>

</ul>
	
		</div>
		</td></tr>
		<tr><td>
		<div class="aw support">Support</div>
		<div class="wa">
			<ul>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/WvSjlYLuZ5/OPEN-RECRUITMENT/SUPPORT/TUGAS/Umun%20Support.pdf" target="_blank"><b>Tugas Umum Support</b></a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/VzO4HQ-VOr/OPEN-RECRUITMENT/SUPPORT/TUGAS/Decoration.pdf" target="_blank">Decoration</a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/gweIWQGcDv/OPEN-RECRUITMENT/SUPPORT/TUGAS/DM.pdf" target="_blank">Design &amp; Multimedia</a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/hyu-qCypeA/OPEN-RECRUITMENT/SUPPORT/TUGAS/Documentation.pdf" target="_blank">Documentation</a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/skb0eJvhXH/OPEN-RECRUITMENT/SUPPORT/TUGAS/Equipment%20%26%20Venue.pdf" target="_blank">Equipment &amp; Venue</a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/Nxaj5xi2ju/OPEN-RECRUITMENT/SUPPORT/TUGAS/F%26B.pdf" target="_blank">Food &amp; Beverages</a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/Dc6ScyjhM2/OPEN-RECRUITMENT/SUPPORT/TUGAS/Fundraising.pdf" target="_blank">Fundraising</a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/cXkizTPLT7/OPEN-RECRUITMENT/SUPPORT/TUGAS/IT%20SUPPORT.pdf" target="_blank">IT Support</a></li>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/puOLlBEg9H/OPEN-RECRUITMENT/SUPPORT/TUGAS/Transportation%20%26%20Security.pdf" target="_blank">Transportation &amp; Security</a></li>


</ul>
		</div>
		</td><td>
		<div class="aw secre">Secretary</div>
		<div class="wa">
			<ul>
<li><a href="https://www.dropbox.com/sh/04ughzsxw8mltj3/39pUV_w4Xx/TUGAS-PUBLISH/SECRETARY/TUGAS%20DIVISI.pdf" target="_blank"><b>Tugas Sekretaris</b></a></li>
</ul>

		</div>
			</td>
        		</tr>
        	</table>
		
		<hr>
			<div id="panduan" style="margin:auto;text-align:left;">
			<h3>Petunjuk Deskripsi Tugas</h3>
			<ul class="wa">
				<li>Diatas adalah file pdf untuk deskripsi tugas pada masing - masing bidang </li>
				<li>Silahkan download sesuai dengan pilihan bidang mu</li>
				<li>Pastikan keluar dari sistem agar menjaga keamanan akun kamu</li>
				<li> Semangaat \^_^/ </li>
			</ul>
			</div>
        </div>
    </div><!-- /container -->
  </body>
</html>