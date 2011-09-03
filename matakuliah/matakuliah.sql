
CREATE TABLE IF NOT EXISTS `matakuliah` (
  `kd_mk` varchar(20) NOT NULL,
  `matakuliah` varchar(50) NOT NULL,
  `sks` int(10) NOT NULL,
  `smt` varchar(20) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL,
  `thn_kurikulum` varchar(50) NOT NULL,
  `jenis_mk` varchar(50) NOT NULL,
  `nip_dosen_pengajar` varchar(50) NOT NULL,
  PRIMARY KEY  (`kd_mk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
