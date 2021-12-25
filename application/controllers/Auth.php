<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Auth extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$this->_ceksession();

			$data['title'] = 'MTS PUI Kuningan';
			$data['sub_title'] = 'Dashboard';
			
			$this->load->view('templates/login-header.php',$data);
			$this->load->view('auth/index.php',$data);
			$this->load->view('templates/login-footer.php');
		}

		private function _ceksession()
		{
			if ($this->session->userdata('logged_in') != NULL) {
				redirect('dashboard');
			}
		}

		public function login()
		{
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			// panggil function _login
			$this->_login($username,$password);
		}

		private function _login($username,$password)
		{
			$query = "SELECT username FROM user WHERE username='$username'";
			if ($this->db->query($query)->row_array() != NULL){
				$query = "SELECT * FROM user JOIN user_level
											 ON `user_level`.`id_level`=`user`.`id_level`
											 WHERE password='$password'
											 AND username='$username'";
				$hasil = $this->db->query($query)->row_array();
				if ($hasil != NULL){

						$data = array(
					        'is_login'  => 1
						);
						$this->db->where('id_user', $hasil['id_user']);
						$this->db->update('user', $data);

						$userdata = array(
							'id'         => $hasil['id_user'],
					        'nama_user'  => $hasil['nama_user'],
					        'username'   => $hasil['username'],
					        'level'      => $hasil['id_level'],
					        'logged_in'  => TRUE
						);
						$this->session->set_userdata($userdata);
						redirect('dashboard');
				}else{
					$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">Password salah!</div>');
					redirect('login');
				}
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Username tidak terdaftar!</div>');
				redirect('login');
			}
		}

		public function logout()
		{
			$data = array(
		        'is_login'  => 0
			);
			$this->db->where('id_user', $this->session->userdata('id'));
			$this->db->update('user', $data);
			
			$this->session->unset_userdata('id');
			$this->session->unset_userdata('nama_user');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('level');
			$this->session->unset_userdata('logged_in');

			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil logout...</div>');
			redirect(base_url());
		}
	}
