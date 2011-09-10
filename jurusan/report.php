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

$dbjurusan = db_select("jurusan");
$count = mysql_num_rows($dbjurusan);

if ($count != 0) {
	echo ("<center><table>
	<tr class='header'>
		<td>Kode Jurusan</td>
		<td width='150'>Jurusan</td>
		<td width='75'>edit</td>
	</tr>");
	$i = 1;
	while ($jurusan = mysql_fetch_array($dbjurusan)){
		if ($i%2){
			$class = "ganjil";
		} else {
			$class = "genap";
		}
		echo ("<tr class='".$class."'><td align='center'>".$jurusan[kd_jurusan]."<input type='hidden' id='kd_jurusan".$jurusan[kd_jurusan]."' value='".$jurusan[kd_jurusan]."'></td> 
		<td>".$jurusan[jurusan]."<input type='hidden' id='jurusan".$jurusan[kd_jurusan]."' value='".$jurusan[jurusan]."'></td>
<td align='center'><input type='image' id='del".$jurusan[kd_jurusan]."' src='".HOSTNAME.THEMES."default/images/icon/delete.png'>
 <input type='image' id='update".$jurusan[kd_jurusan]."' src='".HOSTNAME.THEMES."default/images/icon/update.png'></td>
</tr>");
		$i++;
	}
	echo ("
	</table></center>");
} else {
	echo "<h3>Data masih kosong!</h3>";
}
?>
