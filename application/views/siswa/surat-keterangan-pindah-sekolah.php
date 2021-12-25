<?php
	$mpdf = new \Mpdf\Mpdf();
	$mpdf = new \Mpdf\Mpdf(['orientation' => 'P']);
	$mpdf = new \Mpdf\Mpdf(['paper' => 'A4']);
	ob_start();
?>

<!DOCTYPE html>
<html>
	<head>
	<style>
		h3 {
		    position: absolute;
		}
		h3	{
		    right: 220px;
		    top: 45px;
		    text-align: center;
		}
		.content{
			padding-top: 10px;
			text-align: justify;
		}
		.data-siswa{
			position: absolute;
			right: 275px;
			top: 310px;
		}
		.data-pemohon{
			position: absolute;
			right: 395px;
			top: 500px;
		}
		<title>Surat Keterangan Pindah Sekolah</title>
	</style>
	</head>
	<body>
		<img style="margin-left: 40px; padding-top : 0px; position: absolute;" class="img" width="60px" src="<?=base_url('assets/')?>surat-keterangan-lulus_files/image001.png"/>
		<h3>PEMERINTAH KABUPATEN KUNINGAN<br>
		DINAS PENDIDIKAN DAN KEBUDAYAAN<br>
		MTS PUI KUNINGAN</h3>

		<p style="text-align: center; padding: 0px; margin: 0px;">
			<span>Jl. Syekh Maulana Akbar No. 77 - Kec. Kuningan, Kab. Kuningan, Jawa Barat</span>
		</p>

		<img height=7 style="margin-top: px" src='<?=base_url()?>assets/surat-keterangan-lulus_files/image003.gif' v:shapes='_x0000_s1026'>

	    <br style='mso-ignore:vglayout' clear=ALL>

	    <p style="text-align: center; padding-bottom: 0px; margin-bottom: 0px; font-size: 13pt; color:black; font-weight: bold;">
	    	<u>SURAT KETERANGAN PINDAH SEKOLAH</u>
	    </p>

	    <p style="text-align: center; padding-top: 0px; margin-top: 0px; color:black;">
	    	Nomor : 422/<span style="mso-spacerun:yes">         </span>/MTS-PUI/2020
	    </p>

		<div class="content">
			<p>Yang bertanda tangan di bawah ini, Kepala MTS PUI Kuningan Kabupaten Kuningan, Propinsi Jawa Barat, menerangkan bahwa :</p>

	 		<p style="margin-left: 30px;">
				Nama                                           <br>

				Tempat Dan Tanggal Lahir                       <br>

				Jenis Kelamin			                       <br>

				Nama Orang Tua/Wali                            <br>

				Nomor Induk Siswa                              <br>

				Nomor Induk Siswa Nasional					   <br>

				Kelas										   <br>
			</p>

			<p>Sesuai Surat Permohonan Pindah oleh orang tua/wali murid </p>

	 		<p style="margin-left: 30px;">
				Nama                                           <br>

				Pekerjan 				                       <br>

				Alamat			       						   <br>
			</p>
	 
	 		
			<p>
				Telah mengajukan pindah ke <?=$sekolah_tujuan;?> dengan alasan permintaan orang tua			</p>

			<p>
				Bersama ini kami sertakan Buku Laporan Pendidikan (Rapor) yang bersangkutan dan surat Permohonan Pindah Sekolah dari orang tua/wali murid. 
			</p>
	<br>
	<br>

	 

	 

	                                                                                                            <p style="margin-left: 450px; text-align: left;">Kuningan, 	<?= date('d M yy');?><br>
	                                                                                                            Kepala Sekolah
	<br>
	<br>
	<br>
	<br>
	<br>
	                                                                                                            Nurdin M.H, M.Pd.<br>
	                                                                                                            NIP. 0267461487674</p>
		</div>

		<div class="data-siswa">
			: <?=$siswa['nama_siswa']; ?><br>

			: <?=$siswa['tempat_lahir']; ?>, <?=formattanggal($siswa['tanggal_lahir']);?><br>

			: <?=$siswa['nama_ibu'];?>h<br>

			: <?php if ($siswa['jk'] == 'L'){ echo'Laki-laki'; }else{echo 'Perempuan';}?><br>

			: <?=$siswa['nis']?><br>

			: <?=$siswa['nisn']?><br>

			: <?=$siswa['kelas'];?><br>
		</div>

		<div class="data-pemohon">
			: <?=$nama_orang_tua?><br>

			: <?=$pekerjaan_orang_tua?><br>

			: <?=$alamat?><br>
		</div>

	</body>
</html>


<?php
	$html = ob_get_contents();
	ob_end_clean();
	// write $html ka mpdf
	$mpdf->WriteHTML(($html));
	// hasilna
	$mpdf->Output("Surat Keterangan Lulus - MTS PUI Kuningan.pdf",\Mpdf\Output\Destination::INLINE);
?>