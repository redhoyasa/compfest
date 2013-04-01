<?php
	$token = $this->uri->segment('4');
	$id_user = $this->uri->segment('3');
	echo "Hai, $nama! anda sedang dalam proses pendaftaran seminar compfest 5 dengan seminar<br>";
	foreach ($seminar as $s) {
		echo "" . $this->seminar_model->getSeminarById($s->id_seminar)->name . " dengan motivasi " . $s->motivation . '<br>';
	}
	echo "Apakah data tersebut sudah benar?<br>";
?>
<a href="<?php echo site_url('/seminar/finish/' . $id_user . '/' . $token);?>">Kirim Pendaftaran Seminar</a><br>
<a href="<?php echo site_url('/seminar/refund/' . $id_user . '/' . $token);?>">Batalkan</a>

</div>
</section>
