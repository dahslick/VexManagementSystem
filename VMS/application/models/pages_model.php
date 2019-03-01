<?php
    class Pages_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function countOpenRequests(){
            $query = $this->db->query('SELECT * FROM requests WHERE CheckedOut IS NULL');
            return $query->num_rows();                // print_r($query->result());
            }
        
        public function countCheckedOut(){
            $query = $this->db->query('SELECT * FROM requests WHERE CheckedOut = 1');
            return $query->num_rows();
        }
     
        
    }
