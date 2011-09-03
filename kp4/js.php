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
	$('#kp4').submit(function() {
		$.ajax({
		 	type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function(data) {
				alert(data);
				$('input#id').val('');
				$('input#nip_dosen').val('');
				$('input#jk').val('');
				$('input#suami_istri').val('');
				$('input#tmpt_lahir').val('');
				$('input#tgl_lahir').val('');
				$('input#tgl_nikah').val('');
				$('input#pekerjaan').val('');
				$('input#nama_anak1').val('');
				$('input#tgl_lahir_anak1').val('');
				$('input#tmpt_lahir_anak1').val('');
				$('input#nama_anak2').val('');
				$('input#tgl_lahir_anak2').val('');
				$('input#tmpt_lahir_anak2').val('');
				$('input#nama_anak3').val('');
				$('input#tgl_lahir_anak3').val('');
				$('input#tmpt_lahir_anak3').val('');
			}
		})
		return false;
	});
	$('#dialogform').dialog({ autoOpen:false });
<?php	
		$dbkp4 = db_select("kp4"); 
		while ($kp4 = mysql_fetch_array($dbkp4)){
			echo ("
			$('#update".$kp4[id]."').click(function(){
				var id = $('#id".$kp4[id]."').val();
				var nip_dosen = $('#nip_dosen".$kp4[id]."').val();
				var jk = $('#lantai".$kp4[id]."').val();
				var suami_istri = $('#suami_istri".$kp4[id]."').val();
				var tmpt_lahir = $('#tmpt_lahir".$kp4[id]."').val();
				var tgl_lahir = $('#tgl_lahir".$kp4[id]."').val();
				var tgl_nikah = $('#tgl_nikah".$kp4[id]."').val();
				var pekerjaan = $('#pekerjaan".$kp4[id]."').val();
				var nama_anak1 = $('#nama_anak1".$kp4[id]."').val();
				var tgl_lahir_anak1 = $('#tgl_lahir_anak1".$kp4[id]."').val();
				var tmpt_lahir_anak1 = $('#tmpt_lahir_anak1".$kp4[id]."').val();
				var nama_anak2 = $('#nama_anak2".$kp4[id]."').val();
				var tgl_lahir_anak2 = $('#tgl_lahir_anak2".$kp4[id]."').val();
				var tmpt_lahir_anak2 = $('#tmpt_lahir_anak2".$kp4[id]."').val();
				var nama_anak3 = $('#nama_anak3".$kp4[id]."').val();
				var tgl_lahir_anak3 = $('#tgl_lahir_anak3".$kp4[id]."').val();
				var tmpt_lahir_anak3 = $('#tmpt_lahir_anak3".$kp4[id]."').val();
				
				
				$('input#id').val('');
				$('input#nip_dosen').val('');
				$('input#jk').val('');
				$('input#suami_istri').val('');
				$('input#tmpt_lahir').val('');
				$('input#tgl_lahir').val('');
				$('input#tgl_nikah').val('');
				$('input#pekerjaan').val('');
				$('input#nama_anak1').val('');
				$('input#tgl_lahir_anak1').val('');
				$('input#tmpt_lahir_anak1').val('');
				$('input#nama_anak2').val('');
				$('input#tgl_lahir_anak2').val('');
				$('input#tmpt_lahir_anak2').val('');
				$('input#nama_anak3').val('');
				$('input#tgl_lahir_anak3').val('');
				$('input#tmpt_lahir_anak3').val('');
				
				$('input#id').val(id);
				$('input#nip_dosen').val(nip_dosen);
				$('input#jk').val(jk);
				$('input#suami_istri').val(suami_istri);
				$('input#tmpt_lahir').val(tmpt_lahir);
				$('input#tgl_lahir').val(tgl_lahir);
				$('input#tgl_nikah').val(tgl_nikah);
				$('input#pekerjaan').val(pekerjaan);
				$('input#nama_anak1').val(ama_anak1);
				$('input#tgl_lahir_anak1').val(tgl_lahir_anak1);
				$('input#tmpt_lahir_anak1').val(tmpt_lahir_anak1);
				$('input#nama_anak2').val(nama_anak2);
				$('input#tgl_lahir_anak2').val(tgl_lahir_anak2);
				$('input#tmpt_lahir_anak2').val(tmpt_lahir_anak2);
				$('input#nama_anak3').val(nama_anak3);
				$('input#tgl_lahir_anak3').val(tgl_lahir_anak3);
				$('input#tmpt_lahir_anak3').val(tmpt_lahir_anak3);
				

				$('.entry').tabs().tabs('select',0);
			});
			");
		}

?>
