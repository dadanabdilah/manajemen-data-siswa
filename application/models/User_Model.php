<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class User_Model extends CI_Model
    {
        public function getUser()
        {
            $query = "SELECT * FROM `user`
                        JOIN user_level
                        ON `user_level`.`id_level` = `user`.`id_level`";
            return $this->db->query($query)->result_array();
        }

        public function getLevel()
        {
            $query = "SELECT * FROM `user_level`";
            return $this->db->query($query)->result_array();
        }

        public function getUserById($id)
        {
            $query = "SELECT * FROM `user` JOIN user_level
                                            ON `user_level`.`id_level`=`user`.`id_level`
                                            WHERE `user`.`id_user`='$id' ";
            return $this->db->query($query)->row();
        }

        public function hapusSemuaUser()
        {
            $query = "DELETE FROM `user` WHERE id_level != 1";
            return $this->db->query($query);
        }
    }