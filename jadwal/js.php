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
	$('#jadwal').submit(function() {
		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function(data) {
				alert(data);
				
				$('input#jadwal').val('');
				$('input#kd_mk').val('');
				$('input#hari').val('');
				$('input#tanggal').val('');
				$('input#jam_start').val('');
				$('input#jam_finish').val('');
				$('input#nip').val('');
				$('input#nama_mata_kuliah').val('');
				$('input#sks').val('');
				$('input#jurusan').val('');
				$('input#program').val('');
				$('input#kd_ruangan').val('');
				$('input#kelas').val('');
				$('input#thn_kurikulum').val('');
			}
		})
		return false;
	});
	$('#dialogform').dialog({ autoOpen:false });
<?php	
		$dbjadwal = db_select("jadwal");
		while ($jadwal = mysql_fetch_array($dbjadwal)){
			echo ("
			$('#update".$jadwal[kd_mk]."').click(function(){
				var kd_mk = $('#kd_mk".$jadwal[kd_mk]."').val();
				var hari = $('#hari".$jadwal[kd_mk]."').val();
				var tanggal = $('#tanggal".$jadwal[kd_mk]."').val();
				var jam_start = $('#jam_start".$jadwal[kd_mk]."').val();
				var jam_finish = $('#jam_finish".$jadwal[kd_mk]."').val();
				var nip = $('#hari".$jadwal[kd_mk]."').val();
				var nama_mata_kuliah = $('#nama_mata_kuliah".$jadwal[kd_mk]."').val();
				var sks = $('#sks".$jadwal[kd_mk]."').val();
				var jurusan = $('#jurusan".$jadwal[kd_mk]."').val();
				var program = $('#program".$jadwal[kd_mk]."').val();
				var kd_ruangan = $('#kd_ruangan".$jadwal[kd_mk]."').val();
				var kelas = $('#kelas".$jadwal[kd_mk]."').val();
				var thn_kurikulum = $('#thn_kurikulum".$jadwal[kd_mk]."').val();
				$('input#update').val('yes');
				$('input#jadwal').val('');
				$('input#kd_mk').val('');
				$('input#hari').val('');
				$('input#tanggal').val('');
				$('input#jam_start').val('');
				$('input#jam_finish').val('');
				$('input#nip').val('');
				$('input#nama_mata_kuliah').val('');
				$('input#sks').val('');
				$('input#jurusan').val('');
				$('input#program').val('');
				$('input#kd_ruangan').val('');
				$('input#kelas').val('');
				$('input#thn_kurikulum').val('');

				$('input#jadwal').val(jadwal);
				$('input#kd_mk').val(kd_mk);
				$('input#hari').val(hari);
				$('input#tanggal').val(tanggal);
				$('input#jam_start').val(jam_start);
				$('input#jam_finish').val(jam_finish);
				$('input#nip').val(nip);
				$('input#nama_mata_kuliah').val(nama_mata_kuliah);
				$('input#sks').val(sks);
				$('input#jurusan').val(jurusan);
				$('input#program').val(program);
				$('input#kd_ruangan').val(kd_ruangan);
				$('input#kelas').val(kelas);
				$('input#thn_kurikulum').val(thn_kurikulum);

				$('.entry').tabs().tabs('select',0);
			});
			");
		}

?>
