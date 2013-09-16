<div id="hof-header">
</div>

<div class="hof-thumbnail-wrapper"> 
  <span class="hof-box-thumbnail"><a href="#"><a id="cpcklik"><img class="hof-thumbnail" src="http://compfest.web.id/assets/img/competition/logo-cp.png" /></a></span>
  <span class="hof-box-thumbnail"><a href="#"><a id="oacklik"><img class="hof-thumbnail" src="http://compfest.web.id/assets/img/competition/logo-oac.png" /></a></span>
  <span class="hof-box-thumbnail"><a href="#"><a id="roboklik"><img class="hof-thumbnail" src="http://compfest.web.id/assets/img/competition/logo-robotic.png" /></a></span>
  <span class="hof-box-thumbnail"><a href="#"><a id="itsolklik"><img class="hof-thumbnail" src="http://compfest.web.id/assets/img/competition/logo-mobile.png" /></a></span>
  <span class="hof-box-thumbnail"><a href="#"><a id="eduklik"><img class="hof-thumbnail" src="http://compfest.web.id/assets/img/competition/logo-edugames.png" /></a></span>
  <!--span class="hof-box-thumbnail"><a href="#"><img class="hof-thumbnail" src="http://compfest.web.id/assets/img/competition/logo-cac.png" /></a></span-->
</div>

<div id="cpc" class="competition-wrapper">
  <div class="competition-content">
    <br>    
    <h2>
      Finalis Competitive Programming 
    </h2>
    <br>
    <br>
    <div id="mahaklik" class="competition-rulebook-button">
      <a class="comp-button" ><p id="competition-tulisan-button">Mahasiswa</p></a>
    </div>
    <div id="SMAklik" class="competition-rulebook-button">
      <a class="comp-button" ><p id="competition-tulisan-button">SMA</p></a>
    </div>
    <br>
    <br>
    <br> <div id="mahasiswa"><div class="content-head">Mahasiswa</div>
    <?php
        include"connect.php";
        $sql = "SELECT id, nama, inst, logo, anggota1, anggota2, anggota3
        from c_finalist_cp;";
        $result = mysql_query($sql);
        echo "<div class='competition-another-content'>
        <div class='container'>
          <div class='row'>
            <div class='span12'>
              <table id='items' class='table table-bordered table-condensed table-scoreboard'>";
                echo"<thead>
                  <tr>
                    <th class='id-th'>Nomor</th>
                    <th class='scoreboard-institution-logo-th'></th>
                    <th class='scoreboard-name-th'>Nama</th>
                  </tr>
                </thead>";
        while ($row = mysql_fetch_array($result)) {
          $idcpc = $row['id'];
          $namacpc = $row['nama'];
          $instansicpc = $row['inst'];
          $logocpc = $row['logo'];
          $mem1 = $row['anggota1'];
          $mem2 = $row['anggota2'];
          $mem3 = $row['anggota3'];
        
        //create table that will be viewed
                  
        echo "
                <tbody>
                  <tr class='showme'>
                    <td class='id-td' id='showme'>$idcpc</td>
                    <td class='showme'><div class='scoreboard-institution-logo'>
                          <img src='$logocpc' />
                        </div>
                    </td>
                    <td class='showme'><div class='scoreboard-name'>$namacpc</div>
                        <div class='scoreboard-institution'>$instansicpc</div>
                    </td>
                  </tr>
                  <tr class='hideme'>
                    <td colspan='3' class='id-td'>Anggota Tim : <div class='scoreboard-name'> $mem1 | $mem2 | $mem3 </div></td>
                  </tr>
                  
                </tbody>";}
        echo"</table>
            </div>
          </div>
        </div>
      </div>
      "; ?>
      </div>

    <div id="SMA"><div class="content-head">SMA</div>
    <?php
        $sql2 = "SELECT id, nama, sekolah, kota, logo 
        from c_finalist_cp2;";
        $result2 = mysql_query($sql2);
        echo "<div class='competition-another-content'>
        <div class='container'>
          <div class='row'>
            <div class='span12'>
              <table id='items' class='table table-bordered table-condensed table-scoreboard'>";
                echo"<thead>
                  <tr>
                    <th class='id-th'>Nomor</th>
                    <th class='scoreboard-institution-logo-th'></th>
                    <th class='scoreboard-name-th'>Nama</th>
                  </tr>
                </thead>";
        while ($row2 = mysql_fetch_array($result2)) {
          $idcpc2 = $row2['id'];
          $namacpc2 = $row2['nama'];
          $sekolahcpc = $row2['sekolah'];
          $logocpc2 = $row2['logo'];
          $kota = $row2['kota'];
        
        //create table that will be viewed
                  
        echo "
                <tbody>
                  <tr class='showme'>
                    <td class='id-td' id='showme'>$idcpc2</td>
                    <td class='showme'><div class='scoreboard-institution-logo'>
                          <img src='$logocpc2' />
                        </div>
                    </td>
                    <td class='showme'><div class='scoreboard-name'>$namacpc2</div>
                        <div class='scoreboard-institution'>$sekolahcpc</div>
                    </td>
                  </tr>
                  
                </tbody>";}
        echo"</table>
            </div>
          </div>
        </div>
      </div>
      "; ?>
      </div>
    </div>
  </div>

  <div id="robo" class="competition-wrapper">
  <div class="competition-content">
    <br>    
    <h2>
      Finalis Robotics Competition 
    </h2>
    <br>
    <br>
    <div id="SMARoboklik" class="competition-rulebook-button">
      <a class="comp-button" ><p id="competition-tulisan-button">SMA</p></a>
    </div>
    <div id="SMPRoboklik" class="competition-rulebook-button">
      <a class="comp-button" ><p id="competition-tulisan-button">SMP</p></a>
    </div>
    <br>
    <br>
    <br> <div id="SMArobo"><div class="content-head">SMA</div>
    <?php
        include"connect.php";
        $sql3 = "SELECT id, nama, sekolah, logo, anggota1, anggota2, anggota3
        from c_finalist_robosma;";
        $result3 = mysql_query($sql3);
        echo "<div class='competition-another-content'>
        <div class='container'>
          <div class='row'>
            <div class='span12'>
              <table id='items' class='table table-bordered table-condensed table-scoreboard'>";
                echo"<thead>
                  <tr>
                    <th class='id-th'>Nomor</th>
                    <th class='scoreboard-institution-logo-th'></th>
                    <th class='scoreboard-name-th'>Nama</th>
                  </tr>
                </thead>";
        while ($row3 = mysql_fetch_array($result3)) {
          $idrobo = $row3['id'];
          $namarobo = $row3['nama'];
          $sekolahrobo = $row3['sekolah'];
          $logorobo = $row3['logo'];
          $mem1rob = $row3['anggota1'];
          $mem2rob = $row3['anggota2'];
          $mem3rob = $row3['anggota3'];
        
        //create table that will be viewed
                  
        echo "
                <tbody>
                  <tr class='showme'>
                    <td class='id-td' id='showme'>$idrobo</td>
                    <td class='showme'><div class='scoreboard-institution-logo'>
                          <img src='$logorobo' />
                        </div>
                    </td>
                    <td class='showme'><div class='scoreboard-name'>$namarobo</div>
                        <div class='scoreboard-institution'>$sekolahrobo</div>
                    </td>
                  </tr>
                  <tr class='hideme'>
                    <td colspan='3' class='id-td'>Anggota Tim : <div class='scoreboard-name'> $mem1rob $mem2rob $mem3rob </div></td>
                  </tr>
                  
                </tbody>";}
        echo"</table>
            </div>
          </div>
        </div>
      </div>
      "; ?>
      </div>

    <div id="SMProbo"><div class="content-head">SMP</div>
    <?php
        $sql4 = "SELECT id, nama, sekolah, logo, anggota1, anggota2
        from c_finalist_robosmp;";
        $result4 = mysql_query($sql4);
        echo "<div class='competition-another-content'>
        <div class='container'>
          <div class='row'>
            <div class='span12'>
              <table id='items' class='table table-bordered table-condensed table-scoreboard'>";
                echo"<thead>
                  <tr>
                    <th class='id-th'>Nomor</th>
                    <th class='scoreboard-institution-logo-th'></th>
                    <th class='scoreboard-name-th'>Nama</th>
                  </tr>
                </thead>";
        while ($row4 = mysql_fetch_array($result4)) {
          $idrobo2 = $row4['id'];
          $namarobo2 = $row4['nama'];
          $sekolahrobo2 = $row4['sekolah'];
          $logorobo2 = $row4['logo'];
          $mem1rob2 = $row4['anggota1'];
          $mem2rob2 = $row4['anggota2'];
        
        //create table that will be viewed
                  
        echo "
                <tbody>
                  <tr class='showme'>
                    <td class='id-td' id='showme'>$idrobo2</td>
                    <td class='showme'><div class='scoreboard-institution-logo'>
                          <img src='$logorobo2' />
                        </div>
                    </td>
                    <td class='showme'><div class='scoreboard-name'>$namarobo2</div>
                        <div class='scoreboard-institution'>$sekolahrobo2</div>
                    </td>
                  </tr>
                  <tr class='hideme'>
                    <td colspan='3' class='id-td'>Anggota Tim : <div class='scoreboard-name'> $mem1rob2 $mem2rob2 </div></td>
                  </tr>
                  
                </tbody>";}
        echo"</table>
            </div>
          </div>
        </div>
      </div>
      "; ?>
      </div>
    </div>
  </div>

  <div id="oac" class="competition-wrapper">
  <div class="competition-content">
    <br>    
    <h2>
      Finalis Open Animation Competition
    </h2>
    <br>
    <br>
    <br>
    <?php
        include"connect.php";
        $sql5 = "SELECT *
        from c_finalist_oac;";
        $result5 = mysql_query($sql5);
        echo "<div class='competition-another-content'>
        <div class='container'>
          <div class='row'>
            <div class='span12'>
              <table id='items' class='table table-bordered table-condensed table-scoreboard'>";
                echo"<thead>
                  <tr>
                    <th class='id-th'>Nomor</th>
                    <th class='id-th'></th>
                    <th class='scoreboard-name-th'>Nama</th>
                    <th class='scoreboard-name-th'>Role</th>
                  </tr>
                </thead>";
                echo "<tbody>";
                $ii = 1;
        while ($row5 = mysql_fetch_array($result5)) {
          $idoac = $row5['id'];
          $timoac = $row5['tim'];
          $namaoac = $row5['nama'];
          $kotaoac = $row5['kota'];
          $role = $row5['role'];
        
        //create table that will be viewed
                  
        echo "<tr class='showme'>";
	echo      "<td class='id-td' id='showme'>$idoac</td>";
        if($ii == 1 || $ii == 11 || $ii == 21) echo "<td rowspan='10' class='showme'><div class='id-td'>$timoac</div></td>";
        echo 	    "<td class='showme'><div class='scoreboard-name'>$namaoac</div>
                    <div class='scoreboard-institution'>$kotaoac</div></td>
                    <td class='showme'><div class='scoreboard-name'>$role</div></td>
                  </tr>                  
                "; $ii++;}
        echo"</tbody></table>
            </div>
          </div>
        </div>
      </div>
      "; ?>
    </div>
  </div>

  <div id="itsol" class="competition-wrapper hof-special-wrapper">
    <div class="competition-content" style="width:100%;">
	<br>    
	<h2>
	Finalis Mobile IT Solution 
	</h2>
	<br>
	<br>
	<br>
	</div>
	<div id="hof-slider">
		<ul>
			<li class="hof-slide-li">
				<div class="hof-slide-content">
					<div class="hof-slide-video"> <!-- jangan lupa hapus cssnya -->
						<iframe width="100%" height="270" src="//www.youtube.com/embed/PlgsOk0al6M" frameborder="0" allowfullscreen></iframe>
					</div>
					<p class="hof-slide-teamName">Smoony</p>
					<p class="hof-slide-teamUniversity">Alan Yudhahutama | Muhammad Hasan<br>Anugrah Mardi Honesty | Rakhmat Aditirta Prasojo</p>
					<br>
					<p class="hof-slide-teamUniversity" style="font-weight:bold;">Smoony - Smoker's Nanny</p>
					<p class="hof-slide-desc">
						&nbsp;Smoony (Smoker's Nanny) adalah aplikasi mobile yang membantu perokok untuk mengetahui kondisi kesehatan, finansial, dan aktivitas merokoknya. Aplikasi ini bertujuan agar perokok terhindar dari efek lanjutan dr meroko seperti kanker paru, bronkitis, kesulitan finansial, dan sebagainya. 
					</p>
				</div>
			</li>
			<li class="hof-slide-li">
				<div class="hof-slide-content">
					<div class="hof-slide-video"> <!-- jangan lupa hapus cssnya -->
						<iframe width="100%" height="270" src="//www.youtube.com/embed/IkXI4e7BggE" frameborder="0" allowfullscreen></iframe>
					</div>
					<p class="hof-slide-teamName">CreActive</p>
					<p class="hof-slide-teamUniversity">Eric Tandra Wijaya | Vincenteous William<br>Imanuel Titar Nugroho</p>
					<br>
					<p class="hof-slide-teamUniversity" style="font-weight:bold;">ARVIE – Augmented Reality Visual Examination</p>
					<p class="hof-slide-desc">
						&nbsp;Aplikasi ARVIE merupakan aplikasi berbasis Augmented Reality dimana merupakan teknologi yang menempatkan objek-objek virtual (dalam hal ini adalah peralatan pemeriksaan mata) ke dalam gambaran akan dunia nyata yang didapatkan melalui fitur kamera pada perangkat mobile sehingga pengguna dapat merasakan pengalaman pemeriksaan mata layaknya berada di ruang pemeriksaan secara langsung.
					</p>
				</div>
			</li>
			<li class="hof-slide-li">
				<div class="hof-slide-content">
					<div class="hof-slide-video"> <!-- jangan lupa hapus cssnya -->
						<iframe width="100%" height="270" src="//www.youtube.com/embed/k_Jdy_Il1uU" frameborder="0" allowfullscreen></iframe>
					</div>
					<p class="hof-slide-teamName">IDE Alpha</p>
					<p class="hof-slide-teamUniversity">Ignatius Evan Daryanto | Sonny Lazuardi Hermawan<br>Habibie Faried | James Jaya</p>
					<br>
					<p class="hof-slide-teamUniversity" style="font-weight:bold;">BroomLight</p>
					<p class="hof-slide-desc">
						&nbsp;Broomlight adalah aplikasi mobile yang berfungsi untuk menyala-matikan perangkat listrik, melihat penggunaan listrik, mengatur jadwal penggunaan listrik dan chatting untuk menghemat energi listrik.
					</p>
				</div>
			</li>
			<li class="hof-slide-li">
				<div class="hof-slide-content">
					<div class="hof-slide-video"> <!-- jangan lupa hapus cssnya -->
						<iframe width="100%" height="270" src="//www.youtube.com/embed/Wdfl3EgK748" frameborder="0" allowfullscreen></iframe>
					</div>
					<p class="hof-slide-teamName">Tomos</p>
					<p class="hof-slide-teamUniversity">Bagus Rianto | Bahrunnur<br>Satya Nugraha</p>
					<br>
					<p class="hof-slide-teamUniversity" style="font-weight:bold;">Pelesiran</p>
					<p class="hof-slide-desc">
						&nbsp;Pelesiran merupakan aplikasi portal informasi mobile objek wisata sekaligus berbagi fitur review antar wisatawan tentang pariwisata di Yogyakarta. Review-review tersebut dibagi dalam berbagai aspek yaitu tentang tempat rekreasi, wisata kuliner, dan wisata budaya. setiap review menggunakan teknologi natural language form untuk mempermudah mereview setiap tempat wisata dan membuat user tertarik mereview. Dalam aplikasi ini para wisatawan yang sudah berwisata ke Yogyakarta dapat berbagi review dan tips liburan. Hal ini simple tapi sangat efektif. Dengan adanya review dan tips-tips tersebut wisatawan akan dimudahkan untuk berlibur di kota Yogyakarta dengan efektif tanpa ada waktu terbuang percuma hanya untuk sekedar bertanya. Selain itu, Pelesiran memiliki fitur informasi transportasi umum beserta waktu operasionalnya di Yogyakarta. Jika dalam keadaan tidak tersedia, Pelesiran memberikan solusi untuk menyewa mobil dan motor. Penyewaan mobil dan motor terhubung dengan sistem online Pelesiran sehingga wisatawan mengetahui apakah tersedia atau tidak. Dan bisa langsung memesan, hanya tinggal KLIK. Pelesiran juga menyediakan kamus bahasa Jawa untuk memperlancar komunikasi dengan penduduk sekitar. Dengan fitur-fitur tersebut Pelesiran dapat melakukan monetasi aplikasi bersama vendor pariwisata. Ada peribahasa “Malu Bertanya Sesat di Jalan”. Dengan Pelesiran kami ingin mengubah peribahasa tersebut menjadi kurang valid dan mengubah isinya menjadi “Malu Buka Pelesiran, Sesat di Jalan”
					</p>
				</div>
			</li>
			<li class="hof-slide-li">
				<div class="hof-slide-content">
					<div class="hof-slide-video"> <!-- jangan lupa hapus cssnya -->
						<iframe width="100%" height="270" src="//www.youtube.com/embed/cdCdGvRk8yI" frameborder="0" allowfullscreen></iframe>
					</div>
					<p class="hof-slide-teamName">Transys</p>
					<p class="hof-slide-teamUniversity">Abraham Krisnanda | Anasthasia Amelia<br>Edward Samuel | Raymond Lukanta</p>
					<br>
					<p class="hof-slide-teamUniversity" style="font-weight:bold;">buSpot</p>
					<p class="hof-slide-desc">
						&nbsp;Pada kota-kota besar di Indonesia seperti Jakarta, Solo, dan Yogyakarta, busway menjadi sarana transportasi umum andalan bagi penduduknya. Hal tersebut terbukti dari pengguna TransJakarta di Jakarta yang berjumlah lebih dari seratus juta per tahun. Namun, hal ini tidak didukung oleh layanan yang memadai. Seringkali pengguna busway harus menunggu lama di terminal. Hal ini membuat waktu calon penumpang terbuang sia-sia. Transys memberikan sebuah solusi terhadap permasalahan ini. Dengan produk buSpot, sebuah aplikasi transportasi pintar yang dapat memberitahukan letak sebuah bus kepada para penggunanya. Sehingga para pengguna dapat mengetahui estimasi jarak dan waktu yang dibutuhkan oleh satu bus sebelum sampai ke sebuah halte.
					</p>
				</div>
			</li>
			<li class="hof-slide-li">
				<div class="hof-slide-content">
					<div class="hof-slide-video"> <!-- jangan lupa hapus cssnya -->
						<iframe width="100%" height="270" src="//www.youtube.com/embed/Iq1bPmuwY9U" frameborder="0" allowfullscreen></iframe>
					</div>
					<p class="hof-slide-teamName">Satellite</p>
					<p class="hof-slide-teamUniversity">Muhammad Adriyanto | Gita Venesia Setiadi<br>Dahru Dzahaban | Gohan Parningotan</p>
					<br>
					<p class="hof-slide-teamUniversity" style="font-weight:bold;">Yeah Jakarta!</p>
					<p class="hof-slide-desc">
						&nbsp;YeahJakarta menyediakan informasi tentang peristiwa (peristiwa budaya khususnya) yang terjadi di Jakarta dan sekitarnya. Mengembangkan aplikasi ini adalah cara kami untuk mendukung budaya Indonesia untuk melestarikan keberadaannya.
					</p>
				</div>
			</li>
			<li class="hof-slide-li">
				<div class="hof-slide-content">
					<div class="hof-slide-video"> <!-- jangan lupa hapus cssnya -->
						<iframe width="100%" height="270" src="//www.youtube.com/embed/PjjLTnIYiKQ" frameborder="0" allowfullscreen></iframe>
					</div>
					<p class="hof-slide-teamName">Overcode</p>
					<p class="hof-slide-teamUniversity">Marvin Mitchell | Kenneth Mohammad Albani Hakim<br>Muhammad Patria</p>
					<br>
					<p class="hof-slide-teamUniversity" style="font-weight:bold;">Traventure</p>
					<p class="hof-slide-desc">
						&nbsp;Traventure adalah aplikasi yang dibuat dengan tujuan membantu orang dalam menyelesaikan masalah yang berhubungan dengan kendaraan pribadi maupun kendaraan umum. Aplikasi ini memiliki 5 fitur, yaitu : Bengkel (sistem pakar), Jadwal (jadwal keberangkatan kendaraan umum), Permainan, Jurnal (catatan pribadi), dan Phone Book (buku telepon nomor darurat).
					</p>
				</div>
			</li>
			<li class="hof-slide-li">
				<div class="hof-slide-content">
					<div class="hof-slide-video"> <!-- jangan lupa hapus cssnya -->
						<iframe width="100%" height="270" src="//www.youtube.com/embed/Hs0sWKVfYW8" frameborder="0" allowfullscreen></iframe>
					</div>
					<p class="hof-slide-teamName">DIGIT</p>
					<p class="hof-slide-teamUniversity">Adik Istanto | Muhammad Nur Hardyanto<br>Eko Wahyudi | Mohammad Fajar Ainul Bashri</p>
					<br>
					<p class="hof-slide-teamUniversity" style="font-weight:bold;">BEKAM GUIDE</p>
					<p class="hof-slide-desc">
						&nbsp;Bagi Anda yang tidak suka obat, maka aplikasi ini bisa dijadikan solusinya. Aplikasi ini memberikan panduan bekam secara jelas lengkap dengan tips kesehatannya dan juga ada game pelatihannya.
					</p>
				</div>
			</li>
			<li class="hof-slide-li">
				<div class="hof-slide-content">
					<div class="hof-slide-video"> <!-- jangan lupa hapus cssnya -->
						<iframe width="100%" height="270" src="//www.youtube.com/embed/Jjsqag8jfkg" frameborder="0" allowfullscreen></iframe>
					</div>
					<p class="hof-slide-teamName">Tama Handika </p>
					<p class="hof-slide-teamUniversity">Tama Handika | Stefanus Wibowo<br>Steven Alexander | Jorgie Lawira</p>
					<br>
					<p class="hof-slide-teamUniversity" style="font-weight:bold;">Jakarta Mall Wiki</p>
					<p class="hof-slide-desc">
						&nbsp;Jakarta Mall Wiki adalah aplikasi yang bertujuan untuk memudahkan user dalam mencari outlet-outlet yang berada di mall-mall di Jakarta.</p>					</p>
				</div>
			</li>
			<li class="hof-slide-li">
				<div class="hof-slide-content">
					<div class="hof-slide-video"> <!-- jangan lupa hapus cssnya -->
						<iframe width="100%" height="270" src="//www.youtube.com/embed/jD8FeQQDsdQ" frameborder="0" allowfullscreen></iframe>
					</div>
					<p class="hof-slide-teamName">BRAVO</p>
					<p class="hof-slide-teamUniversity">Jouvy Alif Pradewo | Nu'man Naufal<br>Putu Agya Paramartha | Eka Satria S</p>
					<br>
					<p class="hof-slide-teamUniversity" style="font-weight:bold;">Disaster Alert !</p>
					<p class="hof-slide-desc">
						&nbsp;	
						Disaster Alert berfungsi untuk memperingatkan pengguna jika terjadi bencana di sekitar dan memberikan informasi terkini serta tips dan trik ketika bencana terjadi.
					</p>
				</div>
			</li>
			<li class="hof-slide-li">
				<div class="hof-slide-content">
					<div class="hof-slide-video"> <!-- jangan lupa hapus cssnya -->
						<iframe width="100%" height="270" src="//www.youtube.com/embed/EWtVabPFq8w" frameborder="0" allowfullscreen></iframe>
					</div>
					<p class="hof-slide-teamName">Axe_11</p>
					<p class="hof-slide-teamUniversity">Samsul Arifin | Deny Herianto<br>Luqman Hakim | Anugrah Rinaldy</p>
					<br>
					<p class="hof-slide-teamUniversity" style="font-weight:bold;">Food Manager</p>
					<p class="hof-slide-desc">
						&nbsp;Food manager adalah aplikasi yg memberikan alternatif untuk melakukan manajemen pola hidup sehat dengan mengkonsumsi makanan-makanan sehat bagi penderita penyakit jangka panjang atau degregatif. Aplikasi ini dibuat dengn tujuan memanajemen makanan yg harus dikonsumsi agar penyakit yg diderita tidak membahayakan pada user.
					</p>
				</div>
			</li>
			<li class="hof-slide-li">
				<div class="hof-slide-content">
					<div class="hof-slide-video"> <!-- jangan lupa hapus cssnya -->
						<iframe width="100%" height="270" src="//www.youtube.com/embed/xHk2zAza6eQ" frameborder="0" allowfullscreen></iframe>
					</div>
					<p class="hof-slide-teamName">Mamake</p>
					<p class="hof-slide-teamUniversity">Muhammad Nasrurrohman | Rahmanda Wibowo<br>Maulana Rizal Ibrahim</p>
					<br>
					<p class="hof-slide-teamUniversity" style="font-weight:bold;">Gizr</p>
					<p class="hof-slide-desc">
						&nbsp;Gizr : aplikasi yang membantu user memiliki gaya hidup sehat, bugar, serta menjalaninya dengan cara yang menyenangkan, menantang dan memotivasi seperti bermain game.
					</p>
				</div>
			</li>
		</ul>
		
		<div id="hof-nav" class="navi">
			<a class="nav-left" data-dir="prev" href="#">	<img src="<?php echo base_url(); ?>assets/img/competition/left-hof.png" /></a>
			<a class="nav-right" data-dir="next" href="#">	<img src="<?php echo base_url(); ?>assets/img/competition/right-hof.png" /></a>
		</div>
	</div>
    </div>
 

  <div id="edu" class="competition-wrapper hof-special-wrapper">
    <div class="competition-content" style="width:100%;">
    <br>    
    <h2>
    Finalis Edugames Challenge 
    </h2>
    <br>
    <br>
  <br>
    </div>
    <div id="huf-slider">
    <ul>
      <li class="huf-slide-li">
        <div class="huf-slide-content">
          <div class="huf-slide-video"> <!-- jangan lupa hapus cssnya -->
            <iframe width="100%" height="270" src="//www.youtube.com/embed/kkjMnKpl-hQ" frameborder="0" allowfullscreen></iframe>
          </div>
          <p class="huf-slide-teamName">FD2 Games</p>
          <p class="huf-slide-teamUniversity">Wildan Anky Putra | Rifqi Al Fatih<br>Thirafi Dide</p>
          <br>
          <p class="huf-slide-teamUniversity" style="font-weight:bold;">Djuhan</p>
          <p class="huf-slide-desc">
            Pemain akan bermain sekaligus diajarkan persamaan matematika secara cepat dan tepat tetapi tetap menyenangkan dan mengasyikkan, yaitu dengan mencampurkannya dengan permainan bergenre minigames yang ringan dan menyenangkan.
          </p>
        </div>
      </li>
      <li class="huf-slide-li">
        <div class="huf-slide-content">
          <div class="huf-slide-video"> <!-- jangan lupa hapus cssnya -->
            <iframe width="100%" height="270" src="//www.youtube.com/embed/5_oovSQFdEo" frameborder="0" allowfullscreen></iframe>
          </div>
          <p class="huf-slide-teamName">Arrow</p>
          <p class="huf-slide-teamUniversity">Haris Praba Aditya | Mohamad Yusuf Bachtiar<br>Nanang Arsyad Alfatich | Reza Faiz Atta Rahman</p>
          <br>
          <p class="huf-slide-teamUniversity" style="font-weight:bold;">MatematIkan</p>
          <p class="huf-slide-desc">
              MatematIkan adalah game dan pemain dituntut aktif dalam memainkan game. Dengan tema Matematika dan Ikan, pemain dibawa ke dalam game dimana pemain harus menangkap ikan &amp; menghitung agar mendapat hasil yang dituju.
          </p>
        </div>
      </li>
      <li class="huf-slide-li">
        <div class="huf-slide-content">
          <div class="huf-slide-video"> <!-- jangan lupa hapus cssnya -->
            <iframe width="100%" height="270" src="//www.youtube.com/embed/rVfUnRpvHb4" frameborder="0" allowfullscreen></iframe>
          </div>
          <p class="huf-slide-teamName">Corner Of Developer</p>
          <p class="huf-slide-teamUniversity">Andika Dyan Ramaditya | Handoko Dyan Aditya <br> Mahisa Dyan Diptya</p>
          <br>
          <p class="huf-slide-teamUniversity" style="font-weight:bold;">Diseases Toucher</p>
          <p class="huf-slide-desc">
            Game ini dirancang guna mengenalkan kepada kita tentang berbagai macam virus, bakteri dan bahanya terhadap tubuh kita.
          </p>
        </div>
      </li>
      <li class="huf-slide-li">
        <div class="huf-slide-content">
          <div class="huf-slide-video"> <!-- jangan lupa hapus cssnya -->
            <iframe width="100%" height="270" src="//www.youtube.com/embed/bo4GuW6thw8" frameborder="0" allowfullscreen></iframe>
          </div>
          <p class="huf-slide-teamName">DeadlineStudio</p>
          <p class="huf-slide-teamUniversity">Mochammad Dikra Prasetya | Tito D Kesumo Siregar <br> Muhammad Rivai Ramandhani | Melinda Wardiman</p>
          <br>
          <p class="huf-slide-teamUniversity" style="font-weight:bold;">Tebak Nusantara</p>
          <p class="huf-slide-desc">
               Tebak Nusantara  adalah permainan  tebak-tebakan seputar pengetahuan umum dari seluruh pelosok 
Nusantara.  Dengan memainkan permainan ini pemain diharapkan dapat mempelajari berbagai 
pengetahuan tentang Indonesia secara interaktif dan menyenangkan. 
          </p>
        </div>
      </li>
      <li class="huf-slide-li">
        <div class="huf-slide-content">
          <div class="huf-slide-video"> <!-- jangan lupa hapus cssnya -->
            <iframe width="100%" height="270" src="//www.youtube.com/embed/Og8OGol0uyk" frameborder="0" allowfullscreen></iframe>
          </div>
          <p class="huf-slide-teamName">Electric Team</p>
          <p class="huf-slide-teamUniversity">Hendrianto Kusuma | Aditiya Anwar <br> Moch Fajar Hillman | Pramita Firnanda</p>
          <br>
          <p class="huf-slide-teamUniversity" style="font-weight:bold;">Lighten</p>
          <p class="huf-slide-desc">
            Lighten adalah sebuah game dimana player utama yang berupa manusia listrik harus menghidupkan semua lampu dan beterei kemudian mengendalikannya tersusun disebuah rangkaian arus listrik dimana terdapat beberapa variasi jumlah beterei dan lampu disetiap rangkaian. Selain itu juga ada nilai dari setiap lampu dan baterei yang harus dicocokan agar bisa menyala.
          </p>
        </div>
      </li>
      <li class="huf-slide-li">
        <div class="huf-slide-content">
          <div class="huf-slide-video"> <!-- jangan lupa hapus cssnya -->
            <iframe width="100%" height="270" src="//www.youtube.com/embed/ZKXgxFkwTYI" frameborder="0" allowfullscreen></iframe>
          </div>
          <p class="huf-slide-teamName">35FM Studio</p>
          <p class="huf-slide-teamUniversity">Michael Ingga Gunawan | Faiz Ilham <br> Setyo Legowo | Eva Afifah</p>
          <br>
          <p class="huf-slide-teamUniversity" style="font-weight:bold;">Traveler's Diary</p>
          <p class="huf-slide-desc">
            &nbsp;Traveler’s Diary adalah sebuah game linguistik berupa merangkai kata-kata menjadi kalimat dalam bahasa inggris serta menambah pengetahuan dan wawasan tentang Indonesia secara interaktif dan menarik.
          </p>
        </div>
      </li>
      <li class="huf-slide-li">
        <div class="huf-slide-content">
          <div class="huf-slide-video"> <!-- jangan lupa hapus cssnya -->
            <iframe width="100%" height="270" src="//www.youtube.com/embed/_rFWMM-YCGE" frameborder="0" allowfullscreen></iframe>
          </div>
          <p class="huf-slide-teamName">Ganesha Team</p>
          <p class="huf-slide-teamUniversity">Fabianus Bayu Setiabudi | Deddy Unggul Wirawan<br>Andrew Julius Sutresno | Natanael Edoni Chandra</p>
          <br>
          <p class="huf-slide-teamUniversity" style="font-weight:bold;">Eat&Run</p>
          <p class="huf-slide-desc">
            &nbsp;Eat & Run adalah game simulasi Food Web yang mengambil setting di Taman Nasional Tanjung Puting, Kalimantan. Pada game ini, materi mengenai FOod Web disampaikan melalui pengalaman bermain sebagai salah satu hewan di ekosistem tersebut. Hewan yang dapat dimainkan adalah Clouded Leopard, Orangutan,Bekantan dan Kancil.
          </p>
        </div>
      </li>
      <li class="huf-slide-li">
        <div class="huf-slide-content">
          <div class="huf-slide-video"> <!-- jangan lupa hapus cssnya -->
            <iframe width="100%" height="270" src="//www.youtube.com/embed/7hSwRVSF_4A" frameborder="0" allowfullscreen></iframe>
          </div>
          <p class="huf-slide-teamName">MADFAL</p>
          <p class="huf-slide-teamUniversity">Muhammad Adam Fadhilah</p>
          <br>
          <p class="huf-slide-teamUniversity" style="font-weight:bold;">Skalaan</p>
          <p class="huf-slide-desc">
            &nbsp;Karena game dengan hitung - hitungan sudah terlalu mainstream, maka game edukasi Android berjenis puzzle yang unik ini cocok untuk dijadikan sebagai sarana edukasi dalam daya tangkap pemain. pemain cukup mengatur skala objek sesuai ukuran yang ada hanya dengan men-TAP nya saja, dan nanti akan dicek seberapa besar presentase kemiripannya. game yang simple. tardapat 20 level, makin tinggi level makin banyak objek yang harus di TAP.
          </p>
        </div>
      </li>
      <li class="huf-slide-li">
        <div class="huf-slide-content">
          <div class="huf-slide-video"> <!-- jangan lupa hapus cssnya -->
            <iframe width="100%" height="270" src="//www.youtube.com/embed/uK8erxC9c2w" frameborder="0" allowfullscreen></iframe>
          </div>
          <p class="huf-slide-teamName">Mavilion</p>
          <p class="huf-slide-teamUniversity">Muhammad Aulia Firmansyah</p>
          <br>
          <p class="huf-slide-teamUniversity" style="font-weight:bold;">Magical Firefly</p>
          <p class="huf-slide-desc">
            &nbsp;Ikuti petualangan Ray & Light di pulau Lumina. Gunakan pengetahuan matematika dan tangkap kunang-kunang ajaib. Gameplay yang asik dan cerita yang unik menanti.
          </p>
        </div>
      </li>
      <li class="huf-slide-li">
        <div class="huf-slide-content">
          <div class="huf-slide-video"> <!-- jangan lupa hapus cssnya -->
            <iframe width="100%" height="270" src="//www.youtube.com/embed/FmaH7s1Ygfw" frameborder="0" allowfullscreen></iframe>
          </div>
          <p class="huf-slide-teamName">Raionstudio</p>
          <p class="huf-slide-teamUniversity">Andriyanto | Nadia Previani Rohmawati<br>Randi Dwi Nandra</p>
          <br>
          <p class="huf-slide-teamUniversity" style="font-weight:bold;">Petualangan Andi</p>
          <p class="huf-slide-desc">
            &nbsp;
			Petualangan Andi adalah sebuah game edukasi yang mampu mengajak anak untuk belajar. Pembelajaran menggunakan media game menjadi cara pendekatan belajar
    		</p>
        </div>
      </li>
      <li class="huf-slide-li">
        <div class="huf-slide-content">
          <div class="huf-slide-video"> <!-- jangan lupa hapus cssnya -->
            <iframe width="100%" height="270" src="//www.youtube.com/embed/KegwHyqAqaE" frameborder="0" allowfullscreen></iframe>
          </div>
          <p class="huf-slide-teamName">Wonderworks Studio</p>
          <p class="huf-slide-teamUniversity">M. R. Al-ghazali | Rido Ramadan<br>Faisal Ibrahim Hadiputra | Septiana Wahyudianingsih</p>
          <br>
          <p class="huf-slide-teamUniversity" style="font-weight:bold;">Niew's Tale</p>
          <p class="huf-slide-desc">
            &nbsp;Niew’s Tale adalah game tentang kucing. Dalam game ini, pemain akan mengetahui banyak hal unik dan menarik mengenai kucing, serta terpacu kreativitasnya melalui permainan berburu yang menyenangkan!



          </p>
        </div>
      </li>
      
    </ul>
    
    <div id="huf-nav" class="navi">
      <a class="nav-left" data-dir="prev" href="#"> <img src="<?php echo base_url(); ?>assets/img/competition/left-hof.png" /></a>
      <a class="nav-right" data-dir="next" href="#">  <img src="<?php echo base_url(); ?>assets/img/competition/right-hof.png" /></a>
    </div>
  </div>
    <br>
    <br>
  </div>

  <script type="text/javascript">
  $(document).ready(function() {
    $("#cpc").show();
    $("#robo").hide();
    $("#SMA").hide();
    $("#SMProbo").hide();
    $("#oac").hide();
    $("#edu").hide();
    $("#itsol").hide();

      $("#SMARoboklik").click(function(){
      $("#SMProbo").hide();
      $("#SMArobo").show();
      });

      $("#SMPRoboklik").click(function(){
      $("#SMProbo").show();
      $("#SMArobo").hide();
      });

      $("#mahaklik").click(function(){
      $("#SMA").hide();
      $("#mahasiswa").show();
      });

      $("#SMAklik").click(function(){
      $("#SMA").show();
      $("#mahasiswa").hide();
      });

      $("#cpcklik").click(function(){
      $("#cpc").show();
      $("#robo").hide();
      $("#oac").hide();
      $("#edu").hide();
      $("#itsol").hide();
      });

      $("#oacklik").click(function(){
      $("#cpc").hide();
      $("#robo").hide();
      $("#oac").show();
      $("#edu").hide();
      $("#itsol").hide();
      });

      $("#roboklik").click(function(){
      $("#cpc").hide();
      $("#robo").show();
      $("#oac").hide();
      $("#edu").hide();
      $("#itsol").hide();
      });

      $("#itsolklik").click(function(){
      $("#cpc").hide();
      $("#robo").hide();
      $("#oac").hide();
      $("#edu").hide();
      $("#itsol").show();
      });

      $("#eduklik").click(function(){
      $("#cpc").hide();
      $("#robo").hide();
      $("#oac").hide();
      $("#edu").show();
      $("#itsol").hide();
      });

        $('.hideme').hide();
        $('.showme').click(function() {
        $(this).parent().next('.hideme').toggle(1000);
        return false;        
        });
     
  }); 
      

  </script>
  <link type="text/css" href="http://www.compfest.web.id/assets/cp/assets/css/style.css" rel="stylesheet"/>
  <script type="text/javascript" src="http://www.compfest.web.id/assets/cp/assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="http://www.compfest.web.id/assets/cp/assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/halloffame.css" type="text/css" media="screen" />
  <script src="<?php echo base_url(); ?>assets/js/halloffame.js" type="text/javascript"></script>