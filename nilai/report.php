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
$db = mysql_query("select * from nilai order by id_nilai");
$count = mysql_num_rows($db);
if ($count != 0) {
echo ("<table>
	<tr class='header'>
		<td width='150'>nim</td>
		<td>kode Mata Kuliah</td>
		<td width='100'>Nilai</td>
		<td width='100'>Terbilang</td>
		<td>Jurusan</td>
		<td width='75'>edit</td>
	</tr>");
	$i = 1;
	while ($nilai = mysql_fetch_array($db)){
		if ($i%2){
			$class = "ganjil";
		} else {
			$class = "genap";
		}
		echo ("<tr class='".$class."'>
<td align='center'>".$nilai[nim]."<input type='hidden' id='nim".$nilai[id_nilai]."' value='".$nilai[nim]."'></td> 
<td>".$nilai[kd_mk]."<input type='hidden' id='kd_mk".$nilai[id_nilai]."' value='".$nilai[kd_mk]."'> </td>
<td>".$nilai[nilai]."<input type='hidden' id='nilai".$nilai[id_nilai]."' value='".$nilai[nilai]."'></td>
<td>".$nilai[terbilang]."<input type='hidden' id='terbilang".$nilai[id_nilai]."' value='".$nilai[terbilang]."'></td>
<td>".$nilai[kd_jurusan]."<input type='hidden' id='kd_jurusan".$nilai[id_nilai]."' value='".$nilai[kd_jurusan]."'></td>
<td align='center'><img src='".HOSTNAME.THEMES."default/images/icon/delete.png'> <input type='image' id='update".$nilai[id_nilai]."' src='".HOSTNAME.THEMES."default/images/icon/update.png' id='update".$nilai[id_nilai]."'></td>
</tr>");
		$i++;
	}
	echo ("
	</table>");
} else {
	echo "<h3>Data masih kosong!</h3>";
}
?>
