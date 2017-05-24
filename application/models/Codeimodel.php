<?php

    class Codeimodel extends CI_Model{
        public function getRecords(){
            $query = $this->db->get('reunion');
            return $query->result();
        }

        public function getv(){
            $query = $this->db->get('users',25);
            return $query->result();
        }

    }
?>