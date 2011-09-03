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
	$('#pelatihan').submit(function() {
		$.ajax({
		 	type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function(data) {
				alert(data);
				$('input#nip').val('');
				$('input#tgl_mulai').val('');
				$('input#tgl_akhir').val('');
				$('input#nama_pelatihan').val('');
				$('input#deskripsi').val('');
				$('input#lokasi').val('');
				$('input#keterangan').val('');
				$('input#sebagai').val('');
			}
		})
		return false;
	});
	$('#dialogform').dialog({ autoOpen:false });
<?php	
		$dbpelatihan = db_select("pelatihan"); 
		while ($pelatihan = mysql_fetch_array($dbpelatihan)){
			echo ("
			$('#update".$pelatihan[nip]."').click(function(){
				var nip = $('#nip".$pelatihan[nip]."').val();
				var tgl_mulai = $('#tgl_mulai".$pelatihan[nip]."').val();
				var tgl_akhir = $('#tgl_akhir".$pelatihan[nip]."').val();
				var nama_pelatihan = $('#nama_pelatihan".$pelatihan[nip]."').val();
				var deskripsi = $('#deskripsi".$pelatihan[nip]."').val();
				var lokasi = $('#lokasi".$pelatihan[nip]."').val();
				var keterangan = $('#keterangan".$pelatihan[nip]."').val();
				var sebagai = $('#sebagai".$pelatihan[nip]."').val();

				$('input#nip').val('');
				$('input#tgl_mulai').val('');
				$('input#tgl_akhir').val('');
				$('input#nama_pelatihan').val('');
				$('input#deskripsi').val('');
				$('input#lokasi').val('');
				$('input#keterangan').val('');
				$('input#sebagai').val('');
				
				$('input#nip').val(nip);
				$('input#tgl_mulai').val(tgl_mulai);
				$('input#tgl_akhir').val(tgl_akhir);
				$('input#nama_pelatihan').val(nama_pelatihan);
				$('input#deskripsi').val(deskripsi);
				$('input#lokasi').val(lokasi);
				$('input#keterangan').val(keterangan);
				$('input#sebagai').val(sebagai);

				$('.entry').tabs().tabs('select',0);
			});
			");
		}

?>
