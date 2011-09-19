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
$tb = "mahasiswa";
	$array_field = array("nim","nama","alamat","kota","kd_jurusan","kd_fakultas","email","jk","tempat_lahir","tgl_lahir","rt_rw","kd_pos","kd_telp","phone_hp","agama","suku","nama_ayah","nama_ibu","nama_wali","pekerjaan_ayah","pekerjaan_ibu","pekerjaan_wali","pendidikan_ayah","pendidikan_ibu","alamat_ortu","alamat_wali","asal_sekolah","prov_sekolah","lulus_sekolah_thn","ijasah_sekolah","nilai_sekolah","pilihan1","pilihan2","pilihan_lulus","kd_program","status_awal","jalur_masuk","tahun_akademik","lulus","tgl_lulus","thn_lulus","predikat_lulus","nip","tgl_ta","total_sks","IPK","judul_ta","pembimbing_ta","pembimbing1_ta","pembimbing2_ta","catatan_ta","nomor_ijasah");
	$array_value = array($_POST['nim'],$_POST['nama'],$_POST['alamat'],$_POST['kota'],$_POST['kd_jurusan'],$_POST['kd_fakultas'],$_POST['email'],$_POST['jk'],$_POST['tempat_lahir'],$_POST['tgl_lahir'],$_POST['rt_rw'],$_POST['kd_pos'],$_POST['kd_telp'],$_POST['phone_hp'],$_POST['agama'],$_POST['suku'],$_POST['nama_ayah'],$_POST['nama_ibu'],$_POST['nama_wali'],$_POST['pekerjaan_ayah'],$_POST['pekerjaan_ibu'],$_POST['pekerjaan_wali'],$_POST['pendidikan_ayah'],$_POST['pendidikan_ibu'],$_POST['alamat_ortu'],$_POST['alamat_wali'],$_POST['asal_sekolah'],$_POST['prov_sekolah'],$_POST['lulus_sekolah_thn'],$_POST['ijasah_sekolah'],$_POST['nilai_sekolah'],$_POST['pilihan1'],$_POST['pilihan2'],$_POST['pilihan_lulus'],$_POST['kd_program'],$_POST['status_awal'],$_POST['jalur_masuk'],$_POST['tahun_akademik'],$_POST['lulus'],$_POST['tgl_lulus'],$_POST['thn_lulus'],$_POST['predikat_lulus'],$_POS['nip'],$_POST['tgl_ta'],$_POST['total_sks'],$_POST['ipk'],$_POST['judul_ta'],$_POST['pembimbing_ta'],$_POST['pembimbing1_ta'],$_POST['pembimbing2_ta'],$_POST['catatan_ta'],$_POST['nomor_ijasah']);

if ($_POST[update] == "yes") {
	db_update($tb,$array_field,$array_value,"nim",$_POST[nim]);
	echo "Data berhasil di update!";
}
else if (!$_POST[update]) {	
	db_insert($tb,$array_field,$array_value);
	echo "Data berhasil di insert!";
}
/*else if (($_GET[get] == "aksi") && ($_POST['aksi'] == "delete")) {
	$tb = "mahasiswa";
	$id_field = "nim";
	$id_value = "";
	db_delete($tb,$id_field,$id_value);{
		echo "Data berhasil di update";
	}
	else {
		echo "Data gagal di update";
	}
}
	else {
	echo ("<center><h1>HALAMAN TIDAK DIKETAHUI</h1></center>");
}*/

?>
