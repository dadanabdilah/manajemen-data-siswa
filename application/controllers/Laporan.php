<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Laporan extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			
			ceksession();
			//blockakses();

			require APPPATH.'/libraries/vendor/autoload.php';
			
			$this->load->model('Laporan_Model','laporan');
		}

		public function index($param1=0,$param2=0)
		{
			if ($param1== '0' && $param2 == '0') {
				$data['title'] = 'MTS PUI Kuningan';
				$data['sub_title'] = 'Laporan';
				$data['angkatan'] = $this->laporan->getAngkatan();
				$data['kelas'] = $this->laporan->getAllKelas();

				$this->load->view('templates/header.php',$data);
				$this->load->view('templates/sidebar.php');
				$this->load->view('templates/topbar.php');
				$this->load->view('laporan/index.php',$data);
				$this->load->view('templates/laporan-footer.php');
			}else{
				// $data['angkatan'] = $angkatan;
				$data['title'] = 'MTS PUI Kuningan';
				$data['sub_title'] = 'Laporan';

				$this->load->view('templates/header.php',$data);
				$this->load->view('templates/sidebar.php');
				$this->load->view('templates/topbar.php');
				$this->load->view('laporan/siswa.php',$data);
				$this->load->view('templates/laporan-footer.php');
			}
		}

		public function pdf($param1=0, $param2=0, $param3=0)
		{
			if ($param1 !=0 AND $param2 !=0 AND $param3 !=0) {
				$angkatan = "$param1/$param2";
				$data['siswa'] = $this->laporan->getSiswaAngkatanKelas($angkatan, $param3);
				$this->load->view('laporan/siswa-allpdf.php',$data);
			}elseif($param1 !=0 AND $param2 !=0){
				$angkatan = "$param1/$param2";
				$data['siswa'] = $this->laporan->getSiswaAngkatan($angkatan);	
				$this->load->view('laporan/siswa-allpdf.php',$data);
			}else{
				echo "Param is 0";
			}
		}

		public function excel($param1=0, $param2=0)
		{
			if ($param1 !=0 AND $param2 !=0) {
				$data['siswa'] = $this->laporan->getSiswaAngkatanKelas($param1, $param2);
				//echo "$param1 not null $param2";
				$this->load->view('laporan/siswa-excel.php',$data);
			}elseif($param1 !=0){
				$data['siswa'] = $this->laporan->getSiswaAngkatan($param1);	
				$this->load->view('laporan/siswa-excel.php',$data);
			}else{
				echo "Param is 0";
			}
		}

		public function siswa_pindah()
		{
			$data['siswa'] = $this->laporan->getSiswaPindah();
			$this->load->view('laporan/siswa-yang-pindah.php',$data);
		}

		public function siswa_lulus()
		{
			$data['siswa'] = $this->laporan->getSiswaPindah();
			$this->load->view('laporan/siswa-yang-lulus.php',$data);
		}

		public function data_user()
		{
			$data['user'] = $this->laporan->getDataUser();
			//print_r($data);
			$this->load->view('laporan/data-user.php',$data);
		}

		public function getdata()
		{
			$data = $this->laporan->getAllKelas();

			echo json_encode($data);
		}

	}
