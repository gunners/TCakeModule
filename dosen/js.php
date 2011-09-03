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
$('#caridosen').submit(function() {
		$.ajax({
		 	type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function(data) {
				$('#report').html(data);
			}
		})
		return false;
	});
	
	$('#dosen').submit(function() {
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
	
$('#tgl_lahir').datepicker({
		changeMonth:true,
		changeYear:true
	});

$('#tgl_keluar').datepicker({
		changeMonth:true,
		changeYear:true
	});


	$("#cari").autocomplete("<?php echo HOSTNAME; ?>plugin/dosen/cari_nama_dosen.php", {
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
	
	$("#agama").autocomplete("<?php echo HOSTNAME; ?>plugin/dosen/cari_agama.php", {
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


