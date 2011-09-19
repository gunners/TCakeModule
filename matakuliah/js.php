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
	$('#matakuliah').submit(function() {
		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function(data) {
				alert(data);
				$('input#kd_mk').val('');
				$('input#matakuliah').val('');
				$('input#sks').val('');
				$('input#smt').val('');
				$('input#kd_jurusan').val('');
				$('input#program').val('');
				$('input#thn_kurikulum').val('');
				$('input#jenis_mk').val('');
				$('input#nip').val('');
			}
		})
		return false;
	});
<?php	
		$dbmatakuliah = db_select("matakuliah"); 
		while ($matakuliah = mysql_fetch_array($dbmatakuliah)){
			echo ("
			$('#update".$matakuliah[kd_mk]."').click(function(){
				var kd_mk = $('#kd_mk".$matakuliah[kd_mk]."').val();
				var matakuliah = $('#matakuliah".$matakuliah[kd_mk]."').val();
				var sks = $('#sks".$matakuliah[kd_mk]."').val();
				var smt = $('#smt".$matakuliah[kd_mk]."').val();
				var kd_jurusan = $('#kd_jurusan".$matakuliah[kd_mk]."').val();
				var program = $('#program".$matakuliah[kd_mk]."').val();
				var thn_kurikulum = $('#thn_kurikulum".$matakuliah[kd_mk]."').val();
				var jenis_mk = $('#jenis_mk".$matakuliah[kd_mk]."').val();
				var nip = $('#nip".$matakuliah[kd_mk]."').val();
				
				$('input#update').val('yes');
				$('input#kd_mk').val('');
				$('input#matakuliah').val('');
				$('input#sks').val('');
				$('input#smt').val('');
				$('input#kd_jurusan').val('');
				$('input#program').val('');
				$('input#thn_kurikulum').val('');
				$('input#jenis_mk').val('');
				$('input#nip').val('');
				
				
				$('input#kd_mk').val(kd_mk);
				$('input#matakuliah').val(matakuliah);
				$('input#sks').val(sks);
				$('input#smt').val(smt);
				$('input#kd_jurusan').val(kd_jurusan);
				$('input#program').val(program);
				$('input#thn_kurikulum').val(thn_kurikulum);
				$('input#jenis_mk').val(jenis_mk);
				$('input#kd_mk').val(kd_mk);
				$('input#nip').val(nip);


				$('.entry').tabs().tabs('select',0);
			});
			");
		}
?>
$("#nip").autocomplete("<?php echo HOSTNAME; ?>plugin/matakuliah/cari_nip.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		minChars: 1,
		max: 10,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
$("#kd_jurusan").autocomplete("<?php echo HOSTNAME; ?>plugin/matakuliah/cari_kd_jurusan.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		minChars: 1,
		max: 10,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});

$("#smt").autocomplete("<?php echo HOSTNAME; ?>plugin/matakuliah/cari_semester.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		minChars: 1,
		max: 10,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
$("#thn_kurikulum").autocomplete("<?php echo HOSTNAME; ?>plugin/matakuliah/cari_tahun_ajaran.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		minChars: 1,
		max: 10,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
