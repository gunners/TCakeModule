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


$array_label = array("Nama mahasiswa : ","");
$array_type = array("text","submit");
$array_name = array("cari","kirim");
$array_value = array("","Cari");
$array_class = "effect";
$array_id = array("cari","submit");
$input_tag = array("<tr><td><fieldset>:</fieldset></td></tr>","<tr><td><div id='button'>:</div></td></tr>");
echo ("<form method='POST' id='carimahasiswa' action='".HOSTNAME."plugin/mahasiswa/data_dosen.php'><center><table border='0'>");//
form_input($array_label,$array_type,$array_name,$array_value,$array_class,$array_id,$input_tag);
echo ("</table></center></form>");			
?>
<div id='report'></div>
