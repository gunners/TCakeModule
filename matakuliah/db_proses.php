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
	$tb = "matakuliah";
	$array_field = array("kd_mk","matakuliah","sks","smt","kd_jurusan","program","thn_kurikulum","jenis_mk","nip_dosen-pengajar");
	$array_value = array($_POST['kd_mk'],$_POST['matakuliah'],$_POST['sks'],$_POST['smt'],$_POST['kd_jurusan'],$_POST['program'],$_POST['thn_kurikulum'],$_POST['jenis_mk'],$_POST['nip _dosen_pengajar']);
	
if ($_POST[update] == "yes") {
	db_update($tb,$array_field,$array_value,"kd_mk",$_POST[kd_mk]);
	echo "Data berhasil di update!";
}
else if (!$_POST[update]) {	
	db_insert($tb,$array_field,$array_value);
	echo "Data berhasil di insert!";
}
/*else if ($path[2] == "delete") {
	$id_field = "id_mk";
	$id_value = "";
	db_delete($tb,$id_field,$id_value);
}
else {
	echo ("<center><h1>HALAMAN TIDAK DIKETAHUI</h1></center>");
}*/

?>
