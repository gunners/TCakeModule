

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(255) NOT NULL auto_increment,
  `nim` varchar(20) NOT NULL,
  `kd_mk` varchar(20) NOT NULL,
  `nilai` int(20) NOT NULL,
  `terbilang` varchar(5) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `sks` varchar(50) NOT NULL,
  `nip_dosen_wali` varchar(50) NOT NULL,
  `nama_dosen_wali` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_nilai`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

