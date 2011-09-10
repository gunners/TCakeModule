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

$db = db_select("tesis");
$count = mysql_num_rows($db);
if ($count != 0) {
echo ("<table>
	<tr class='header'>
		<td width='150'>nim</td>
		<td width='100'>judul</td>
		<td width='75'>edit</td>
	</tr>");
	$i = 1;
	while ($tesis = mysql_fetch_array($db)){
		if ($i%2){
			$class = "ganjil";
		} else {
			$class = "genap";
		}
		echo ("<tr class='".$class."'>
<td align='center'>".$tesis[nip]."</td><input type='hidden' id='nip".$tesis[id_tesis]."' value='".$tesis[nip]."'>
<td>".$tesis[judul]."<input type='hidden' id='judul".$tesis[id_tesis]."' value='".$tesis[judul]."'></td>			 
<td align='center'><img src='".HOSTNAME.THEMES."default/images/icon/delete.png'> <input type='image' id='update".$tesis[id_tesis]."' src='".HOSTNAME.THEMES."default/images/icon/update.png'></td>
</tr>");
		$i++;
	}
	echo ("
	</table>");
} else {
	echo "<h3>Data masih kosong!</h3>";
}
?>
