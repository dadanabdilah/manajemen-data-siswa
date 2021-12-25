<?php
	$mpdf = new \Mpdf\Mpdf();
	$mpdf = new \Mpdf\Mpdf(['orientation' => 'P']);
	$html ='
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>Data Siswa MTS PUI</title>
				<link href="'.base_url().'assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
			</head>
			<body>
			<h1 class="text-center">DATA USER</h1>
            <h3 class="text-center">Tahun Ajaran 2020/2021</h3>
	            <table class="table table-bordered">
	                <thead class="text-center">
	                    <tr>
	                        <th class="text-center">No</th>
		                    <th class="text-center" scope="col">Nama User</th>
		                    <th class="text-center" scope="col">Username</th>
	                    </tr>
	                </thead>
	                <tbody>';
	                $i=1;
	                foreach ($user as $data) {
	                	$html .= '
	                			<tr>
	                                <td class="text-center">'.$i++.'</td>
	                                <td class="text-center">'.$data["nama_user"].'</td>
	                                <td class="text-center">'.$data["username"].'</td>
	                            </tr>';
	                }
	                
	     $html .= '</tbody>
	            </table>
			</body>
			</html>';

$mpdf->WriteHTML('');
$mpdf->WriteHTML($html);
$mpdf->Output('PPDB',\Mpdf\Output\Destination::INLINE);