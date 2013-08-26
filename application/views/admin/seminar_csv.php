<?php
/************
* Terinspirasi dari https://gist.github.com/apocratus/936404
* Dimodifikasi oleh IT Support Compfest 2013
*************/

// filename for export
$csv_filename = 'seminar'.date('Y-m-d').'.csv';
 
// hasilnya nich
$output = '';

// init
$output.='NAME|E-MAIL|PHONE|TWITTER|MOTIVATION1|MOTIVATION2|MOTIVATION3|MOTIVATION4|MOTIVATION5|MOTIVATION6|MOTIVATION7|MOTIVATION8';
$output.= '
';



// mengisi variabel output
foreach ($seminar as $s) {

	$output.=$s->name.'|'.$s->email.'|'.$s->phone.'|'.$s->twitter;

	$motivation = $this->seminar_model->getSeminarUserById($s->id_seminar_user);

	$c = 0;

	//tulis motivasi
	for ($i = 1; $i <= 8; $i++) {

		if (isset($motivation[$c]->id_seminar))	{ 
			$id_seminar = $motivation[$c]->id_seminar;
			$motif = $motivation[$c]->motivation;
		}
				
		if ($id_seminar == $i) {
				$output.='|'.str_replace("\n", '', $motif);
				$c++;
		}else {
			$output.='|-';
		}

	}
	//new line
	$output.= '
';

}
  
// Export the data and prompt a csv file for download
header("Content-type: text/x-csv");
header("Content-Disposition: attachment; filename=".$csv_filename."");
echo($output);
?>