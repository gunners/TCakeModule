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

	$('#jurusan').submit(function() {
		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function(data) {
				alert(data);
				$('input#jurusan').val('');
				$('input#kd_jurusan').val('');
			}
		})
		return false;
	});
	$('#dialogform').dialog({ autoOpen:false });
<?php	
		$dbjurusan = db_select("jurusan"); //jurusan
		while ($jurusan = mysql_fetch_array($dbjurusan)){
			echo ("
			$('#update".$jurusan[kd_jurusan]."').click(function(){
				var kd_jurusan = $('#kd_jurusan".$jurusan[kd_jurusan]."').val();
				var jurusan = $('#jurusan".$jurusan[kd_jurusan]."').val();
				$('input#update').val('yes');
				$('input#jurusan').val('');
				$('input#kd_jurusan').val('');
				
				$('input#jurusan').val(jurusan);
				$('input#kd_jurusan').val(kd_jurusan);

				$('.entry').tabs().tabs('select',0);
			});
			");
		}

?>
