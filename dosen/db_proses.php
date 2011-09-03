<?php
/*
 *      This program is free software; you can redistribute it and/or modify
 *      it under the terms of the GNU General Public License as published by
 *      the Free Software Foundation; either version 2 of the License, or
 *      (at your option) any later version.
 *      
 *      This program is distributed in the hope that it will be useful,
 *      but WITHOUT ANY WARRANTY; without even the implied warranty of
 *      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *      GNU General Public License for more details.
 *      
 *      You should have received a copy of the GNU General Public License
 *      along with this program; if not, write to the Free Software
 *      Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 *      MA 02110-1301, USA.
 * 		
 * 		created by ibnu yahya <ibnu.yahya@toroo.org>
 * 
 */
include ("../../inc/define.php");
include (HOST.CONF);
include (HOST.FUNC);
conn_db($host,$user,$pass,$db);

if ($_POST['nip']) {
	$tb = "dosen";
	$array_field = array("nip","nama","alamat","kota","kd_jurusan","kd_fakultas","email","web","phone_hp","gelar_s1","gelar_s2","gelar_s3","gelar_gb","gelar_profesi","gol","pangkat","tmt_cpns","tmt_pns","tgl_keluar","karpeg","kelurahan","kecamatan","propinsi","kd_pos","tempat_lahir","tgl_lahir","nama_pasangan","pekerjaan_pasangan","agama","jabatan_organisasi","jabatan_akademik","pendidikan","lulusan_PT_univ","bidang_ilmu");
	$array_value = array($_POST['nip'],$_POST['nama'],$_POST['alamat'],$_POST['kota'],$_POST['kd_jurusan'],$_POST['kd_fakultas'],$_POST['email'],$_POST['web'],$_POST['phone_hp'],$_POST['gelar_s1'],$_POST['gelar_s2'],$_POST['gelar_s3'],$_POST['gelar_gb'],$_POST['gelar_profesi'],$_POST['gol'],$_POST['pangkat'],$_POST['tmt_cpns'],$_POST['tmt_pns'],$_POST['tgl_keluar'],$_POST['karpeg'],$_POST['kelurahan'],$_POST['kecamatan'],$_POST['propinsi'],$_POST['kd_pos'],$_POST['tempat_lahir'],$_POST['tgl_lahir'],$_POST['nama_pasangan'],$_POST['pekerjaan_pasangan'],$_POST['agama'],$_POST['jabatan_organisasi'],$_POST['jabatan_akademik'],$_POST['pendidikan'],$_POST['lulusan_PT_univ'],$_POST['bidang_ilmu']); //
	if (db_insert($tb,$array_field,$array_value)){
		echo "Data berhasil di input";
	}
	else {
		echo "Data gagal di input";
	}
}
else if ($_POST['tomboldosen'] == "delete") {
	$tb = "dosen";
	$id_field = "nip";
	$id_value = "";
	db_delete($tb,$id_field,$id_value);
}
else if ($_POST['tombolfdosen'] == "update") {
	$tb = "dosen";
	$array_field = array("nip","nama","alamat","kota","kd_jurusan","kd_fakultas","email","web","phone_hp","gelar_s1","gelar_s2","gelar_s3","gelar_gb","gelar_profesi","gluluol","pangkat","tmt_cpns","tmt_pns","tgl_keluar","karpeg","kelurahan","kecamatan","propinsi","kd_pos","tempat_lahir","tgl_lahir","nama_pasangan","pekerjaan_pasangan","agama","jabatan_organisasi","jabatan_akademik","pendidikan","lulusan_PT_univ","bidang_ilmu");

	$array_value = array("");
	$id_field = "nip";
	$id_value = "";
	db_update($tb,$array_field,$array_value,$id_field,$id_value);
}
else {
	echo ("<center><h1>HALAMAN TIDAK DIKETAHUI</h1></center>");
}

?>
