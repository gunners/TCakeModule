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
	$('#dataruangan').submit(function() {
		$.ajax({
		 	type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function(data) {
				alert(data);
				$('input#text').attr('value','');
			}
		})
		return false;
	});
	$('#dialogform').dialog({ autoOpen:false });
<?php	
		$dbdataruangan = db_select("dataruangan"); 
		while ($dataruangan = mysql_fetch_array($dbdataruangan)){
			echo ("
			$('#update".$dataruangan[kd_ruangan]."').click(function(){
				var kd_ruangan = $('#kd_ruangan".$dataruangan[kd_ruangan]."').val();
				var nama_ruangan = $('#nama_ruangan".$dataruangan[kd_ruangan]."').val();
				var lantai = $('#lantai".$dataruangan[kd_ruangan]."').val();
				var kapasitas = $('#kapasitas".$dataruangan[kd_ruangan]."').val();
				var kapasitas_ujian = $('#kapasitas_ujian".$dataruangan[kd_ruangan]."').val();
				var keterangan = $('#keterangan".$dataruangan[kd_ruangan]."').val();
				
				$('input#update').val('');
				$('input#kd_ruangan').val('');
				$('input#nama_ruangan').val('');
				$('input#lantai').val('');
				$('input#kapasitas').val('');
				$('input#kapasitas_ujian').val('');
				$('input#keterangan').val('');
				
				$('input#update').val('yes');
				$('input#kd_ruangan').val(kd_ruangan);
				$('input#nama_ruangan').val(nama_ruangan);
				$('input#lantai').val(lantai);
				$('input#kapasitas').val(kapasitas);
				$('input#kapasitas_ujian').val(kapasitas_ujian);
				$('input#keterangan').val(keterangan);
				

				$('.entry').tabs().tabs('select',0);
			});
			");
		}

?>
