
CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` int(255) NOT NULL auto_increment,
  `kd_mk` varchar(20) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_start` time NOT NULL,
  `jam_finish` time NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama_mata_kuliah` varchar(50) NOT NULL,
  `sks` int(20) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL,
  `kd_ruangan` int(20) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `thn_kurikulum` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_jadwal`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
