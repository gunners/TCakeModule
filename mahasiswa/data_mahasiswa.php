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
<script>
$('d').fadeIn('slow');
$('tr#action').hide();
$('input#nip').hide();
$('input#nama').hide();
$('input#alamat').hide();
$('input#kota').hide();
$('input#kd_jurusan').hide();
$('input#kd_fakultas').hide();
$('input#email').hide();
$('input#jk').hide();
$('input#tempat_lahir').hide();
$('input#tgl_lahir').hide();
$('input#rt_rw').hide();
$('input#kd_pos').hide();
$('input#kd_telp').hide();
$('input#phone_hp').hide();
$('input#agama').hide();
$('input#suku').hide();
$('input#nama_ayah').hide();
$('input#nama_ibu').hide();
$('input#nama_wali').hide();
$('input#pekerjaan_ayah').hide();
$('input#pekerjaan_ibu').hide();
$('input#pekerjaan_wali').hide();
$('input#pendidikan_ayah').hide();
$('input#pendidikan_ibu').hide();
$('input#alamat_ortu').hide();
$('input#alamat_wali').hide();
$('input#asal_sekolah').hide();
$('input#prov_sekolah').hide();
$('input#lulus_sekolah_thn').hide();
$('input#ijasah_sekolah').hide();
$('input#nilai_sekolah').hide();
$('input#pilihan1').hide();
$('input#pilihan2').hide();
$('input#pilihan_lulus').hide();
$('input#kd_program').hide();
$('input#status_awal').hide();
$('input#jalur_masuk').hide();
$('input#lulus').hide();
$('input#tgl_lulus').hide();
$('input#thn_lulus').hide();
$('input#predikat_lulus').hide();
$('input#nip').hide();
$('input#tgl_ta').hide();
$('input#total_sks').hide();
$('input#ipk').hide();
$('input#judul_ta').hide();
$('input#pembimbing_ta').hide();
$('input#pembimbing1_ta').hide();
$('input#pembimbing2_ta').hide();
$('input#catatan_ta').hide();
$('input#nomor_ijasah').hide();
function edit(){
$('d').hide();
$('#edit').hide();
$('tr#action').fadeIn('slow');
$('input#nip').fadeIn('slow');
$('input#nama').fadeIn('slow');
$('input#alamat').fadeIn('slow');
$('input#kota').fadeIn('slow');
$('input#kd_jurusan').fadeIn('slow');
$('input#kd_fakultas').fadeIn('slow');
$('input#email').fadeIn('slow');
$('input#jk').fadeIn('slow');
$('input#tempat_lahir').fadeIn('slow');
$('input#tgl_lahir').fadeIn('slow');
$('input#rt_rw').fadeIn('slow');
$('input#kd_pos').fadeIn('slow');
$('input#kd_telp').fadeIn('slow');
$('input#phone_hp').fadeIn('slow');
$('input#agama').fadeIn('slow');
$('input#suku').fadeIn('slow');
$('input#nama_ayah').fadeIn('slow');
$('input#nama_ibu').fadeIn('slow');
$('input#nama_wali').fadeIn('slow');
$('input#pekerjaan_ayah').fadeIn('slow');
$('input#pekerjaan_ibu').fadeIn('slow');
$('input#pekerjaan_wali').fadeIn('slow');
$('input#pendidikan_ayah').fadeIn('slow');
$('input#pendidikan_ibu').fadeIn('slow');
$('input#alamat_ortu').fadeIn('slow');
$('input#alamat_wali').fadeIn('slow');
$('input#asal_sekolah').fadeIn('slow');
$('input#prov_sekolah').fadeIn('slow');
$('input#lulus_sekolah_thn').fadeIn('slow');
$('input#ijasah_sekolah').fadeIn('slow');
$('input#nilai_sekolah').fadeIn('slow');
$('input#pilihan1').fadeIn('slow');
$('input#pilihan2').fadeIn('slow');
$('input#pilihan_lulus').fadeIn('slow');
$('input#kd_program').fadeIn('slow');
$('input#status_awal').fadeIn('slow');
$('input#jalur_masuk').fadeIn('slow');
$('input#lulus').fadeIn('slow');
$('input#tgl_lulus').fadeIn('slow');
$('input#thn_lulus').fadeIn('slow');
$('input#predikat_lulus').fadeIn('slow');
$('input#nip').fadeIn('slow');
$('input#tgl_ta').fadeIn('slow');
$('input#ipk').fadeIn('slow');
$('input#judul_ta').fadeIn('slow');
$('input#pembimbing_ta').fadeIn('slow');
$('input#pembimbing1_ta').fadeIn('slow');
$('input#pembimbing2_ta').fadeIn('slow');
$('input#catatan_ta').fadeIn('slow');
$('input#nomor_ijasah').fadeIn('slow');


}
	$('#update_mahasiswa').submit(function() {
		$.ajax({
		 	type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function(data) {
				alert(data);
				$('table#data_mahasiswa').html('');
			}
		})
		return false;
	});
</script>
<?php
include ("../../inc/define.php");
include (HOST.CONF);
include (HOST.FUNC);
conn_db($host,$user,$pass,$db);
$cari = $_POST['cari'];
$db = db_select_none("mahasiswa","where nama='$cari' limit 1");
$count = mysql_num_rows($db);

if ($count > '0') {
while ($mahasiswa = mysql_fetch_array($db)){
?>
<center>
<table width="510" border="0" cellpadding="0" cellspacing="2" id="data_mahasiswa">
  <tr>
    <td width="200"></td>
    <td width="10">&nbsp;</td>
    <td width="300" ><div id='button'>
    <input type="submit" value="Edit" onclick="return edit()" id="edit"> 
    </div></td>
  </tr>
<form  id='update_mahasiswa' action='<?php echo HOSTNAME; ?>plugin/mahasiswa/db_proses.php?get=aksi' method='POST'>
  <tr id="action">
    <td></td>
    <td></td>
    <td>
    <div id='button'>
    <select name="aksi" class="select">
		<option value="">Pilih</option>
		<option value="update">Update</option>
		<option value="delete">Delete</option>
    </select> 
    <input type="submit" value="Action" id="action"> 
    </div>
    </td>
  </tr>
  <tr class="color">
    <td>NIM</td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[nim]; ?></d><input type="text" size="60"  id="nim" name="nim" value="<?php echo $mahasiswa[nim]; ?>"></td>
  </tr>
  <tr class="color">
    <td>Nama</td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[nama]; ?></d><input type="text" size="60"  id="nama" name="nama" value="<?php echo $mahasiswa[nama]; ?>"></td>
  </tr>
  <tr class="color">
    <td>Alamat</td>
    <td>:</td>
    <td><d><?php echo $dmahasiswa[alamat]; ?></d><input type="text" size="60"  id="alamat" name="alamat" value="<?php echo $mahasiswa[alamat]; ?>"></td>
  </tr>
  <tr class="color">
    <td>Kota</td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[kota]; ?></d><input type="text" size="60"  id="kota" name="kota" value="<?php echo $mahasiswa[kota]; ?>"></td>
  </tr>
  <tr class="color">
    <td>Kode Jurusan </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[kd_jurusan]; ?></d><input type="text" size="60"  id="kd_jurusan"  name="kd_jurusan" value="<?php echo $mahasiswa[kd_jurusan]; ?>"></td>
  </tr>
  <tr class="color">
    <td>Kode Fakultas </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[kd_fakultas]; ?></d><input type="text" size="60"  id="kd_fakultas"  name="kd_fakultas" value="<?php echo $mahasiswa[kd_fakultas]; ?>"></td>
  </tr>
<tr class="color">
    <td>Email </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[email]; ?></d><input type="text" size="60"  id="email"  name="email" value="<?php echo $mahasiswa[email]; ?>"></td>
  </tr>
<tr class="color">
    <td>JK </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[jk]; ?></d><input type="text" size="60"  id="jk"  name="jk" value="<?php echo $mahasiswa[jk]; ?>"></td>
  </tr>
<tr class="color">
    <td>Tempat Lahir </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[tempat_lahir]; ?></d><input type="text" size="60"  id="tempat_lahir"  name="tempat_lahir" value="<?php echo $mahasiswa[tempat_lahir]; ?>"></td>
  </tr>
<tr class="color">
    <td>Tanggal Lahir </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[tgl_lahir]; ?></d><input type="text" size="60"  id="tgl_lahir"  name="tgl_lahir" value="<?php echo $mahasiswa[tgl_lahir]; ?>"></td>
  </tr>
<tr class="color">
    <td>RT RW </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[rt_rw]; ?></d><input type="text" size="60"  id="rt_rw"  name="rt_rw" value="<?php echo $mahasiswa[rt_rw]; ?>"></td>
  </tr>
<tr class="color">
    <td>Kode Pos </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[kd_pos]; ?></d><input type="text" size="60"  id="kd_pos"  name="kd_pos" value="<?php echo $mahasiswa[kd_pos]; ?>"></td>
  </tr>
<tr class="color">
    <td>Kode Telp </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[kd_telp]; ?></d><input type="text" size="60"  id="kd_telp"  name="kd_telp" value="<?php echo $mahasiswa[kd_telp]; ?>"></td>
  </tr>
<tr class="color">
    <td>Phone HP </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[phone_hp]; ?></d><input type="text" size="60"  id="phone_hp"  name="phone_hp" value="<?php echo $mahasiswa[phone_hp]; ?>"></td>
  </tr>
<tr class="color">
    <td>Agama </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[agama]; ?></d><input type="text" size="60"  id="agama"  name="agama" value="<?php echo $mahasiswa[agama; ?>"></td>
  </tr>
<tr class="color">
    <td>Suku </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[suku]; ?></d><input type="text" size="60"  id="suku"  name="suku" value="<?php echo $mahasiswa[suku]; ?>"></td>
  </tr>
<tr class="color">
    <td>Nama Ayah </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[nama_ayah]; ?></d><input type="text" size="60"  id="nama_ayah"  name="nama_ayah" value="<?php echo $mahasiswa[nama_ayah]; ?>"></td>
  </tr>
<tr class="color">
    <td>Nama Ibu </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[nama_ibu]; ?></d><input type="text" size="60"  id="nama_ibu"  name="nama_ibu" value="<?php echo $mahasiswa[nama_ibu]; ?>"></td>
  </tr>
<tr class="color">
    <td>Nama Wali </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[nama_wali]; ?></d><input type="text" size="60"  id="nama_wali"  name="nama_wali" value="<?php echo $mahasiswa[nama_wali]; ?>"></td>
  </tr>
<tr class="color">
    <td>Pekerjaan Ayah </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[pekerjaan_ayah]; ?></d><input type="text" size="60"  id="pekerjaan_ayah"  name="pekerjaan_ayah" value="<?php echo $mahasiswa[pekerjaan_ayah]; ?>"></td>
  </tr>
<tr class="color">
    <td>Pekerjaan Ibu </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[pekerjaan_ibu]; ?></d><input type="text" size="60"  id="pekerjaan_ibu"  name="pekerjaan_ibu" value="<?php echo $mahasiswa[pekerjaan_ibu]; ?>"></td>
  </tr>
<tr class="color">
    <td>Pekerjaan Wali </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[pekerjaan_wali]; ?></d><input type="text" size="60"  id="pekerjaan_wali"  name="pekerjaan_wali" value="<?php echo $mahasiswa[pekerjaan_wali]; ?>"></td>
  </tr>
<tr class="color">
    <td>Alamat ORTU </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[alamat_ortu]; ?></d><input type="text" size="60"  id="alamat_ortu"  name="alamat_ortu" value="<?php echo $mahasiswa[alamat_ortu]; ?>"></td>
  </tr>
<tr class="color">
    <td>Alamat Wali </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[alamat_wali]; ?></d><input type="text" size="60"  id="alamat_wali"  name="alamat_wali" value="<?php echo $mahasiswa[alamat_wali]; ?>"></td>
  </tr>
<tr class="color">
    <td>Asal Sekolah </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[asal_sekolah]; ?></d><input type="text" size="60"  id="asal_sekolah"  name="asal_sekolah" value="<?php echo $mahasiswa[asal_sekolah]; ?>"></td>
  </tr>
<tr class="color">
    <td>Prov Sekolah </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[prov_sekolah]; ?></d><input type="text" size="60"  id="prov_sekolah"  name="prov_sekolah" value="<?php echo $mahasiswa[prov_sekolah]; ?>"></td>
  </tr>
<tr class="color">
    <td>Lulus sekolah Tahun </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[lulus_sekolah_thn]; ?></d><input type="text" size="60"  id="lulus_sekolah_thn"  name="lulus_sekolah_thn" value="<?php echo $mahasiswa[lulus_sekolah_thn]; ?>"></td>
  </tr>
<tr class="color">
    <td>Ijasah Sekolah </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[ijasah_sekolah]; ?></d><input type="text" size="60"  id="ijasah_sekolah"  name="ijasah_sekolah" value="<?php echo $mahasiswa[ijasah_sekolah]; ?>"></td>
  </tr>
<tr class="color">
    <td>Nilai Sekolah </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[nilai_sekolah]; ?></d><input type="text" size="60"  id="nilai_sekolah"  name="nilai_sekolah" value="<?php echo $mahasiswa[nilai_sekolah]; ?>"></td>
  </tr>
<tr class="color">
    <td>Pilihan1 </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[pilihan1]; ?></d><input type="text" size="60"  id="pilihan1"  name="pilihan1" value="<?php echo $mahasiswa[pilihan1]; ?>"></td>
  </tr>
<tr class="color">
    <td>Pilihan2 </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[pilihan2]; ?></d><input type="text" size="60"  id="pilihan2"  name="pilihan2" value="<?php echo $mahasiswa[nilai_sekolah]; ?>"></td>
  </tr>
<tr class="color">
    <td>Pilihan_Lulus </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[pilihan_lulus]; ?></d><input type="text" size="60"  id="pilihan_lulus"  name="pilihan_lulus" value="<?php echo $mahasiswa[pilihan_lulus]; ?>"></td>
  </tr>
<tr class="color">
    <td>Kode program </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[kd_program]; ?></d><input type="text" size="60"  id="kd_program"  name="kd_program" value="<?php echo $mahasiswa[kd_program]; ?>"></td>
  </tr>
<tr class="color">
    <td>Status Awal </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[status_awal]; ?></d><input type="text" size="60"  id="status_awal"  name="status_awal" value="<?php echo $mahasiswa[status_awal]; ?>"></td>
  </tr>
<tr class="color">
    <td>Jalur Masuk] </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[jalur_masuk]; ?></d><input type="text" size="60"  id="jalur_masuk]"  name="jalur_masuk]" value="<?php echo $mahasiswa[jalur_masuk]]; ?>"></td>
  </tr>
<tr class="color">
    <td>Lulus </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[lulus]; ?></d><input type="text" size="60"  id="lulus"  name="lulus" value="<?php echo $mahasiswa[lulus]; ?>"></td>
  </tr>
<tr class="color">
    <td>Tanggal Lulus </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[tgl_lulus]; ?></d><input type="text" size="60"  id="tgl_lulus]"  name="tgl_lulus]" value="<?php echo $mahasiswa[tgl_lulus]]; ?>"></td>
  </tr>
<tr class="color">
    <td>Tahun Lulus </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[thn_lulus]; ?></d><input type="text" size="60"  id="thn_lulus"  name="thn_lulus" value="<?php echo $mahasiswa[thn_lulus]; ?>"></td>
  </tr>
<tr class="color">
    <td>Predikat Lulus </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[predikat_lulus]; ?></d><input type="text" size="60"  id="predikat_lulus"  name="predikat_lulus" value="<?php echo $mahasiswa[predikat_lulus]; ?>"></td>
  </tr>
<tr class="color">
    <td>NIP </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[nip]; ?></d><input type="text" size="60"  id="nip"  name="nip" value="<?php echo $mahasiswa[nip]; ?>"></td>
  </tr>
<tr class="color">
    <td>Tanggal TA </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[tgl_ta]; ?></d><input type="text" size="60"  id="tgl_ta"  name="tgl_ta" value="<?php echo $mahasiswa[tgl_ta]; ?>"></td>
  </tr>
<tr class="color">
    <td>IPK </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[ipk]; ?></d><input type="text" size="60"  id="ipk"  name="ipk" value="<?php echo $mahasiswa[ipk]; ?>"></td>
  </tr>
<tr class="color">
    <td>Pembimbing TA </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[pembimbing_ta]; ?></d><input type="text" size="60"  id="pembimbing_ta"  name="pembimbing_ta" value="<?php echo $mahasiswa[pembimbing_ta]; ?>"></td>
  </tr>
<tr class="color">
    <td>Pembimbing1 TA </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[pembimbing1_ta]; ?></d><input type="text" size="60"  id="pembimbing1_ta"  name="pembimbing1_ta" value="<?php echo $mahasiswa[pembimbing1_ta]; ?>"></td>
  </tr>
<tr class="color">
    <td>Pembimbing2 TA </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[pembimbing2_ta]; ?></d><input type="text" size="60"  id="pembimbing2_ta"  name="pembimbing2_ta" value="<?php echo $mahasiswa[pembimbing2_ta]; ?>"></td>
  </tr>
<tr class="color">
    <td>Catatan TA </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[catatan_ta]; ?></d><input type="text" size="60"  id="catatan_ta"  name="catatan_ta" value="<?php echo $mahasiswa[catatan_ta]; ?>"></td>
  </tr>
<tr class="color">
    <td>Nomor Ijasah </td>
    <td>:</td>
    <td><d><?php echo $mahasiswa[nomor_ijasah]; ?></d><input type="text" size="60"  id="nomor_ijasah"  name="nomor_ijasah" value="<?php echo $mahasiswa[nomor_ijasah]; ?>"></td>
  </tr>
</table></form><?php 
}
}else {
	dialogbox("data tidak ditemukan");
}
?>
