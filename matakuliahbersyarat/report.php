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
$db = db_select("matakuliah_bersyarat");
$count = mysql_num_rows($db);

if ($count != 0) {
	echo ("<table>
	<tr class='header'>
		<td width='150'>ID</td>
		<td>Kode Matakuliah</td>
		<td>Kode Matakuliah Bersyarat</td>
		<td width='75'>edit</td>
	</tr>");
	$i = 1;
	while ($matakuliah_bersyarat = mysql_fetch_array($db)){
		if ($i%2){
			$class = "ganjil";
		} else {
			$class = "genap";
		}
		echo ("<tr class='".$class."'><td align='center'>".$matakuliah_bersyarat[id]."</td><input type='hidden' id='id".$matakuliah_bersyarat[id]."' value='".$matakuliah_bersyarat[id]."'> <td>".$matakuliah_bersyarat[kd_matakuliah]."<input type='hidden' id='kd_matakuliah".$matakuliah_bersyarat[id]."' value='".$matakuliah_bersyarat[kd_matakuliah]."'></td> <td>"$matakuliah_bersyarat[kd_matakuliah_bersyarat]."<input type='hidden' id='kd_matakuliah_bersyarat".$matakuliah_bersyarat[id]."' value='".$matakuliah_bersyarat[kd_matakuliah_bersyarat]."'></td>
<td align='center'><input type='image' id='del".$matakuliah_bersyarat[id]."'  src='".HOSTNAME.THEMES."default/images/icon/delete.png'> <input type='image' id='update".$matakuliah_bersyarat[id]."' src='".HOSTNAME.THEMES."default/images/icon/update.png'></td>
</tr>");
		$i++;
	}
	echo ("
	</table>");
} else {
	echo "<h3>Data masih kosong!</h3>";
}
?>
