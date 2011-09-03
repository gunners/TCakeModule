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
include( "../../inc/export2xls.php" );
include (HOST.CONF);
include (HOST.FUNC);
conn_db($host,$user,$pass,$db);


	$excel = new ExcelGen("$_POST[export]");

			$excel->WriteText('1','0','NIP');
			
			$excel->WriteText('1','1','Nama');
			
			$excel->WriteText('1','2','Alamat');
			
			$excel->WriteText('1','3','Kota');			

			$excel->WriteText('1','4','Kode Jurusan');	
					
			$excel->WriteText('1','5','Kode Fakultas');	
					
			$excel->WriteText('1','6','Email');	
					
			$excel->WriteText('1','7','Website');	
					
			$excel->WriteText('1','8','No Telp/HP');	
					
			$excel->WriteText('1','9','Gelar S1');	
					
			$excel->WriteText('1','10','Gelar S2');	
					
			$excel->WriteText('1','11','Gelar S3');

			$excel->WriteText('1','12','Gelar GB');	
					
			$excel->WriteText('1','13','Gelar Profesi');	
					
			$excel->WriteText('1','14','Gol');	
					
			$excel->WriteText('1','15','Pangkat');	
					
			$excel->WriteText('1','16','Tamat CPNS');	
					
			$excel->WriteText('1','17','Tamat PNS');	
					
			$excel->WriteText('1','18','Tanggal Keluar');	
					
			$excel->WriteText('1','19','Karpeg');	
					
			$excel->WriteText('1','20','Kelurahan');	
					
			$excel->WriteText('1','21','Kecamatan');	
					
			$excel->WriteText('1','22','Propinsi');	
					
			$excel->WriteText('1','23','Kode Pos');	
					
			$excel->WriteText('1','24','Tempat Lahir');	
					
			$excel->WriteText('1','25','Tanggal Lahir');	
					
			$excel->WriteText('1','26','Nama Pasangan');	
					
			$excel->WriteText('1','27','Pekerjaan Pasangan');	
					
			$excel->WriteText('1','28','Agama');	
					
			$excel->WriteText('1','29','Jabatan Organisasi');	
					
			$excel->WriteText('1','30','Jabatan Akademik');	
					
			$excel->WriteText('1','31','Pendidikan');	
					
			$excel->WriteText('1','32','Lulusan PT Univ');	
					
			$excel->WriteText('1','33','Bidang Ilmu');	
	

					
			$col=2;
			
			$db_export = db_select("dosen");
			while($export = mysql_fetch_array($db_export)) {

				$excel->WriteText($col,'0',$export[nip]);
				$excel->WriteText($col,'1',$export[nama]);
				$excel->WriteText($col,'2',$export[alamat]);
				$excel->WriteText($col,'3',$export[kota]);
				$excel->WriteText($col,'4',$export[kd_jurusan]);
				$excel->WriteText($col,'5',$export[kd_fakultas]);
				$excel->WriteText($col,'6',$export[email]);
				$excel->WriteText($col,'7',$export[web]);
				$excel->WriteText($col,'8',$export[phone_hp]);
				$excel->WriteText($col,'9',$export[gelar_s1]);
				$excel->WriteText($col,'10',$export[gelar_s2]);
				$excel->WriteText($col,'11',$export[gelar_s3]);
				$excel->WriteText($col,'12',$export[gelar_gb]);
				$excel->WriteText($col,'13',$export[gelar_profesi]);
				$excel->WriteText($col,'14',$export[gol]);
				$excel->WriteText($col,'15',$export[pangkat]);
				$excel->WriteText($col,'16',$export[tmt_cpns]);
				$excel->WriteText($col,'17',$export[tmt_pns]);
				$excel->WriteText($col,'18',$export[tgl_keluar]);
				$excel->WriteText($col,'19',$export[karpeg]);
				$excel->WriteText($col,'20',$export[kelurahan]);
				$excel->WriteText($col,'21',$export[kecamatan]);
				$excel->WriteText($col,'22',$export[propinsi]);
				$excel->WriteText($col,'23',$export[kd_pos]);
				$excel->WriteText($col,'24',$export[tempat_lahir]);
				$excel->WriteText($col,'25',$export[tgl_lahir]);
				$excel->WriteText($col,'26',$export[nama_pasangan]);
				$excel->WriteText($col,'27',$export[pekerjaan_pasangan]);
				$excel->WriteText($col,'28',$export[agama]);
				$excel->WriteText($col,'29',$export[jabatan_organisasi]);
				$excel->WriteText($col,'30',$export[jabatan_akademik]);
				$excel->WriteText($col,'31',$export[pendidikan]);
				$excel->WriteText($col,'32',$export[lulusan_PT_univ]);
				$excel->WriteText($col,'33',$export[bidang_ilmu]);
				
					
				$col++;
			}
			$excel->SendFile();

?>
