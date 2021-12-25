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
			right: 220px;
			top: 310px;
		}
		<title>Surat Keterangan Siswa</title>
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
	    	<u>SURAT KETERANGAN SISWA</u>
	    </p>

	    <p style="text-align: center; padding-top: 0px; margin-top: 0px; color:black;">
	    	Nomor : 422/<span style="mso-spacerun:yes">         </span>/MTS-PUI/2020
	    </p>

		<div class="content">
			<p>Yang bertanda tangan di bawah ini, Kepala MTS PUI Kuningan Kabupaten Kuningan Propinsi Jawa Barat menerangkan bahwa :</p>

	 		<p style="margin-left: 30px;">
				Nama                                           <br>

				Tempat Dan Tanggal Lahir                       <br>

				Nama Orang Tua/Wali                            <br>

				Nomor Induk Siswa                              <br>

				Nomor Induk Siswa Nasional					   <br>
			</p>
	 
	 		
			<p>
				Benar bahwa nama yang tersebut diatas terdaftar sebagi peserta didik di MTS Pui Kuningan Pada Tahun Ajaran <?=$siswa['angkatan']; ?>.
			</p>


			<!-- <?php if ($is_lulus == 'lulus') { ?> 
				<p style="font-size: 18px; font-family: ; font-weight: bold; text-align: center; border: 1px;">
					<i>LULUS / <s>TIDAK LULUS</s></i>
				</p>
			<?php } else { ?>
				<p style="font-size: 18px; font-family: ; font-weight: bold; text-align: center; border: 1px;">
					<i><s>LULUS</s> / TIDAK LULUS</i>
				</p>
			<?php } ?> -->

			<p>
				Demikian Surat Keterangan ini kami buat dengan sebenarya untuk dapat di proses sebgaimana mestinya.
			</p>
	<br>
	<br>

	 

	 

	                                                                                                            <p style="margin-left: 450px; text-align: left;">Kuningan, <?= date('d M yy');?><br>
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

			: <?=$siswa['nis']?><br>

			: <?=$siswa['nisn']?><br>
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