<?php
    class CheckedOut_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_checkedOut(){
            $query = $this->db->query('SELECT * FROM requests WHERE CheckedOut = 1 AND CheckedIn IS NULL ORDER BY CheckedOutDate desc');
            return $query->result_array();
        }

        public function undo_row($id){

            $this->db->set('CheckedOut', NULL);
            $this->db->set('CheckedOutDate', NULL);
            $this->db->where('id', $id);
            $this->db->update('requests');
            return true;
        }

      public function checkin($id){
            $updateData = array(
                'CheckedIn' => '1',
                'CheckedInDate' => date("y-m-d")
            );

            $this->db->where('id', $id);
            $this->db->update('requests', $updateData);
            return true;
        }
        


    }
