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
$tb = "jadwal";
	$array_field = array("id_jadwal","kd_mk","hari","tanggal","jam_start","jam_finish","nip","nama_mata_kuliah","sks","jurusan","program","kd_ruangan","kelas","thn_kurikulum");
	$array_value = array($_POST['id_jadwal'],$_POST['kd_mk'],$_POST['hari'],$_POST['tanggal'],$_POST['jam_start'],$_POST['jam_finish'],$_POST['nip'],$_POST['nama_mata_kuliah'],$_POST['sks'],$_POST['jurusan'],$_POST['program'],$_POST['kd_ruangan'],$_POST['kelas'],$_POST['thn_kurikulum']);
if ($_POST['kd_mk']) {
	
	if (db_insert($tb,$array_field,$array_value)){
		echo "Data berhasil di input";
	}
	else {
		db_update($tb,$array_field,$array_value,"id_jadwal",$_POST[id_jadwal]);
		echo "Data berhasil di update!";
	}
}
else if ($path[2] == "delete") {
	
	$id_field = "id_jadwal";
	$id_value = "";
	db_delete($tb,$id_field,$id_value);
}
else {
	echo ("<center><h1>HALAMAN TIDAK DIKETAHUI</h1></center>");
}

?>
