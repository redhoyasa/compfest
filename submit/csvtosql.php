<?php
	include 'connection.php';
	
	
	$fh = fopen("oprec.csv","r");
	$row = 0;
	while(!feof($fh)) {
		$line = fgets($fh);
		$r = explode(",",$line);
			$waktu_daftar = $r[0];
			$nama = $r[1];
			$npm = $r[2];
			$hp = $r[3];
			$email = $r[4];
			$divisi1 = $r[5];
			$divisi2 = $r[6];
			
			$query = mysql_query("INSERT INTO register(waktu_daftar, nama, npm, hp, email, divisi1, divisi2, tugas, timestamp) 
						VALUES('$waktu_daftar', '$nama', '$npm', '$hp', '$email', '$divisi1', '$divisi2', '0','')");
			
			echo "$row - $nama ";
			if($query)
				echo "telah dimasukan <br>";
			else 
				echo "gagal <Br>";
		$row++;
	}
		fclose($fh);

?>