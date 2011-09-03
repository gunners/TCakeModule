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
	$('#nilai').submit(function() {
		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function(data) {
				alert(data);
				$('input#nim').val('');
				$('input#kd_mk').val('');
				$('input#nilai').val('');
				$('input#terbilang').val('');
				$('input#kd_jurusan').val('');
			}
		})
		return false;
	});
	$('#dialogform').dialog({ autoOpen:false });
<?php	
		$dbnilai = db_select("nilai"); 
		while ($nilai = mysql_fetch_array($dbnilai)){
			echo ("
			$('#update".$nilai[id_nilai]."').click(function(){
				var nim = $('input#nim".$nilai[id_nilai]."').val();
				var kd_mk = $('input#kd_mk".$nilai[id_nilai]."').val();
				var nilai = $('input#nilai".$nilai[id_nilai]."').val();
				var terbilang = $('input#terbilang".$nilai[id_nilai]."').val();
				var kd_jurusan = $('input#kd_jurusan".$nilai[id_nilai]."').val();
				
				$('input#nim').val('');
				$('input#kd_mk').val('');
				$('input#nilai').val('');
				$('input#terbilang').val('');
				$('input#kd_jurusan').val('');
				
				$('input#nim').val(nim);
				$('input#kd_mk').val(kd_mk);
				$('input#nilai').val(nilai);
				$('input#terbilang').val(terbilang);
				$('input#kd_jurusan').val(kd_jurusan);


				$('.entry').tabs().tabs('select',0);
			});
			");
		}

?>

$("#nim").autocomplete("<?php echo HOSTNAME; ?>plugin/nilai/cari_nim.php", {
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
$("#kd_mk").autocomplete("<?php echo HOSTNAME; ?>plugin/nilai/cari_kd_matakuliah.php", {
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
$("#kd_jurusan").autocomplete("<?php echo HOSTNAME; ?>plugin/nilai/cari_jurusan.php", {
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

$("input#nilai").keyup(
function() {
	var nilai = $(this).val();
	if (nilai == '0'){
		$("input#terbilang").val("E");
	}
	else if (nilai == '1'){
		$("input#terbilang").val("D");
	} 
	else if (nilai == '2'){
		$("input#terbilang").val("C");
	}
	else if (nilai == '3'){
		$("input#terbilang").val("B");
	}
	else if (nilai == '4'){
		$("input#terbilang").val("A");
	}
	else {
		$("input#terbilang").val("");
	}
}
);

$("input#terbilang").keyup(
function() {
	var grade = $(this).val();
	if (grade == 'E'){
		$("input#nilai").val("0");
	}
	else if (grade == 'D'){
		$("input#nilai").val("1");
	} 
	else if (grade == 'C'){
		$("input#nilai").val("2");
	}
	else if (grade == 'B'){
		$("input#nilai").val("3");
	}
	else if (grade == 'A'){
		$("input#nilai").val("4");
	}
	else {
		$("input#nilai").val("");
	}
}
);
