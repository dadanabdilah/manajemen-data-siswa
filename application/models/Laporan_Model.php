<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Laporan_Model extends CI_Model
    {
        public function getAngkatan()
        {
            $query = "SELECT DISTINCT(angkatan) FROM siswa";

            // mengembalikan data hasil dari query
            // dalam bentuk array
            return $this->db->query($query)->result_array();
        }

        public function getAllKelas()
        {
            $query = "SELECT * FROM kelas";

            // mengembalikan data hasil dari query
            // dalam bentuk array
            return $this->db->query($query)->result_array();
        }

        public function getSiswaAngkatanKelas($data1,$data2)
        {
            $query = "SELECT `siswa`.*, `kelas`.`kelas`
                      FROM `siswa` JOIN `kelas`
                      ON `siswa`.`id_kelas` = `kelas`.`id_kelas`
                      WHERE `siswa`.`angkatan`='$data1' AND `siswa`.`id_kelas`='$data2' ";

            // mengembalikan data hasil dari query
            // dalam bentuk array
            return $this->db->query($query)->result_array();
        }

        public function getSiswaAngkatan($data)
        {
            $query = "SELECT `siswa`.*, `kelas`.`kelas`
                      FROM `siswa` JOIN `kelas`
                      ON `siswa`.`id_kelas` = `kelas`.`id_kelas`
                      WHERE `siswa`.`angkatan`='$data' ";

            // mengembalikan data hasil dari query
            // dalam bentuk array
            return $this->db->query($query)->result_array();
        }

        public function getSiswaPindah()
        {
            $query = "SELECT `siswa`.*, `kelas`.`kelas`, `status`.`status`
                      FROM `siswa`
                      JOIN `kelas`
                      ON `siswa`.`id_kelas` = `kelas`.`id_kelas`
                      JOIN `status`
                      ON `siswa`.`id_status` = `status`.`id_status`
                      WHERE `siswa`.`id_status`=5";

            // mengembalikan data hasil dari query
            // dalam bentuk array
            return $this->db->query($query)->result_array();
        }


         public function getSiswaLulus()
        {
            $query = "SELECT `siswa`.*, `kelas`.`kelas`, `status`.`status`
                      FROM `siswa`
                      JOIN `kelas`
                      ON `siswa`.`id_kelas` = `kelas`.`id_kelas`
                      JOIN `status`
                      ON `siswa`.`id_status` = `status`.`id_status`
                      WHERE `siswa`.`id_status`=3";

            // mengembalikan data hasil dari query
            // dalam bentuk array
            return $this->db->query($query)->result_array();
        }

        public function getDataUser()
        {
            $query = "SELECT * FROM user";

            // mengembalikan data hasil dari query
            // dalam bentuk array
            return $this->db->query($query)->result_array();
        }
    }