<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Siswa_Model extends CI_Model
    {
        public function getAllSiswa()
        {
       		$query = "SELECT `siswa`.*, `kelas`.`kelas`, `status`.`status`
                      FROM `siswa`
                      JOIN `kelas`
                      ON `siswa`.`id_kelas` = `kelas`.`id_kelas`
                      JOIN `status`
                      ON `siswa`.`id_status` = `status`.`id_status`";

            // mengembalikan data hasil dari query
            // dalam bentuk array
			     return $this->db->query($query)->result_array();
        }


        // public function getSiswaById($id)
        // {
        //     $query = "SELECT * FROM `data_siswa` WHERE id=$id";
        //     return $this->db->query($query)->result_array();

        // }


        public function getSiswaByNis($nis)
        {
          $query = "SELECT `siswa`.*, `kelas`.`kelas`
                    FROM `siswa`
                    JOIN `kelas`
                    ON `siswa`.`id_kelas` = `kelas`.`id_kelas` 
                    WHERE `nis` = '$nis' ";

          // mengembalikan data hasil dari query
          // dalam bentuk array
          return $this->db->query($query)->row_array();
        }

        public function getUpdateSiswa($nis){
        	$query = "SELECT `siswa`.*, `kelas`.`kelas`, `status`.`status`
					  FROM `siswa`
            JOIN `kelas`
					  ON `siswa`.`id_kelas` = `kelas`.`id_kelas`
            JOIN `status`
            ON `siswa`.`id_status` = `status`.`id_status` 
					  WHERE `nis` = '$nis' ";

            // mengembalikan data hasil dari query
            // dalam bentuk array
			return $this->db->query($query)->row_array();
        }

        public function hapusAllSiswa(){
            $query = "DELETE FROM siswa";
            return $this->db->query($query);
        }

        public function getAllDataSiswa($angkatan)
        {
            $query = "SELECT `siswa`.*, `kelas`.`kelas`
                      FROM `siswa` JOIN `kelas`
                      ON `siswa`.`id_kelas` = `kelas`.`id_kelas`
                      WHERE id_status = 1 AND angkatan = '$angkatan' ";
            // mengembalikan data hasil dari query
            // dalam bentuk array
            return $this->db->query($query)->result_array();
        }

        public function getAllSiswaLulus($angkatan)
        {
            $query = "SELECT `siswa`.*, `kelas`.`kelas`
                      FROM `siswa` JOIN `kelas`
                      ON `siswa`.`id_kelas` = `kelas`.`id_kelas`
                      WHERE id_status = '3' AND angkatan = '$angkatan' ";
            // mengembalikan data hasil dari query
            // dalam bentuk array
            return $this->db->query($query)->result_array();
        }

        public function getAllSiswaTidakLulus($angkatan)
        {
            $query = "SELECT `siswa`.*, `kelas`.`kelas`
                      FROM `siswa` JOIN `kelas`
                      ON `siswa`.`id_kelas` = `kelas`.`id_kelas`
                      WHERE id_status = '4' AND angkatan = '$angkatan' ";
            // mengembalikan data hasil dari query
            // dalam bentuk array
            return $this->db->query($query)->result_array();
        }

        public function JumlahSiswaKelulusan($angkatan)
        {
            $query = "SELECT `siswa`.*, `kelas`.`kelas`
                      FROM `siswa` JOIN `kelas`
                      ON `siswa`.`id_kelas` = `kelas`.`id_kelas`
                      WHERE angkatan = '$angkatan' ";
            // mengembalikan data hasil dari query
            // dalam bentuk array
            return $this->db->query($query)->num_rows();
        }

        public function getJmlSiswaLulus($angkatan)
        {
            $query = "SELECT nama_siswa
                        FROM siswa
                        WHERE id_status = '3'
                        AND angkatan = '$angkatan' ";
            return $this->db->query($query)->num_rows();
        }

        public function getJmlSiswaTidakLulus($angkatan)
        {
            $query = "SELECT nama_siswa FROM siswa
                            WHERE id_status = '4'
                            AND angkatan = '$angkatan' ";

            // mengembalikan data hasil dari query
            // dalam bentuk array
            return $this->db->query($query)->num_rows();
        }
    }