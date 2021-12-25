<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Kelas_Model extends CI_Model
    {
        public function getKelasById($id)
        {
            $query = "SELECT * FROM `kelas` WHERE id_kelas = '$id' ";
            return $this->db->query($query)->row();
        }

        public function hapusSemuaKelas()
        {
            $query = "DELETE FROM `kelas`";
            return $this->db->query($query);
        }
    }