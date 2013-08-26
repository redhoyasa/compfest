<?php
session_start();
include 'connection.php';
if(!isset($_SESSION['npm'])) {
	header("location:index.php");
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

<script>


</script>

<body data-spy="scroll" data-target=".subnav" data-offset="50">
   
        <div class="well" style="margin: auto; width: 70%; text-align: center;">
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'DropboxUploader.php';
    try {
		$query = mysql_query("SELECT * FROM register WHERE npm = $_SESSION[npm]");
		while($data = mysql_fetch_array($query)) {
			$nama = $data['nama'];
			$divisi1 = $data['divisi1'];
			$b = explode(" - ", $divisi1);
			$bidang1 = $b[0];
			
			$divisi2 = $data['divisi2'];
			$b = explode(" - ", $divisi2);
			$bidang2 = $b[0];
		}
		/*
		 * UNTUK FILE TUGAS 1
		 */
	
		$ex = explode(".",$_FILES['file']['name']);
		$extension = $ex[count($ex) - 1]; 
		$types = array('rar','zip');

		if (!in_array($extension, $types)) {
			throw new Exception('Format file Tugas Divisi 1 tidak diizinkan, pastikan anda telah mengkompres dalam bentuk zip atau rar');
		}
        if ($_FILES['file']['error'] !== UPLOAD_ERR_OK)
            throw new Exception('File Tugas Divisi 1 tidak dapat diupload dari komputer kamu');

        $tmpDir = uniqid('/tmp/DropboxUploader');
        if (!mkdir($tmpDir))
            throw new Exception('Upload Tugas Divisi 1 gagal secara teknis');

        if ($_FILES['file']['name'] === "")
            throw new Exception('Nama file Tugas Divisi 1 tidak didukung peramban');

        $tmpFile = $tmpDir.'/'.$nama.' ('.$divisi1.') pilihan1'.'.'.$extension;
        if (!move_uploaded_file($_FILES['file']['tmp_name'], $tmpFile))
            throw new Exception('Tidak dapat mengupload file Tugas Divisi 1');
			
			
			/*
		 * UNTUK FILE TUGAS BIDANG 1
		 */
	
		$ex = explode(".",$_FILES['file-bidang']['name']);
		$extension = $ex[count($ex) - 1]; 
		$types = array('rar','zip');

		if (!in_array($extension, $types)) {
			throw new Exception('Format file Tugas Bidang 1 tidak diizinkan, pastikan anda telah mengkompres dalam bentuk zip atau rar');
		}
        if ($_FILES['file-bidang']['error'] !== UPLOAD_ERR_OK)
            throw new Exception('File Tugas Bidang 1 tidak dapat diupload dari komputer kamu');

        $tmpDirBidang = uniqid('/tmp/DropboxUploader');
        if (!mkdir($tmpDirBidang))
            throw new Exception('Upload Tugas Bidang 1 gagal secara teknis');

        if ($_FILES['file-bidang']['name'] === "")
            throw new Exception('Nama file Tugas Bidang 1 tidak didukung peramban');

        $tmpFileBidang = $tmpDirBidang.'/'.$nama.' ('.$bidang1.') pilihan1'.'.'.$extension;
        if (!move_uploaded_file($_FILES['file-bidang']['tmp_name'], $tmpFileBidang))
            throw new Exception('Tidak dapat mengupload file Tugas Bidang 1');
		
		
		if($divisi1 != $divisi2) {
		/*
		 * UNTUK FILE TUGAS 2
		 */
		$ex = explode(".",$_FILES['file2']['name']);
		$extension = $ex[count($ex) - 1]; 
		$types = array('rar','zip');

		if (!in_array($extension, $types)) {
			throw new Exception('Format file Tugas Divisi 2 tidak diizinkan, pastikan anda telah mengkompres dalam bentuk zip atau rar');
		}
        if ($_FILES['file2']['error'] !== UPLOAD_ERR_OK)
            throw new Exception('File Tugas Divisi 2 tidak dapat diupload dari komputer kamu');

        $tmpDir2 = uniqid('/tmp/DropboxUploader');
        if (!mkdir($tmpDir2))
            throw new Exception('Upload Tugas Divisi 2 gagal secara teknis');

        if ($_FILES['file2']['name'] === "")
            throw new Exception('Nama file Tugas Divisi 2 tidak didukung peramban');

        $tmpFile2 = $tmpDir2.'/'.$nama.' ('.$divisi2.') pilihan2'.'.'.$extension;
        if (!move_uploaded_file($_FILES['file2']['tmp_name'], $tmpFile2))
            throw new Exception('Tidak dapat mengupload file Tugas Divisi 2');
			
		/*
		 * UNTUK FILE TUGAS BIDANG 2
		 */
	
		$ex = explode(".",$_FILES['file2-bidang']['name']);
		$extension = $ex[count($ex) - 1]; 
		$types = array('rar','zip');

		if (!in_array($extension, $types)) {
			throw new Exception('Format file Tugas Bidang 2 tidak diizinkan, pastikan anda telah mengkompres dalam bentuk zip atau rar');
		}
        if ($_FILES['file2-bidang']['error'] !== UPLOAD_ERR_OK)
            throw new Exception('File Tugas Bidang 2 tidak dapat diupload dari komputer kamu');

        $tmpDir2Bidang = uniqid('/tmp/DropboxUploader');
        if (!mkdir($tmpDir2Bidang))
            throw new Exception('Upload Tugas Bidang 2 gagal secara teknis');

        if ($_FILES['file2-bidang']['name'] === "")
            throw new Exception('Nama file Tugas Bidang 2 tidak didukung peramban');

        $tmpFile2Bidang = $tmpDir2Bidang.'/'.$nama.' ('.$bidang2.') pilihan2'.'.'.$extension;
        if (!move_uploaded_file($_FILES['file2-bidang']['tmp_name'], $tmpFile2Bidang))
            throw new Exception('Tidak dapat mengupload file Tugas Bidang 2');

		}
		
		
        //Upload file
		$uploader = new DropboxUploader('zaka.zaidan@ui.ac.id', 'hal0hal0bandung');
		
		//Address upload gua ubah biar rapih , Zaka
		$xx = explode(" - ",$divisi1);
		$yy = explode(" - ",$divisi2);
		$uploader->upload($tmpFile, 'COMPFEST2013/Tugas Oprec/' .$bidang1.'/'.$xx[1].'/pilihan1');
		$uploader->upload($tmpFileBidang, 'COMPFEST2013/Tugas Oprec/Bidang/' .$bidang1.'/pilihan1');
		
		if($divisi1 != $divisi2) {
			$uploader->upload($tmpFile2, 'COMPFEST2013/Tugas Oprec/' .$bidang2.'/'.$yy[1].'/pilihan2');
			$uploader->upload($tmpFile2Bidang, 'COMPFEST2013/Tugas Oprec/Bidang/' .$bidang2.'/pilihan2');
		}
		if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
		$date = date("d-M-Y H:i:s");
		mysql_query("UPDATE register SET tugas = 1, timestamp = '$date' WHERE npm = $_SESSION[npm]");
    } catch(Exception $e) {
		echo "<h2>Upload Gagal</h2><span class=\"alert alert-error\">" . htmlspecialchars($e->getMessage()) . "</span><hr>";
    }

    //bersih-bersih
    if (isset($tmpFile) && file_exists($tmpFile))
        unlink($tmpFile);

    if (isset($tmpDir) && file_exists($tmpDir))
        rmdir($tmpDir);
		
	if (isset($tmpFile2) && file_exists($tmpFile2))
        unlink($tmpFile2);

    if (isset($tmpDir2) && file_exists($tmpDir2))
        rmdir($tmpDir2);
		
		
	if (isset($tmpFileBidang) && file_exists($tmpFileBidang))
        unlink($tmpFileBidang);

    if (isset($tmpDirBidang) && file_exists($tmpDirBidang))
        rmdir($tmpDirBidang);
		
	if (isset($tmpFile2Bidang) && file_exists($tmpFile2Bidang))
        unlink($tmpFile2Bidang);

    if (isset($tmpDir2Bidang) && file_exists($tmpDir2Bidang))
        rmdir($tmpDir2Bidang);
		
				
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
		"Support - Food & Beverages" => "http://konsumsi.youcanbook.me/",
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
			<a class="brand" href="#">Home</a>
			<ul class="nav">
			  <li><a href="#panduan">Panduan</a></li>
			  <li><a href="description.php">Deskripsi Tugas</a></li>
			  <li><a target="_blank" href="<?php echo $linkWawancara[$satu]; ?>">Slot Wawancara 1</a></li>
			  <li><a target="_blank" href="<?php echo $linkWawancara[$dua]; ?>">Slot Wawancara 2</a></li>
			  <li><a href="logout.php">Keluar</a></li>
			</ul>
		  </div>
		</div>

<?php

		echo "<h3>Terima Kasih atas partisipasinya!</h3><br>";

		if($data['tugas'] == 1) {
				echo "<span class=\"alert alert-success\">Tugas berhasil dikirim (kiriman terakhir : $data[timestamp])</span>";
			} else {
				echo "<span class=\"alert\">Tugas kamu belum dikirim, jangan sampai lupa mengerjakan ya :)</span>";
		}
?>
               
		<hr>
			<form class="form-horizontal" method="post" enctype="multipart/form-data">
			  <div class="control-group">
				<label class="control-label">Nama</label>
				<div class="controls">
				  <input type="text" placeholder="<?php echo $data['nama']; ?>" disabled>	
				  
				</div>
			  </div>
			  
			  <div class="control-group">
				<label class="control-label">NPM</label>
				<div class="controls">
				  <input type="text" placeholder="<?php echo $data['npm']; ?>" disabled>
				</div>
			  </div>
			 
			<?php
			if($data['tugas'] == 1) {
				echo "";
			}
			?>
			<hr>
			<span class="alert">File tugas wajib dikompresi dengan format zip/rar</span>
			<hr>
			  <div class="control-group">
				<label class="control-label">Divisi 1</label>
				<div class="controls">
				  <input type="text" placeholder="<?php echo $data['divisi1']; ?>" disabled>
				</div>
			  </div>
			  
			  <div class="control-group">
				<label class="control-label">Tugas Divisi 1</label>
				<div class="controls">
				  <input type="file" name="file" />
				</div>
			  </div>
			  
			  <div class="control-group">
				<label class="control-label">Tugas Bidang 1</label>
				<div class="controls">
				  <input type="file" name="file-bidang" />
				</div>
			  </div>
			<?php
			    if($data['divisi1'] != $data['divisi2']) {
			?> 
			<hr> 
			  <div class="control-group">
				<label class="control-label">Divisi 2</label>
				<div class="controls">
				  <input type="text" placeholder="<?php echo $data['divisi2'];?>" disabled>
				</div>
			  </div>
			  
			  <div class="control-group">
				<label class="control-label">Tugas Divisi 2</label>
				<div class="controls">
				  <input type="file" name="file2" />
				</div>
			  </div>
			  
			  <div class="control-group">
				<label class="control-label">Tugas Bidang 2</label>
				<div class="controls">
				  <input type="file" name="file2-bidang" />
				</div>
			  </div>
			  
			<?php
			   }
			?>
			<hr>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn">Kirim</button>
				</div>
			  </div>
			</form>
<?php 
		break;
		}
?>
		<hr>
			<div id="panduan" style="text-align:left;">
			<h3>Tata cara pengiriman tugas</h3>
			<ul>
				<li>Pastikan tugas kamu sudah dalam bentuk zip/rar (selain dua jenis file itu dilarang)</li>
				<li>Dalam satu kali pengiriman, kamu harus mengupload kedua tugas kamu (tidak boleh salah satu tugas tidak dikirim)</li>
				<li>Jika ada peringatan "Tugas berhasil dikirim ... " artinya tugas kamu telah kami terima</li>
				<li>Jika saat mengupload, menghasilkan tampilan seperti ini <br><img src="ss.png" width="400"><br>maka harap tunggu, karena jika dihentikan, tugas tidak akan terkirim dan harus mengupload ulang. Proses ini memang sangat lama tergantung besar file dan koneksi internet</li>
				<li>Dan jika sudah dikirim, kami tetap bisa mengupload ulang tugas kamu seperti langkah diatas</li>
				<li>Pastikan keluar dari sistem agar menjaga keamanan akun kamu</li>
				<li> \^_^/ </li>
			</ul>
			</div>
			
			<div class="panduan" style="margin:auto;text-align:left;">
			<h3>Petunjuk Pengisian Slot Wawancara</h3>
			<ul class="wa">
				<li>Wawancara dilakukan dari tanggal 28 Januari - 13 Februari</li>
				<li>Untuk jadwal 11 Februari - 13 Februari akan disesuaikan dengan jadwal kuliah terlebih dahulu</li>
				<li>Klik divisi yang kamu pilih :3</li>
				<li>Klik di jadwal yang kamu inginkan</li>
				<li>Isi form</li>
				<li>Setelah <i>booking</i>, pastikan anda mendapat notifikasi di e-mail anda :)</li>
			</ul>
			</div>
			
			
			<div id="cp" style="margin:auto;text-align:left;">
			<h3>Contact Person</h3>
			<ul class="wa">
				<li>Secretary : Hurul Aini (085213250652)</li>
				<li>Event : Audry Pragita (081905158000)</li>
				<li>Relation : Azza Firdaus (081281834783)</li>
				<li>HRD : Aliviani Ayu (08567001366)</li>
				<li>Competition : Rasmunandar Rustam (089638722798)</li>
				<li>Support : Febrian Adhitama (085716500207)</li>
			</ul>
			</div>
        </div>
    </div><!-- /container -->
  </body>
</html>