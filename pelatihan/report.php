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
$db = db_select("pelatihan");
$count = mysql_num_rows($db);
if ($count != 0) {
echo ("<table>
	<tr class='header'>
		<td width='150'>NIP</td>
		<td>Tanggal_Mulai</td>
		<td>Tanggal_Akhir</td>
		<td>Nama_Pelatihan</td>
		<td>Deskripsi</td>
		<td>Lokasi</td>
		<td>Keterangan</td>
		<td>Sebagai</td>
		<td width='75'>edit</td>
	</tr>");
	$i = 1;
	while ($pelatihan = mysql_fetch_array($db)){
		if ($i%2){
			$class = "ganjil";
		} else {
			$class = "genap";
		}
		echo ("<tr class='".$class."'>
<td align='center'>".$pelatihan[nip]."</td><input type='hidden' id='nip".$pelatihan[nip]."' value='".$pelatihan[nip]."'>
<td>".$pelatihan[tgl_mulai]."</td><input type='hidden' id='tgl_mulai".$pelatihan[nip]."' value='".$pelatihan[tgl_mulai]."'></td>
<td>".$pelatihan[tgl_akhir]."</td><input type='hidden' id='tgl_akhir".$pelatihan[nip]."' value='".$pelatihan[tgl_akhir]."'></td>
<td>".$pelatihan[nama_pelatihan]."</td><input type='hidden' id='nama_pelatihan".$pelatihan[nip]."' value='".$pelatihan[nama_pelatihan]."'></td>
<td>".$pelatihan[deskripsi]."</td><input type='hidden' id='deskripsi".$pelatihan[nip]."' value='".$pelatihan[deskripsi]."'></td>
<td>".$pelatihan[lokasi]."</td><input type='hidden' id='lokasi".$pelatihan[nip]."' value='".$pelatihan[lokasi]."'></td>
<td>".$pelatihan[keterangan]."</td><input type='hidden' id='keterangan".$pelatihan[nip]."' value='".$pelatihan[keterangan]."'></td>
<td>".$pelatihan[sebagai]."</td><input type='hidden' id='sebagai".$pelatihan[nip]."' value='".$pelatihan[sebagai]."'></td>			 
<td align='center'><img src='".HOSTNAME.THEMES."default/images/icon/delete.png'> <input type='image' id='update".$pelatihan[nip]."' src='".HOSTNAME.THEMES."default/images/icon/update.png'></td>
</tr>");
		$i++;
	}
	echo ("
	</table>");
} else {
	echo "<h3>Data masih kosong!</h3>";
}
?>
