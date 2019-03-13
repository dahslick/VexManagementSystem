<?php
    class Requests_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_requests(){
            $query = $this->db->query('SELECT * FROM requests WHERE CheckedOut IS NULL ORDER BY id');
            return $query->result_array();
        }

        public function delete_row($id){
            $this->db->where('id', $id);
            $this->db->delete('requests');
            return true;
        }

      public function checkout($id){
            $updateData = array(
                'CheckedOut' => '1',
                'CheckedOutDate' => date("y-m-d")
            );

            $this->db->where('id', $id);
            $this->db->update('requests', $updateData);
            return true;
        }

    }
