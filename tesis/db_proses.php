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
$tb = "tesis";
	$array_field = array("id_tesis","nim","judul");
	$array_value = array($_POST['id_tesis'],$_POST['nim'],$_POST['judul']);


if ($_POST['nim']) {
	
	if (db_insert($tb,$array_field,$array_value)){
		echo "Data berhasil di input";
	}
	else {
		echo "Data gagal di input";
	}
}
else if ($path[2] == "delete") {
	
	$id_field = "id_tesis";
	$id_value = "";
	db_delete($tb,$id_field,$id_value);
}
else if ($path[2] == "update") {
	
	$array_value = array("");
	$id_field = "id_tesis";
	$id_value = "";
	db_update($tb,$array_field,$array_value,$id_field,$id_value);
}
else {
	echo ("<center><h1>HALAMAN TIDAK DIKETAHUI</h1></center>");
}

?>
