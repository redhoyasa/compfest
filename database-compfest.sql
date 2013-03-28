-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 28. Maret 2013 jam 21:05
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `orms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `c_admin`
--

CREATE TABLE IF NOT EXISTS `c_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `event` varchar(1) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `c_admin`
--

INSERT INTO `c_admin` (`id_admin`, `email`, `password`, `event`) VALUES
(1, 'admin@compfest.web.id', '526af0cc9cdd4d5c539182d2c6065920', '0'),
(2, 'competition@compfest.web.id', '526af0cc9cdd4d5c539182d2c6065920', '1'),
(3, 'seminar@compfest.web.id', '526af0cc9cdd4d5c539182d2c6065920', '2'),
(4, 'news@compfest.web.id', '526af0cc9cdd4d5c539182d2c6065920', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c_event`
--

CREATE TABLE IF NOT EXISTS `c_event` (
  `id_event` int(2) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(50) NOT NULL,
  `event_description` text NOT NULL,
  `payment` varchar(1) NOT NULL,
  `url` varchar(100) NOT NULL,
  `members` int(1) NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `c_event`
--

INSERT INTO `c_event` (`id_event`, `event_name`, `event_description`, `payment`, `url`, `members`) VALUES
(1, 'HTML5', 'Lomba html 5', '1', '', 3),
(2, 'IT Solution', 'Lomba IT Solution', '1', '', 4),
(3, 'Programming', 'lomba Programming', '1', '', 3),
(4, 'Robotic SMA', 'Lomba Robotic SMA', '1', '', 3),
(5, 'UltraBook', 'Lomba ultrabook', '0', '', 3),
(6, 'Blender3D', 'Lomba Blender3D', '1', '', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `c_news`
--

CREATE TABLE IF NOT EXISTS `c_news` (
  `id_news` int(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `id_category` int(4) NOT NULL,
  `content` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `publish` int(1) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `c_news`
--

INSERT INTO `c_news` (`id_news`, `title`, `id_category`, `content`, `timestamp`, `publish`, `url`) VALUES
(5, 'About', 0, '<div id="gambar">\r\n   <ul class="gallery">\r\n\r\n    <li><img src="http://localhost:8080/web_rd/resource/gallery/1.jpg" class="pic-1"></li>\r\n\r\n    <li><img src="http://localhost:8080/web_rd/resource/gallery/2.jpg" class="pic-2"></li>\r\n\r\n    <li><img src="http://localhost:8080/web_rd/resource/gallery/3.jpg" class="pic-3"></li>\r\n\r\n    <li><img src="http://localhost:8080/web_rd/resource/gallery/4.jpg" class="pic-4"></li>\r\n\r\n    \r\n   </ul>\r\n   <div ><br></div> \r\n   <hr>\r\n   <br>\r\n  </div>\r\n', '2013-03-28 20:45:57', 1, 'about');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c_page`
--

CREATE TABLE IF NOT EXISTS `c_page` (
  `id_page` int(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `url` varchar(100) NOT NULL,
  `position` int(3) NOT NULL,
  `parent` int(3) NOT NULL,
  `publish` int(1) NOT NULL,
  PRIMARY KEY (`id_page`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `c_page`
--

INSERT INTO `c_page` (`id_page`, `title`, `content`, `time`, `url`, `position`, `parent`, `publish`) VALUES
(16, 'About', 'Isinya', '2013-03-22 23:49:11', 'about', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `c_register`
--

CREATE TABLE IF NOT EXISTS `c_register` (
  `id_register` int(3) NOT NULL AUTO_INCREMENT,
  `id_team` int(3) NOT NULL,
  `register_name` varchar(100) NOT NULL,
  `register_role` int(1) NOT NULL,
  `register_id` varchar(100) NOT NULL,
  `register_email` varchar(50) NOT NULL,
  `register_photo` varchar(100) NOT NULL,
  `register_phone` varchar(14) NOT NULL,
  PRIMARY KEY (`id_register`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data untuk tabel `c_register`
--

INSERT INTO `c_register` (`id_register`, `id_team`, `register_name`, `register_role`, `register_id`, `register_email`, `register_photo`, `register_phone`) VALUES
(23, 1, 'Anggota 3', 3, 'ID_13c4ca4238a0b923820dcc509a6f75849b.png', 'zaka.z@gmail.com', 'Photo_13c4ca4238a0b923820dcc509a6f75849b.png', '080808080808'),
(22, 1, 'Anggota 2', 2, 'ID_12c4ca4238a0b923820dcc509a6f75849b15.jpg', 'redho@gmail.com', 'Photo_12c4ca4238a0b923820dcc509a6f75849b11.png', '08080800808'),
(21, 1, 'Kandito', 1, 'ID_11c4ca4238a0b923820dcc509a6f75849b15.jpg', 'kanditoaw@gmail.com', 'Photo_11c4ca4238a0b923820dcc509a6f75849b11.png', '0800000000'),
(24, 1, 'Nama Pembimbing', 9, 'ID_14c4ca4238a0b923820dcc509a6f75849b3.png', 'pembimbing@kernel.com', 'Photo_19c4ca4238a0b923820dcc509a6f75849b3.png', '080000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c_seminar`
--

CREATE TABLE IF NOT EXISTS `c_seminar` (
  `id_seminar` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `time` varchar(16) NOT NULL,
  `description` text NOT NULL,
  `seat` int(3) NOT NULL,
  `url` int(11) NOT NULL,
  PRIMARY KEY (`id_seminar`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `c_seminar`
--

INSERT INTO `c_seminar` (`id_seminar`, `name`, `time`, `description`, `seat`, `url`) VALUES
(1, 'HTML5', '08-10-2013 16:00', 'Seminar tentang html 5', 100, 0),
(2, 'Intel', '09-10-2013 13:00', 'Seminar Intel', 100, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `c_seminar_reg`
--

CREATE TABLE IF NOT EXISTS `c_seminar_reg` (
  `id_seminar_reg` int(4) NOT NULL AUTO_INCREMENT,
  `id_seminar_user` int(4) NOT NULL,
  `id_seminar` int(3) NOT NULL,
  `motivation` text NOT NULL,
  `approve` int(1) NOT NULL,
  PRIMARY KEY (`id_seminar_reg`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `c_seminar_reg`
--

INSERT INTO `c_seminar_reg` (`id_seminar_reg`, `id_seminar_user`, `id_seminar`, `motivation`, `approve`) VALUES
(5, 5, 1, 'JHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJ', 0),
(2, 2, 1, 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ', 0),
(3, 3, 1, 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ', 0),
(4, 3, 2, 'Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum  ', 0),
(6, 5, 2, 'JHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJ', 0),
(7, 6, 1, 'JHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJ', 0),
(8, 6, 2, 'JHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJJHJLJHLHJKHLHJHJ', 0),
(9, 7, 1, 'dfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadfdfadfafasdfadfafdafafasfafasdfadfasfadfasfadfafadfafdffadf', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `c_seminar_user`
--

CREATE TABLE IF NOT EXISTS `c_seminar_user` (
  `id_seminar_user` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_no` varchar(20) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `token` varchar(32) NOT NULL,
  `register_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(2) NOT NULL,
  PRIMARY KEY (`id_seminar_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `c_seminar_user`
--

INSERT INTO `c_seminar_user` (`id_seminar_user`, `name`, `email`, `id_no`, `phone`, `token`, `register_time`, `status`) VALUES
(2, 'kandito', 'kanditoaw@gmail.com', '1106000155', '085697111580', '0e25dd01cd6b278b28bebc08d4167f31', '2013-03-01 14:39:36', '1'),
(3, 'budi', 'cyberscout93@gmail.com', '1106000155', '085697111580', '8c682b75125b861017667e3903bb4e36', '2013-01-29 22:52:36', '1'),
(4, 'kandito', 'budi@budi.budi', '1106000155', '085697111580', 'b218a7dec102bf0b8b778e6321ebeb48', '2013-01-29 22:52:36', '1'),
(5, 'kandito', 'budi@budi.com', '1106000155', '085697111580', '1f4bb7cc3c45d7afcc36c8748b4a148a', '2013-01-29 22:52:36', '1'),
(7, 'budi', 'budi@gmail.com', '1106000155', '085697111580', 'b835a4946ff95ed9b83e2665cb27dd8f', '2013-01-17 19:05:04', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c_static`
--

CREATE TABLE IF NOT EXISTS `c_static` (
  `id_static` int(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id_static`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `c_static`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `c_team`
--

CREATE TABLE IF NOT EXISTS `c_team` (
  `id_team` int(3) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(50) NOT NULL,
  `id_event` int(3) NOT NULL,
  `team_status` int(3) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `register_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_team`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `c_team`
--

INSERT INTO `c_team` (`id_team`, `team_name`, `id_event`, `team_status`, `institution`, `email`, `password`, `payment`, `register_time`) VALUES
(1, 'kernel', 1, 2, 'UI', 'kandito.1205@gmail.com', '355f1b9527fd5170e82d3b8e0f466900', 'payment_19c4ca4238a0b923820dcc509a6f75849b1.png', '2013-03-08 14:07:47'),
(4, 'Kalong', 1, 0, 'UI', 'kanditoaw@gmail.com', '355f1b9527fd5170e82d3b8e0f466900', '', '2013-03-01 15:21:49');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
