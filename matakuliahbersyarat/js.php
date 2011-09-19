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
	$('#matakuliah_bersyarat').submit(function() {
		$.ajax({
		 	type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function(data) {
				alert(data);
				$('input#id').val('');
				$('input#kd_matakuliah').val('');
				$('input#kd_matakuliah_bersyarat').val('');
			}
		})
		return false;
	});
	$('#dialogform').dialog({ autoOpen:false });
<?php	
		$dbmatakuliah_bersyarat = db_select("matakuliah_bersyarat");
		while ($matakuliah_bersyarat = mysql_fetch_array($dbmatakuliah_bersyarat)){
			echo ("
			$('#update".$matakuliah_bersyarat[kd_matakuliah_bersyarat]."').click(function(){
				var id = $('#id".$matakuliah_bersyarat[kd_matakuliah_bersyarat]."').val();
				var kd_matakuliah = $('#kd_matakuliah".$matakuliah_bersyarat[kd_matakuliah_bersyarat]."').val();
				var kd_matakuliah_bersyarat = $('#kd_matakuliah_bersyarat".$matakuliah_bersyarat[kd_matakuliah_bersyarat]."').val();
				
				$('input#update').val('');
				$('input#id').val('');
				$('input#kd_matakuliah').val('');
				$('input#kd_matakuliah_bersyarat').val('');
				
				$('input#update').val('yes');
				$('input#id').val(id);
				$('input#kd_matakuliah').val(kd_matakuliah);
				$('input#kd_matakuliah_bersyarat').val(kd_matakuliah_bersyarat);

				$('.entry').tabs().tabs('select',0);
			});
			");
		}

?>
