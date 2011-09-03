
CREATE TABLE IF NOT EXISTS `dosen` (
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kd_jurusan` varchar(10) NOT NULL,
  `kd_fakultas` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `web` varchar(50) NOT NULL,
  `phone_hp` varchar(50) NOT NULL,
  `gelar_s1` varchar(50) NOT NULL,
  `gelar_s2` varchar(50) NOT NULL,
  `gelar_s3` varchar(50) NOT NULL,
  `gelar_gb` varchar(50) NOT NULL,
  `gelar_profesi` varchar(50) NOT NULL,
  `gol` varchar(50) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `tmt_cpns` varchar(50) NOT NULL,
  `tmt_pns` varchar(50) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `karpeg` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `propinsi` varchar(50) NOT NULL,
  `kd_pos` int(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_pasangan` varchar(50) NOT NULL,
  `pekerjaan_pasangan` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `jabatan_organisasi` varchar(50) NOT NULL,
  `jabatan_akademik` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `lulusan_PT_univ` varchar(50) NOT NULL,
  `bidang_ilmu` varchar(50) NOT NULL,
  PRIMARY KEY  (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

