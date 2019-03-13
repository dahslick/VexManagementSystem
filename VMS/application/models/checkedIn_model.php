<?php
    class CheckedIn_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_checkedIn(){
            $query = $this->db->query('SELECT * FROM requests WHERE CheckedOut = 1 AND CheckedIn = 1 ORDER BY checkedInDate');
            return $query->result_array();
        }
    }
