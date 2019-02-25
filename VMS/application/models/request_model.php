<?php
    class Request_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_requests(){
            $query = $this->db->get('requests');
            return $query->result_array();
        }
    }
