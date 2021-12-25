<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MTS PUI Kuningan</title>
	<link href="asset/css/bootstrap.css" rel="stylesheet"/>
</head>
<body>
    <?php
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Data Siswa MTS PUI Kuningan.xls");
    ?>
    <table class="table table-bordered">
        <thead class="text-center">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center" scope="col">NIS</th>
                <th class="text-center" scope="col">Angkatan</th>
                <th class="text-center" scope="col">Nama Siswa</th>
                <th class="text-center" scope="col">Jenis Kelamin</th>
                <th class="text-center" scope="col">Tempat Tanggal Lahir</th>
                <th class="text-center" scope="col">No Hp</th>
                <th class="text-center" scope="col">Kelas</th>
            </tr>
        </thead>
        <tbody>
        	<?php
                $i=1;
                foreach ($siswa as $data) {
                	echo'<tr>
                        <td class="text-center">'.$i++.'</td>
                        <td class="text-center">'.$data["nis"].'</td>
                        <td class="text-center">'.$data["angkatan"].'</td>
                        <td class="text-center">'.$data["nama_siswa"].'</td>
                        <td class="text-center">'.$data["jk"].'</td>
                        <td class="text-center">'.$data["tempat_lahir"].', '.$data["tanggal_lahir"].'</td>
                        <td class="text-center">'.$data["no_hp"].'</td>
                        <td class="text-center">'.$data["kelas"].'</td>
                    </tr>';
                }
            ?>
		</tbody>
    </table>
</body>
</html>