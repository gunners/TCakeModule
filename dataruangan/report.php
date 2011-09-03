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
$db = db_select("dataruangan");
$count = mysql_num_rows($db);
if ($count != 0) {
echo ("<table>
	<tr class='header'>
		<td>Kode Ruangan</td>
		<td>Nama Ruangan</td>
		<td>Lantai</td>
		<td>Kapasitas</td>
		<td>Kapasitas Ujian</td>
		<td>Keterangan</td>
		<td width='75'>edit</td>
	</tr>");
	$i = 1;
	while ($dataruangan = mysql_fetch_array($db)){
		if ($i%2){
			$class = "ganjil";
		} else {
			$class = "genap";
		}
		echo ("<tr class='".$class."'>
<td align='center'>".$dataruangan[kd_ruangan]."</td><input type='hidden' id='kd_ruangan".$dataruangan[kd_ruangan]."' value='".$dataruangan[kd_ruangan]."'> 
<td>".$dataruangan[nama_ruangan]."<input type='hidden' id='nama_ruangan".$dataruangan[kd_ruangan]."' value='".$dataruangan[nama_ruangan]."'> </td>
<td>".$dataruangan[lantai]."<input type='hidden' id='lantai".$dataruangan[kd_ruangan]."' value='".$dataruangan[lantai]."'> </td>
<td>".$dataruangan[kapasitas]."<input type='hidden' id='kapasitas".$dataruangan[kd_ruangan]."' value='".$dataruangan[kapasitas]."'> </td>
<td>".$dataruangan[kapasitas_ujian]."<input type='hidden' id='kapasitas_ujian".$dataruangan[kd_ruangan]."' value='".$dataruangan[kapasitas_ujian]."'> </td>
<td>".$dataruangan[keterangan]."<input type='hidden' id='keterangan".$dataruangan[kd_ruangan]."' value='".$dataruangan[keterangan]."'> </td>
<td align='center'><img src='".HOSTNAME.THEMES."default/images/icon/delete.png'> <img src='".HOSTNAME.THEMES."default/images/icon/update.png'></td>
</tr>");
		$i++;
	}
	echo ("
	</table>");
} else {
	echo "<h3>Data masih kosong!</h3>";
}
?>
