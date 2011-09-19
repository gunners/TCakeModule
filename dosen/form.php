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


$array_label = array("NIP : ",
"Nama : ",
"Alamat : ",
"Kota : ",
"Kode Jurusan : ",
"Kode Kakultas : ",
"Email : ",
"Web : ",
"Phone_HP : ",
"Gelar_S1 : ",
"Gelar_S2 : ",
"Gelar_S3 : ",
"Gelar_GB : ",
"Gelar Profesi : ",
"Gol : ",
"Pangkat : ",
"Tamat CPNS ",
"Tamat PNS : ",
"Tanggal Keluar : ",
"Karpeg : ",
"Kelurahan : ",
"Kecamatan : ",
"Propinsi : ",
"Kode Pos : ",
"Tempat Lahir : ",
"Tanggal Lahir : ",
"Nama Pasangan : ",
"Pekerjaan Pasangan :  ",
"Agama : ",
"Jabatan Organisasi : ",
"Jabatan Akademik : ",
"Pendidikan : ",
"Lulusan PT Univ : ",
"Bidang Ilmu : ",
"");

$tag_app = "<tr><td><fieldset>:</fieldset></td></tr>";
$tag_opt = "<tr><td><div id='button'>:</div></td></tr>";
$array_type = array("text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","text","submit");
$array_name = array("nip","nama","alamat","kota","kd_jurusan","kd_fakultas","email","web","phone_hp","gelar_s1","gelar_s2","gelar_s3","gelar_gb","gelar_profesi","gol","pangkat","tmt_cpns","tmt_pns","tgl_keluar","karpeg","kelurahan","kecamatan","propinsi","kd_pos","tempat_lahir","tgl_lahir","nama_pasangan","pekerjaan_pasangan","agama","jabatan_organisasi","jabatan_akademik","pendidikan","lulusan_PT_univ","bidang_ilmu","kirim");
$array_value = array("","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","submit");
$array_class = "effect";
$array_id = $array_name;
$input_tag = array($tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_app,$tag_opt);
echo ("<form  id='dosen' action='".HOSTNAME."plugin/dosen/db_proses.php' method='POST'><center><table border='0'>");
form_input($array_label,$array_type,$array_name,$array_value,$array_class,$array_id,$input_tag);
echo ("</table></center></form>");

?>
