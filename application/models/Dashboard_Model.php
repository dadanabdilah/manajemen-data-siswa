<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Dashboard_Model extends CI_Model
    {
        public function getJumlahSiswa()
        {
            $query = $this->db->query("SELECT `nama_siswa` FROM `siswa`");
       		return $query->num_rows();
        }

        public function getJmlSiswaBaru()
        {
            $tahun = date('y');
            $query = $this->db->query("SELECT nama_siswa
                                        FROM siswa
                                        WHERE angkatan=$tahun AND id_status=1");
       		return $query->num_rows();
        }

        public function getJmlSiswaKeluar()
        {
            $query = $this->db->query("SELECT nama_siswa
                                        FROM siswa
                                        WHERE id_status = 2");
       		return $query->num_rows();
        }

        public function getJumlahUser()
        {
            $query = $this->db->query("SELECT nama_user FROM user");
       		return $query->num_rows();
        }

         public function getJmlUserOnline()
        {
            $query = $this->db->query("SELECT is_login FROM user WHERE is_login = 1");
       		return $query->num_rows();
        }
    }