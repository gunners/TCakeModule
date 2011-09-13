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
$tb = "kp4";
$array_field = array("id","nip","jk","suami_istri","tmpt_lahir","tgl_lahir","tgl_nikah","pekerjaan","nama_anak1","tgl_lahir_anak1","tmpt_lahir_anak1","nama_anak2","tgl_lahir_anak2","tmpt_lahir_anak2","nama_anak3","tgl_lahir_anak3","tmpt_lahir_anak3");
$array_value = array($_POST['id'],$_POST['nip_dosen'],$_POST['jk'],$_POST['suami_istri'],$_POST['tmpt_lahir'],$_POST['tgl_lahir'],$_POST['tgl_nikah'],$_POST['pekerjaan'],$_POST['nama_anak1'],$_POST['tgl_lahir_anak1'],$_POST['tmpt_lahir_anak1'],$_POST['nama_anak2'],$_POST['tgl_lahir_anak2'],$_POST['tmpt_lahir_anak2'],$_POST['nama_anak3'],$_POST['tgl_lahir_anak3'],$_POST['tmpt_lahir_anak3']);
if ($_POST['id']) {
	
	
if (db_insert($tb,$array_field,$array_value)){
		echo "Data berhasil di input";
	}
	else {
		db_update($tb,$array_field,$array_value,"id",$_POST[id]);
		echo "Data berhasil di update!";
	}
}
else if ($path[2] == "delete") {

	$id_field = "id";
	$id_value = "";
	db_delete($tb,$id_field,$id_value);
}
else {
	echo ("<center><h1>HALAMAN TIDAK DIKETAHUI</h1></center>");
}

?>
