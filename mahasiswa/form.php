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

$array_label = array("NIM : ","Nama : ","Alamat : ","Kota : ","Kode Jurusan : ","Kode Fakultas : ","");
$array_type = array("text","text","text","text","text","text","submit");
$array_name = array("nim","nama","alamat","kota","kd_jurusan","kd_fakultas","kirim");
$array_value = ("","","","","","","submit");
$array_class = "effect";
$array_id = array("nim","nama","alamat","kota","kd_jurusan","kd_fakultas","kirim");
$input_tag = ("<tr><td><fieldset>:</fieldset></td></tr>","<tr><td><fieldset>:</fieldset></td></tr>","<tr><td><fieldset>:</fieldset></td></tr>","<tr><td><fieldset>:</fieldset></td></tr>","<tr><td><fieldset>:</fieldset></td></tr>","<tr><td><fieldset>:</fieldset></td></tr>","<tr><td><div id='button'>:</div></td></tr>");
echo ("<form  id='mahasiswa' action='".HOSTNAME."plugin/mahasiswa/db_proses.php?get=input' method='POST'><center><table border='0'>");//
form_input($array_label,$array_type,$array_name,$array_value,$array_class,$array_id,$input_tag);
echo ("<div id='button'><input type='submit' value='Kirim' class='effect'/></div></form>");//

?>
