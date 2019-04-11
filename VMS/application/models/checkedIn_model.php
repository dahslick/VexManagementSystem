<?php
    class CheckedIn_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_checkedIn(){
            $query = $this->db->query('SELECT * FROM requests WHERE CheckedOut = 1 AND CheckedIn = 1 ORDER BY checkedInDate DESC');
            return $query->result_array();
        }

        public function undo_row($id){

            $this->db->set('CheckedIn', NULL);
            $this->db->set('CheckedInDate', NULL);
            $this->db->where('id', $id);
            $this->db->update('requests');
            return true;
        }
    }
