<?php
	function blockakses()
	{
		// intansiasi ci nya
		$ci = get_instance();
		if ($ci->session->userdata('level') != 'Kepala Sekolah') {
			redirect('dashboard');
		}
	}

	function ceksession()
	{
		// intansiasi ci nya
		$ci = get_instance();
		if ($ci->session->userdata('logged_in') == NULL) {
			redirect(base_url());
		}
	}

	function formattanggal($data)
	{
		$list_bulan = array(
							'01' => 'Januari',
							'02' => 'Februari',
							'03' => 'Maret',
							'04' => 'April',
							'05' => 'Mei',
							'06' => 'Juni',
							'07' => 'Juli',
							'08' => 'Agustus',
							'09' => 'September',
							'10' => 'Oktober',
							'11' => 'November',
							'12' => 'Desember'
						);
		// Kuningan, 21 Januari 2002
		// $data_tanggal = "2020-12-31";
		$data_tanggal = $data;
		// pisahkan $tanggal1
		$tahun = substr($data_tanggal, 0, 4);
		$bulan = substr($data_tanggal, 5,2);
		$tanggal = substr($data_tanggal, 8, 2);
		return "$tanggal $list_bulan[$bulan] $tahun";
	}

?>