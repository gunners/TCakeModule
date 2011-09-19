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

$tag_app = "<tr><td><fieldset>:</fieldset></td></tr>";
$tag_opt = "<tr><td><div id='button'>:</div></td></tr>";
$array_label = array("ID : ","NIP Dosen Wali : ","JK : ","Suami/Istri : ","Tempat Lahir : ","Tanggal Lahir : ","Tanggal Nikah : ","Pekerjaan : ","Nama Anak1 : " "Tanggal Lahir Anak1 : ","Tempat Lahir Anak1 : ","Nama Anak2 : ","Tanggal Lahir Anak2 : ","Tempat Lahir Anak2 : ","Nama Anak3 : ","Tanggal Lahir Anak3 : ","Tempat Lahir Anak3 : ","","");
$array_type = array("text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","hidden","submit");
$array_name = array("id","nip_dosen","jk","suami_istri","tmpt_lahir","tgl_lahir","tgl_nikah","pekerjaan","nama_anak1","tgl_lahir_anak1","tmpt_lahir_anak1","nama_anak2","tgl_lahir_anak2","tmpt_lahir_anak2","nama_anak3","tgl_lahir_anak3","tmpt_lahir_anak3","update","kirim");
$array_value = ("","","","","","","","","","","","","","","","","","","submit");
$array_class = "effect";
$array_id = $array_name;
$input_tag = array($tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_opt,$tag_opt);
echo ("<form  id='kp4' action='".HOSTNAME."plugin/kp4/db_proses.php' method='POST'><center><table border='0'>");//
form_input($array_label,$array_type,$array_name,$array_value,$array_class,$array_id,$input_tag);
echo ("</table></center></form>");//

?>

