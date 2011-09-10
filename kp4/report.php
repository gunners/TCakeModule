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
$db = db_select("kp4");
$count = mysql_num_rows($db);
if ($count != 0) {
echo ("<table>
	<tr class='header'>
		<td width='150'>ID</td>
		<td>Nip_Dosen_Wali</td>
		<td widht='150'>JK</td>
		<td>Suami_Istri</td>
		<td>tmpt_lahir</td>
		<td>Tanggal_Lahir</td>
		<td>Tanggal_Nikah</td>
		<td>Pekerjaan</td>
		<td>Nama_Anak1</td>
		<td>Tanggal_Lahir_Anak1</td>
		<td>Tempat_Lahir_Anak1</td>
		<td>Nama_Anak2</td>
		<td>Tanggal_Lahir_Anak2</td>
		<td>tempat_Lahir_Anak2</td>
		<td>Nama_Anak3</td>
		<td>Tanggal_Lahir_Anak3</td>
		<td>Tempat_Lahir_Anak3</td>
		<td width='75'>edit</td>
	</tr>");
	$i = 1;
	while ($kp4 = mysql_fetch_array($db)){
		if ($i%2){
			$class = "ganjil";
		} else {
			$class = "genap";
		}
		echo ("<tr class='".$class."'>
<td align='center'><b>".$kp4[id]."</b><input type='hidden' id='id".$kp4[id]."' value='".$kp4[id]."'>
<td>".$kp4[nip_dosen_wali]."<input type='hidden' id='nama_dosen_wali".$kp4[id]."' value='".$kp4[nip_dosen_wali]."'></td>
<td>".$kp4[jk]."<input type='hidden' id='jk".$kp4[id]."' value='".$kp4[jk]."'></td>
<td>".$kp4[suami_istri]."<input type='hidden' id='suami_istri".$kp4[id]."' value='".$kp4[suami_istri]."'></td>
<td>".$kp4[tmpt_lahir]."<input type='hidden' id='tmpt_lahir".$kp4[id]."' value='".$kp4[tmpt_lahir]."'></td>
<td>".$kp4[tgl_lahir]."<input type='hidden' id='tgl_lahir".$kp4[id]."' value='".$kp4[tgl_lahir]."'></td>
<td>".$kp4[tgl_nikah]."<input type='hidden' id='tgl_nikah".$kp4[id]."' value='".$kp4[tgl_nikah]."'></td>
<td>".$kp4[pekerjaan]."<input type='hidden' id='pekerjaan".$kp4[id]."' value='".$kp4[pekerjaan]."'></td>
<td>".$kp4[nama_anak1]."<input type='hidden' id='nama_anak1".$kp4[id]."' value='".$kp4[nama_anak1]."'></td>
<td>".$kp4[tgl_lahir_anak1]."<input type='hidden' id='tgl_lahir_anak1".$kp4[id]."' value='".$kp4[tgl_lahir_anak1]."'></td>
<td>".$kp4[tmpt_lahir_anak1]."<input type='hidden' id='tmpt_lahir_anak1".$kp4[id]."' value='".$kp4[tmpt_lahir_anak1]."'></td>
<td>".$kp4[nama_anak2]."<input type='hidden' id='nama_anak2".$kp4[id]."' value='".$kp4[nama_anak2]."'></td>
<td>".$kp4[tgl_lahir_anak2]."<input type='hidden' id='tmpt_lahir_anak2".$kp4[id]."' value='".$kp4[tgl_lahir_anak2]."'></td>
<td>".$kp4[tmpt_lahir_anak2]."<input type='hidden' id='tmpt_lahir_anak2".$kp4[id]."' value='".$kp4[tgl_lahir_anak2]."'></td>
<td>".$kp4[nama_anak3]."<input type='hidden' id='nama_anak3".$kp4[id]."' value='".$kp4[nama_anak3]."'></td>
<td>".$kp4[tgl_lahir_anak3]."<input type='hidden' id='tgl_lahir_anak3".$kp4[id]."' value='".$kp4[tgl_lahir_anak3]."'></td>
<td>".$kp4[tmpt_lahir_anak3]."<input type='hidden' id='tmpt_lahir_anak3".$kp4[id]."' value='".$kp4[tmpt_lahir_anak3]."'></td>			 
<td align='center'><img src='".HOSTNAME.THEMES."default/images/icon/delete.png'> <input type='image' id='update".$kp4[id]."' src='".HOSTNAME.THEMES."default/images/icon/update.png'></td>
</tr>");
		$i++;
	}
	echo ("
	</table>");
} else {
	echo "<h3>Data masih kosong!</h3>";
}
?>
