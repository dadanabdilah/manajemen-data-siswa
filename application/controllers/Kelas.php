<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Kelas extends CI_Controller {

		public function __construct(){
			parent::__construct();
			
			// load function in helper
			ceksession();
			// load model
			$this->load->model('Kelas_Model', 'kelas');
		}

		public function index()
		{
			$data['title'] = 'MTS PUI Kuningan';
			$data['sub_title'] = 'Data Kelas';

	        // panggil method dari kelas model
	    	$data ['kelas'] = $this->db->get('kelas')->result_array();

			$this->load->view('templates/header.php',$data);
			$this->load->view('templates/sidebar.php');
			$this->load->view('templates/topbar.php');
			$this->load->view('kelas/index.php',$data);
			$this->load->view('templates/footer.php');	

		}

		public function tambah()
		{
			$data = array(
		        'kelas' => $this->input->post('kelas'),
				'wali_kelas'  => $this->input->post('wali_kelas')
			);

			$this->db->insert('kelas', $data);
			redirect('kelas');
		}

		public function getupdate()
		{
			$id = $this->input->post('id');

			// panggil method dari model
			$data_kelas = $this->kelas->getKelasById($id);

			echo json_encode($data_kelas);
		}

		public function update()
		{
			$data = array(
				'id_kelas' => $this->input->post('id_kelas'),
		        'kelas' => $this->input->post('kelas'),
				'wali_kelas'  => $this->input->post('wali_kelas')
			);

			$this->db->where('id_kelas', $this->input->post('id_kelas'));
			$this->db->update('kelas', $data);

			redirect('kelas');
		}

		public function hapus()
		{
			$id = $_GET['id'];
			$this->db->where('id_kelas', $id);
			$this->db->delete('kelas');
			// DELETE FROM mytable
			// WHERE id = $id
			redirect('kelas');									
		}

		public function hapus_semua()
		{
			$this->kelas->hapusSemuaKelas();
			redirect('kelas');
		}

	}