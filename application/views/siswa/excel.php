<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aplikasi Rekap Data PPDB SMKN 2 KNG</title>
	<link href="<? =base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet"/>
</head>
<body>
    <?php
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Data Siswa MTS PUI Kuningan.xls");
    ?>
    <table class="table table-bordered">
        <thead class="text-center">
            <tr>
                <th class="text-center" scope="col">No</th>
                <th class="text-center" scope="col">Timestamp</th>
                <th class="text-center" scope="col">Nama Lengkap</th>
                <th class="text-center" scope="col">Tempat Lahir</th>
                <th class="text-center" scope="col">Tanggal Lahir</th>
                <th class="text-center" scope="col">Jenis Kelamin</th>
                <th class="text-center" scope="col">No Hp</th>
                <th class="text-center" scope="col">Asal Sekolah</th>
                <th class="text-center" scope="col">Pilihan Ke Satu</th>
                <th class="text-center" scope="col">Pilihan Ke Dua</th>
            </tr>
        </thead>
        <tbody>
        	<?php
                $i=1;
                foreach ($siswa as $data) {
                	echo'<tr>
                        <td class="text-center">'.$i++.'</td>
                        <td class="text-center">'.$data["nis"].'</td>
                        <td class="text-center">'.$data["nama_siswa"].'</td>
                        <td class="text-center">'.$data["jk"].'</td>
                        <td class="text-center">'.$data["tempat_lahir"].'</td>
                        <td class="text-center">'.$data["tanggal_lahir"].'</td>
                        <td class="text-center">'.$data["no_hp"].'</td>
                        <td class="text-center">'.$data["kelas"].'</td>
                    </tr>';
                }
            ?>
		</tbody>
    </table>
</body>
</html>