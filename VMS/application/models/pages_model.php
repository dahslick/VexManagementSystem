<?php
    class Pages_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function countOpenRequests(){
            $query = $this->db->query('SELECT * FROM requests WHERE CheckedOut IS NULL');
            return $query->num_rows(); 
            }
        
        public function countCheckedOut(){
            $query = $this->db->query('SELECT * FROM requests WHERE CheckedOut = 1 AND CheckedIn IS NULL');
            return $query->num_rows();
        }
     
        
    }
