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

?>
	$('#fakultas').submit(function() {
		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function(data) {
				alert(data);
				$('input#fakultas').val('');
				$('input#kd_fakultas').val('');
			}
		})
		return false;
	});
		$('#dialogform').dialog({ autoOpen:false });
<?php	
		$dbfakultas = db_select("fakultas"); 
		while ($fakultas = mysql_fetch_array($dbfakultas)){
			echo ("
			$('#update".$fakultas[kd_fakultas]."').click(function(){
				var kd_fakultas = $('#kd_fakultas".$fakultas[kd_fakultas]."').val();
				var fakultas = $('#fakultas".$fakultas[kd_fakultas]."').val();

				$('input#fakultas').val('');
				$('input#kd_fakultas').val('');
				
				$('input#fakultas').val(fakultas);
				$('input#kd_fakultas').val(kd_fakultas);

				$('.entry').tabs().tabs('select',0);
			});
			");
		}

?>
