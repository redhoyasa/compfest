<?php
	$token = $this->uri->segment('4');
	$id_user = $this->uri->segment('3');
	echo "Hai, $name! anda telah terdaftar sebagai peserta Seminar CompFest 2013 untuk seminar<br>";
	foreach ($seminar as $s) {
		echo "" . $this->seminar_model->getSeminarById($s->id_seminar)->name . "<br>";
	}
	echo "Apakah data tersebut sudah benar?<br>";
?>
<a href="<?php echo site_url('/seminar/attend/' . $id_user . '/' . $token);?>">Hadir</a><br>
<a href="<?php echo site_url('/seminar/cancel/' . $id_user . '/' . $token);?>">Batalkan</a>

</div>
</section>
