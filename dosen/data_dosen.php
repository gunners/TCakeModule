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
include ("../../inc/define.php");
include (HOST.CONF);
include (HOST.FUNC);
conn_db($host,$user,$pass,$db);
$cari = $_POST['cari'];
$db = db_select_none("dosen","where nama='$cari' limit 1");
$count = mysql_num_rows($db);

if ($count > '0') {
while ($dosen = mysql_fetch_array($db)){
?>
<table width="524" border="0" cellpadding="0" cellspacing="2">
  <tr>
    <td width="172">NIP</td>
    <td width="10">:</td>
    <td width="342"><?php echo $dosen[nip]; ?></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><?php echo $dosen[nama]; ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $dosen[alamat]; ?></td>
  </tr>
  <tr>
    <td>Kota</td>
    <td>:</td>
    <td><?php echo $dosen[kota]; ?></td>
  </tr>
  <tr>
    <td>Kode Jurusan </td>
    <td>:</td>
    <td><?php echo $dosen[kd_jurusan]; ?></td>
  </tr>
  <tr>
    <td>Kode Fakultas </td>
    <td>:</td>
    <td><?php echo $dosen[kd_fakultas]; ?></td>
  </tr>
  <tr>
    <td>Email </td>
    <td>:</td>
    <td><?php echo $dosen[email]; ?></td>
  </tr>
  <tr>
    <td>Website</td>
    <td>:</td>
    <td><?php echo $dosen[web]; ?></td>
  </tr>
  <tr>
    <td>Phone/HP </td>
    <td>:</td>
    <td><?php echo $dosen[phone_hp]; ?></td>
  </tr>
  <tr>
    <td>Gelar S1 </td>
    <td>:</td>
    <td><?php echo $dosen[gelar_s1]; ?></td>
  </tr>
  <tr>
    <td>Gelar S2 </td>
    <td>:</td>
    <td><?php echo $dosen[gelar_s2]; ?></td>
  </tr>
  <tr>
    <td>Gelar S3 </td>
    <td>:</td>
    <td><?php echo $dosen[gelar_s3]; ?></td>
  </tr>
  <tr>
    <td>Gelar GB </td>
    <td>:</td>
    <td><?php echo $dosen[gelar_gb]; ?></td>
  </tr>
  <tr>
    <td>Gelar Profesi </td>
    <td>:</td>
    <td><?php echo $dosen[gelar_profesi]; ?></td>
  </tr>
  <tr>
    <td>Golongan</td>
    <td>:</td>
    <td><?php echo $dosen[gol]; ?></td>
  </tr>
  <tr>
    <td>Pangkat</td>
    <td>:</td>
    <td><?php echo $dosen[pangkat]; ?></td>
  </tr>
  <tr>
    <td>Tamat CPNS </td>
    <td>:</td>
    <td><?php echo $dosen[tmt_cpns]; ?></td>
  </tr>
  <tr>
    <td>Tamat PNS </td>
    <td>:</td>
    <td><?php echo $dosen[tmt_pns]; ?></td>
  </tr>
  <tr>
    <td>Tanggal Keluar </td>
    <td>:</td>
    <td><?php echo $dosen[tgl_keluar]; ?></td>
  </tr>
  <tr>
    <td>Karpeg</td>
    <td>:</td>
    <td><?php echo $dosen[karpeg]; ?></td>
  </tr>
  <tr>
    <td>Kelurahan</td>
    <td>:</td>
    <td><?php echo $dosen[kelurahan]; ?></td>
  </tr>
  <tr>
    <td>Kecamatan</td>
    <td>:</td>
    <td><?php echo $dosen[kecamatan]; ?></td>
  </tr>
  <tr>
    <td>Propinsi</td>
    <td>:</td>
    <td><?php echo $dosen[propinsi]; ?></td>
  </tr>
  <tr>
    <td>Kode Pos </td>
    <td>:</td>
    <td><?php echo $dosen[kd_pos]; ?></td>
  </tr>
  <tr>
    <td>Tempat Lahir </td>
    <td>:</td>
    <td><?php echo $dosen[tempat_lahir]; ?></td>
  </tr>
  <tr>
    <td>Tanggal Lahir </td>
    <td>:</td>
    <td><?php echo $dosen[tgl_lahir]; ?></td>
  </tr>
  <tr>
    <td>Nama Pasangan </td>
    <td>:</td>
    <td><?php echo $dosen[nama_pasangan]; ?></td>
  </tr>
  <tr>
    <td>Pekerjaan Pasangan </td>
    <td>:</td>
    <td><?php echo $dosen[pekerjaan_pasangan]; ?></td>
  </tr>
  <tr>
    <td>Agama </td>
    <td>:</td>
    <td><?php echo $dosen[agama]; ?></td>
  </tr>
  <tr>
    <td>Jabatan Organisasi </td>
    <td>:</td>
    <td><?php echo $dosen[jabatan_organisasi]; ?></td>
  </tr>
  <tr>
    <td>Jabatan Akademik </td>
    <td>:</td>
    <td><?php echo $dosen[jabatan_akademik]; ?></td>
  </tr>
  <tr>
    <td>Pendidikan</td>
    <td>:</td>
    <td><?php echo $dosen[pendidikan]; ?></td>
  </tr>
  <tr>
    <td>Lulusan PT. Univ </td>
    <td>:</td>
    <td><?php echo $dosen[lulusan_PT_univ]; ?></td>
  </tr>
  <tr>
    <td>Bidang Ilmu </td>
    <td>:</td>
    <td><?php echo $dosen[bidang_ilmu]; ?></td>
  </tr>
</table>
<?php
}
}else {
	dialogbox("data tidak ditemukan");
}
?>
