	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends CI_Controller {

		public function __construct(){
			parent::__construct();

			// load function in helper
			ceksession();

			$this->load->model('User_Model', 'user');
		}

		public function index()
		{
			$data['title'] = 'MTS PUI Kuningan';
			$data['sub_title'] = 'Data User';

	    	$data['user'] = $this->user->getUser();
	    	$data['user_level'] = $this->user->getLevel();

			$this->load->view('templates/header.php',$data);
			$this->load->view('templates/sidebar.php');
			$this->load->view('templates/topbar.php');
			$this->load->view('user/index.php',$data);
			$this->load->view('templates/footer.php');	

		}

		public function tambah()
		{
			$data = array(
		        'nama_user' => $this->input->post('nama_user'),
				'username'  => $this->input->post('username'),
				'password'  => $this->input->post('password'),
				'id_level'  => $this->input->post('level')
			);

			$this->db->insert('user', $data);
			redirect('user');
		}

		public function getupdate()
		{
			$id = $this->input->post('id');
			$data_user = $this->user->getUserById($id);

			echo json_encode($data_user);
		}

		public function update()
		{
			$data = array(
		        'nama_user' => $this->input->post('nama_user'),
				'username'  => $this->input->post('username'),
				'id_level'     => $this->input->post('level')
			);

			$this->db->where('id_user', $this->input->post('id_user'));
			$this->db->update('user', $data);
			redirect('user');
		}

		public function ubah_password()
		{
			$this->form_validation->set_rules('password1', 'Passsword', 'required|trim|min_length[8]',
			[
            	'min_length'=> 'Password minimal 8 karkter!'
        	]);

			$this->form_validation->set_rules('password2', 'Passsword', 'required|trim|min_length[8]|matches[password1]',
	            [	
	            	'matches'=> 'Password tidak sama!',
	            	'min_length'=> 'Password minimal 8 karkter!'
	        	]);

			if ($this ->form_validation->run() == false){
				$data['title'] = 'MTS PUI Kuningan';
				$data['sub_title'] = 'My Profile';
		  		$data['user'] = $this->db->get('user')->result_array();
				$this->load->view('templates/header.php',$data);
				$this->load->view('templates/sidebar.php');
				$this->load->view('templates/topbar.php');
				$this->load->view('user/ubah-password.php',$data);
				$this->load->view('templates/footer.php');
			}else{
				$data['password']=  md5($this->input->post('password2'));
				$this->db->where('id_user', $this->input->post('id-user'));
				$this->db->update('user', $data);

				redirect('logout');
			}
		}

		public function hapus($id)
		{
			$this->db->where('id_user', $id);
			$this->db->delete('user');
			redirect('user');									
		}

		public function hapus_semua()
		{
			 $this->user->hapusSemuaUser();
			redirect('user');
		}

	}