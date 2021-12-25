<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Siswa extends CI_Controller {

		public function __construct(){
			parent::__construct();

			// load function in helper
			ceksession();
			// load model
			require APPPATH.'/libraries/vendor/autoload.php';
			$this->load->model('Siswa_model', 'siswa');
		}

		public function index()
		{

			$data['tahunajaran'] = array('2019/2020','2020/2021','2021/2022','2022/2023','2023/2024','2024/2025','2025/2026');

			$data ['list_pekerjaan_ayah'] = array('Buruh','Karyawan Swasta','Pedagang','Petani','Perangkat Desa','Aparatur Sipil Negara','PNS','TNI/Polri','Wiraswasta');
			$data ['list_pekerjaan_ibu'] = array('Buruh','Ibu Rumah Tangga','Karyawan Swasta','Pedagang','Petani','Perangkat Desa','Aparatur Sipil Negara','PNS','TNI/Polri','Wiraswasta');
			
			$data['title'] = 'MTS PUI Kuningan';
			$data['sub_title'] = 'Data Siswa';

		    // panggil method dari siswa model
		  	$data['siswa'] = $this->siswa->getAllSiswa();
		  	$data ['kelas'] = $this->db->get('kelas')->result_array();
		  	$data ['status'] = $this->db->get('status')->result_array();

			$this->load->view('templates/siswa-header.php',$data);
			$this->load->view('templates/sidebar.php');
			$this->load->view('templates/topbar.php');
			$this->load->view('siswa/index.php',$data);
			$this->load->view('templates/siswa-footer.php');	

		}

		public function excel()
		{
			$data['title'] = 'MTS PUI Kuningan';
			$data['sub_title'] = 'Data Siswa';
	        // panggil method dari siswa model
	    	$data['siswa'] = $this->siswa->getAllSiswa();
			$this->load->view('siswa/excel.php',$data);
		}

		public function tambah()
		{
			// pekerjaan ayah
			if ($this->input->post('pekerjaan_ayah') == 'Lainnya...') {
				$pekerjaan_ayah = $this->input->post('pekerjaan_ayah_lainnya');
			}else{
				$pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
			}

			// pekerjaan ibu
			if ($this->input->post('pekerjaan_ibu') == 'Lainnya...') {
				$pekerjaan_ibu = $this->input->post('pekerjaan_ibu_lainnya');
			}else{
				$pekerjaan_ibu = $this->input->post('pekerjaan_ibu');
			}

			$data = array(
				'nisn' 			 => $this->input->post('nisn'),
		        'nis' 			 => $this->input->post('nis'),
		        'angkatan' 		 => $this->input->post('angkatan'),
				'nama_siswa' 	 => $this->input->post('nama_siswa'),
				'jk' 			 => $this->input->post('jk'),
				'tempat_lahir' 	 => $this->input->post('tempat_lahir'),
				'tanggal_lahir'  => $this->input->post('tanggal_lahir'),
				'no_hp'  		 => $this->input->post('no_hp'),
				'alamat'  		 => $this->input->post('alamat'),
    			'asal_sekolah'   => $this->input->post('asal_sekolah'),
    			'nama_ayah'  	 => $this->input->post('nama_ayah'),
    			'nama_ibu'  	 => $this->input->post('nama_ibu'),
    			'pekerjaan_ayah' => $pekerjaan_ayah,
    			'pekerjaan_ibu'  => $pekerjaan_ibu,
				'id_kelas'		 => $this->input->post('kelas'),
				'id_status'  	 => 1,
			);
			
			$this->db->insert('siswa', $data);
			redirect('siswa');
		}

		public function getupdate()
		{
			$nis = $this->input->post('nis');

			// panggil method dari model
			$data_siswa = $this->siswa->getUpdateSiswa($nis);

			echo json_encode($data_siswa);
		}

		public function update()
		{
			// pekerjaan ayah
			if ($this->input->post('pekerjaan_ayah') == 'Lainnya...') {
				$pekerjaan_ayah = $this->input->post('pekerjaan_ayah_lainnya');
			}else{
				$pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
			}

			// pekerjaan ibu
			if ($this->input->post('pekerjaan_ibu') == 'Lainnya...') {
				$pekerjaan_ibu = $this->input->post('pekerjaan_ibu_lainnya');
			}else{
				$pekerjaan_ibu = $this->input->post('pekerjaan_ibu');
			}

			$data = array(
				'nisn' 			 => $this->input->post('nisn'),
		        'nis' 			 => $this->input->post('nis'),
		        'angkatan' 		 => $this->input->post('angkatan'),
				'nama_siswa' 	 => $this->input->post('nama_siswa'),
				'jk' 			 => $this->input->post('jk'),
				'tempat_lahir' 	 => $this->input->post('tempat_lahir'),
				'tanggal_lahir'  => $this->input->post('tanggal_lahir'),
				'no_hp'  		 => $this->input->post('no_hp'),
				'alamat'  		 => $this->input->post('alamat'),
    			'asal_sekolah'   => $this->input->post('asal_sekolah'),
    			'nama_ayah'  	 => $this->input->post('nama_ayah'),
    			'nama_ibu'  	 => $this->input->post('nama_ibu'),
    			'pekerjaan_ayah' => $pekerjaan_ayah,
    			'pekerjaan_ibu'  => $pekerjaan_ibu,
				'id_kelas'		 => $this->input->post('kelas'),
				'id_status'  	 => $this->input->post('status')
			);

			$this->db->where('nis', $this->input->post('nis'));
			$this->db->update('siswa', $data);

			redirect('siswa');
		}

		public function keluar($stats)
		{
			$data['status'] =  2;
			$this->db->where('nis', $stats);
			$this->db->update('siswa', $data);

			redirect('siswa');
		}

		public function hapus($nis)
		{
			$this->db->where('nis', $nis);
			$this->db->delete('siswa');
			// DELETE FROM mytable
			// WHERE id = $id
			redirect('siswa');								
		}

		public function hapus_semua()
		{
			$this->siswa->hapusAllSiswa();
			// DELETE FROM mytable
			redirect('siswa');
		}

		public function surat_kelulusan_seting()
		{
			$query = $this->db->query("SELECT `nama_siswa` FROM `siswa`");
       		if ( $query->num_rows() < 1){
       			
       		}
			var_dump($_POST);
		}

		public function kelulusan($param1='0', $param2='0')
		{
			$angkatan="$param1/$param2";
			if ($angkatan !='0/0') {

				$data['title'] = 'MTS PUI Kuningan';

				$data['sub_title'] = 'Kelulusan Siswa Angkatan Ke '.$angkatan.' ';

		        // panggil method dari siswa model
		    	$data['siswa'] = $this->siswa->getAllDataSiswa($angkatan);

		    	$data['siswa_lulus'] = $this->siswa->getAllSiswaLulus($angkatan);

		    	$data['siswa_tidak_lulus'] = $this->siswa->getAllSiswaTidakLulus($angkatan);

		    	$data['jumlah_siswa'] = $this->siswa->JumlahSiswaKelulusan($angkatan);

		    	$data['jml_siswa_lulus'] = $this->siswa->getJmlSiswaLulus($angkatan);

		    	$data['jml_siswa_tidak_lulus'] = $this->siswa->getJmlSiswaTidakLulus($angkatan);

		    	$data ['kelas'] = $this->db->get('kelas')->result_array();
		    

				$this->load->view('templates/siswa-header.php',$data);
				$this->load->view('templates/sidebar.php');
				$this->load->view('templates/topbar.php');
				$this->load->view('siswa/kelulusan-byangkatan.php',$data);
				$this->load->view('templates/siswa-footer.php');
			}else{
				$data['title'] = 'MTS PUI Kuningan';
				$data['sub_title'] = 'Kelulusan Siswa';
				
				$query = "SELECT DISTINCT(angkatan) FROM siswa";
				$data['angkatan'] = $this->db->query($query)->result_array();	    	
				$this->load->view('templates/siswa-header.php',$data);
				$this->load->view('templates/sidebar.php');
				$this->load->view('templates/topbar.php');
				$this->load->view('siswa/kelulusan.php',$data);
				$this->load->view('templates/siswa-footer.php');
			}
		}

		public function lulus_covid($param1, $param2)
		{
			if ($param1 == 'lulus') {
				$query = "UPDATE siswa SET id_status=3 WHERE nis=$param2";
				$this->db->query($query);
				$data['is_lulus'] = 'lulus';
				$data['siswa'] = $this->siswa->getSiswaByNis($param2);	
				$this->load->view('siswa/surat-keterangan-kelulusan-covid19.php',$data);
			}else{
				$query = "UPDATE siswa SET id_status=4 WHERE nis=$param2";
		       	$this->db->query($query);
		       	$data['is_lulus'] = 'tidak lulus';
		       	$data['siswa'] = $this->siswa->getSiswaByNis($param2);	
				$this->load->view('siswa/surat-keterangan-kelulusan-covid19.php',$data);
			}
		}

		public function lulus($param1, $param2)
		{
			if ($param1 == 'lulus') {
				$query = "UPDATE siswa SET id_status=3 WHERE nis=$param2";
				$this->db->query($query);
				$data['is_lulus'] = 'lulus';
				$data['siswa'] = $this->siswa->getSiswaByNis($param2);	
				$this->load->view('siswa/surat-keterangan-kelulusan.php',$data);
			}else{
				$query = "UPDATE siswa SET id_status=4 WHERE nis=$param2";
		       	$this->db->query($query);
		       	$data['is_lulus'] = 'tidak lulus';
		       	$data['siswa'] = $this->siswa->getSiswaByNis($param2);	
				$this->load->view('siswa/surat-keterangan-kelulusan.php',$data);
			}
		}


		public function surat($param1=1, $param2=1)
		{
			if ($param1 == 'siswa-aktif') {
				// $query = "UPDATE siswa SET id_status=3 WHERE nis=$param2";
				// $this->db->query($query);
				$data['siswa'] = $this->siswa->getSiswaByNis($param2);	
				$this->load->view('siswa/surat-keterangan-siswa-aktif.php',$data);
			}else{
				$nis = $this->input->post('nis');
				// $query = "UPDATE siswa SET id_status=4 WHERE nis=$param2";
		  		// $this->db->query($query);
		  		$data['sekolah_tujuan'] = $this->input->post('sekolah_tujuan');
		  		$data['nama_orang_tua'] = $this->input->post('nama_orang_tua');
		  		$data['pekerjaan_orang_tua'] = $this->input->post('pekerjaan_orang_tua');
		  		$data['alamat'] = $this->input->post('alamat');

		       	$data['siswa'] = $this->siswa->getSiswaByNis($nis);	
				$this->load->view('siswa/surat-keterangan-pindah-sekolah.php',$data);
			}
		}

	}