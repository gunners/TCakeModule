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
$tb = "nilai";
$array_field = array("id_nilai","nim","kd_mk","nilai","terbilang","nama_mahasiswa","sks","nip_dosen_wali","nama_dosen_wali","jurusan");
$array_value = array($_POST['nim'],$_POST['kd_mk'],$_POST['nilai'],$_POST['terbilang'],$_POST['nama_mahasiswa'],$_POST['sks'],$_POST['nip_dosen_wali'],$_POST['nama_dosen_wali'],$_POST['jurusan']);
if ($_POST[update] == "yes") {
	db_update($tb,$array_field,$array_value,"id_nilai",$_POST[id_nilai]);
	echo "Data berhasil di update!";
}
else if (!$_POST[update]) {	
	db_insert($tb,$array_field,$array_value);
	echo "Data berhasil di insert!";
}
/*else if ($path[2] == "delete") {
	$id_field = "id_nilai";
	$id_value = "";
	db_delete($tb,$id_field,$id_value);
}
else {
	echo ("<center><h1>HALAMAN TIDAK DIKETAHUI</h1></center>");
}*/

?>
