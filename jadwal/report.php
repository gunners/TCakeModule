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
$db = db_select("jadwal");
$count = mysql_num_rows($db);
if ($count != 0) {
echo ("<table>
	<tr class='header'>
		<td>kode mata kuliah</td>
		<td width='150'>hari</td>
		<td width='100'>tanggal</td>
		<td>jam start</td>
		<td>jam finish</td>
		<td width='150'>nip</td>
		<td>Nama Mata Kuliah</td>
		<td widht='150'>SKS</td>
		<td>Jurusan</td>
		<td>Program</td>
		<td>Kode Program</td>
		<td widht='150'>Kelas</td>
		<td>Tahun Kurikulum</td>
		<td width='75'>edit</td>
	</tr>");
	$i = 1;
	while ($jadwal = mysql_fetch_array($db)){
		if ($i%2){
			$class = "ganjil";
		} else {
			$class = "genap";
		}
		echo ("<tr class='".$class."'>
<td align='center'><b>".$jadwal[kd_mk]."</b><input type='hidden' id='kd_mk".$jadwal[id_jadwal]."' value='".$jadwal[kd_mk]."'> 
<td>".$jadwal[hari]."<input type='hidden' id='hari".$jadwal[id_jadwal]."' value='".$jadwal[hari]."'> </td>
<td>".$jadwal[tanggal]."<input type='hidden' id='tanggal".$jadwal[id_jadwal]."' value='".$jadwal[tanggal]."'> </td>
<td>".$jadwal[jam_start]."<input type='hidden' id='jam_start".$jadwal[id_jadwal]."' value='".$jadwal[jam_start]."'> </td>
<td>".$jadwal[jam_finish]."<input type='hidden' id='jam_finish".$jadwal[id_jadwal]."' value='".$jadwal[jam_finish]."'> </td>
<td>".$jadwal[nip]."<input type='hidden' id='nip".$jadwal[id_jadwal]."' value='".$jadwal[nip]."'> </td>
<td>".$jadwal[nama_mata_kuliah]."<input type='hidden' id='nama_mata_kuliah".$jadwal[id_jadwal]."' value='".$jadwal[nama_mata_kuliah]."'> </td>
<td>".$jadwal[sks]."<input type='hidden' id='sks".$jadwal[id_jadwal]."' value='".$jadwal[sks]."'> </td>
<td>".$jadwal[jurusan]."<input type='hidden' id='jurusan".$jadwal[id_jadwal]."' value='".$jadwal[jurusan]."'> </td>
<td>".$jadwal[program]."<input type='hidden' id='program".$jadwal[id_jadwal]."' value='".$jadwal[program]."'> </td>
<td>".$jadwal[kd_ruangan]."<input type='hidden' id='kd_mk".$jadwal[id_jadwal]."' value='".$jadwal[kd_mk]."'> </td>
<td>".$jadwal[kelas]."<input type='hidden' id='kelas".$jadwal[id_jadwal]."' value='".$jadwal[kelas]."'> </td>
<td>".$jadwal[thn_kurikulum]."<input type='hidden' id='thn_kurikulum".$jadwal[id_jadwal]."' value='".$jadwal[thn_kurikulum]."'> </td>
<td align='center'><img src='".HOSTNAME.THEMES."default/images/icon/delete.png'> <input type='image' id='update".$jadwal[id_jadwal]."' src='".HOSTNAME.THEMES."default/images/icon/update.png'></td>
</tr>");
		$i++;
	}
	echo ("
	</table>");
} else {
	echo "<h3>Data masih kosong!</h3>";
}
?>
