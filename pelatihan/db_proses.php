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
$tb = "pelatihan";
	$array_field = array("nip","tgl_mulai","tgl_akhir","nama_pelatihan","deskripsi","lokasi","keterangan","sebagai");
	$array_value = array($_POST[tgl_mulai],$_POST[tgl_akhir],$_POST[nama_pelatihan],$_POST[deskripsi],$_POST[lokasi],$_POST[keterangan],$_POST[sebagai]);

if ($_POST['nip']) {
	
	if (db_insert($tb,$array_field,$array_value)){
		echo "Data berhasil di input";
	}
	else {
		echo "Data gagal di input";
	}
}
else if ($path[2] == "delete") {
	
	$id_field = "nip";
	$id_value = "";
	db_delete($tb,$id_field,$id_value);
}
else if ($path[2] == "update") {
	
	$array_value = array("");
	$id_field = "nip";
	$id_value = "";
	db_update($tb,$array_field,$array_value,$id_field,$id_value);
}
else {
	echo ("<center><h1>HALAMAN TIDAK DIKETAHUI</h1></center>");
}

?>
