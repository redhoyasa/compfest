<?php if(!defined('BASEPATH')) exit('No Direct script access allowed');

class Status {
	
	function seminar_status($str) {
		switch($str) {
			case 0 : return "Sedang mendaftar";
			case 1 : return "Terdaftar";
			case 2 : return "Menunggu Konfirmasi";
			case 3 : return "Hadir";
			case 4 : return "Menolak";
		}
	}

	function team_status($str) {
		switch($str) {
			case 0 : return "Tim Terdaftar";
			case 1 : return "Profil Anggota Tim Lengkap";
			case 2 : return "Telah di-finalisasi";
			case 3 : return "Ditolak";
		}
	}
}
?>