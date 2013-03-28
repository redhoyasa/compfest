<?php if(!defined('BASEPATH')) exit('No Direct script access allowed');

class Status {
	
	function seminar_status($str) {
		switch($str) {
			case 0 : return '<span class="label">Sedang mendaftar</span>';
			case 1 : return '<span class="label label-info">Terdaftar</span>';
			case 2 : return '<span class="label label-important">Menunggu Konfirmasi</span>';
			case 3 : return '<span class="label label-success">Hadir</span>';
			case 4 : return '<span class="label label-inverse">Menolak</span>';
		}
	}

	function team_status($str) {
		switch($str) {
			case 0 : return '<span class="label">Tim Terdaftar</span>';
			case 1 : return '<span class="label label-info">Profil Anggota Tim Lengkap</span>';
			case 2 : return '<span class="label label-success">Telah di-finalisasi</span>';
			case 3 : return '<span class="label label-inverse">Ditolak</span>';
		}
	}
}
?>