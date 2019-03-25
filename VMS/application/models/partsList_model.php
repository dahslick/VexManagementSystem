<?php
    class partsList_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_parts(){
            $query = $this->db->query('SELECT * FROM parts');
            return $query->result_array();
        }

        public function add_part(){
            $data = array(
                'spc' => $this->input->post('spc'),
                'name' => $this->input->post('name'),
                'cost' => $this->input->post('cost'),
                'amountInOrder' => $this->input->post('amountInOrder')
            );
            
            return $this->db->insert('parts',$data);
        }
    }
