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
$db = db_select("fakultas");
$count = mysql_num_rows($db);

if ($count != 0) {
	echo ("<center><table border='0' cellpadding='0' cellspacing='1' class='ui-state-default'>
	<tr class='header'>
		<td width='200'>Kode Fakultas</td>
		<td width='200'>Fakultas</td>
		<td width='75'>edit</td>
	</tr>");
	$i = 1;
	while ($fakultas = mysql_fetch_array($db)){
		if ($i%2){
			$class = "ganjil";
		} else {
			$class = "genap";
		}
		echo ("<tr class='".$class."'>
<td align='center'><b>".$fakultas[kd_fakultas]."</b>
<input type='hidden' id='kd_fakultas".$fakultas[kd_fakultas]."' value='".$fakultas[kd_fakultas]."'>
</td> <td><b>".$fakultas[fakultas]."
</b><input type='hidden' id='fakultas".$fakultas[kd_fakultas]."' value='".$fakultas[fakultas]."'></td>
<td align='center'><img src='".HOSTNAME.THEMES."default/images/icon/delete.png'> <input type='image' id='update".$fakultas[kd_fakultas]."' src='".HOSTNAME.THEMES."default/images/icon/update.png'></td>
</tr>");
		$i++;
	}
	echo ("
	</table></center>");
} else {
	echo "<h3>Data masih kosong!</h3>";
}
?>
