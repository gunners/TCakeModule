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

$db = db_select("matakuliah");
$count = mysql_num_rows($db);
if ($count != 0) {
echo ("<table>
	<tr class='header'>
		<td>Kode Matakuliah</td>
		<td>Mata Kuliah</td>
		<td width='150'>SKS</td>
		<td>Semester</td>
		<td>Kode Jurusan</td>
		<td>Program</td>
		<td>Tahun Kurikulum</td>
		<td>Jenis Mata Kuliah</td>
		<td>NIP Dosen Pengajar</td>
		<td width='75'>edit</td>
	</tr>");
	$i = 1;
	while ($matakuliah = mysql_fetch_array($db)){
		if ($i%2){
			$class = "ganjil";
		} else {
			$class = "genap";
		}
		echo ("<tr class='".$class."'>
<td align='center'><b>".$matakuliah[kd_mk]."</b><input type='hidden' id='kd_mk".$matakuliah[kd_mk]."' value='".$matakuliah[kd_mk]."'> 
<td>".$matakuliah[matakuliah]."<input type='hidden' id='matakuliah".$matakuliah[kd_mk]."' value='".$matakuliah[matakuliah]."'> </td>
<td>".$matakuliah[sks]."<input type='hidden' id='sks".$matakuliah[kd_mk]."' value='".$matakuliah[sks]."'> </td>
<td>".$matakuliah[smt]."<input type='hidden' id='smt".$matakuliah[kd_mk]."' value='".$matakuliah[smt]."'> </td>
<td>".$matakuliah[kd_jurusan]."<input type='hidden' id='kd_jurusan".$matakuliah[kd_mk]."' value='".$matakuliah[kd_jurusan]."'> </td>
<td>".$matakuliah[program]."<input type='hidden' id='program".$matakuliah[kd_mk]."' value='".$matakuliah[program]."'> </td>
<td>".$matakuliah[thn_kurikulum]."<input type='hidden' id='thn_kurikulum".$matakuliah[kd_mk]."' value='".$matakuliah[thn_kurikulum]."'> </td>
<td>".$matakuliah[jenis_mk]."<input type='hidden' id='jenis_mk".$matakuliah[kd_mk]."' value='".$matakuliah[jenis_mk]."'> </td>
<td>".$matakuliah[nip]."<input type='hidden' id='nip".$matakuliah[kd_mk]."' value='".$matakuliah[nip]."'> </td>
<td align='center'><img src='".HOSTNAME.THEMES."default/images/icon/delete.png'> <img src='".HOSTNAME.THEMES."default/images/icon/update.png' id='update".$matakuliah[kd_mk]."'></td>
</tr>");
		$i++;
	}
	echo ("
	</table>");
} else {
	echo "<h3>Data masih kosong!</h3>";
}
?>
