<?php
    class partsList_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_parts(){
            $query =  $this->db->query('Select id, name, cost, spc, amountInOrder, count(spc) as totalCount FROM parts GROUP BY spc');
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

        public function delete_one($spc){
            $this->db->where('spc',$spc);
            $this->db->limit(1);
            $this->db->delete('parts');
            return true;
        }

        public function increment_one($id){
            $query = $this->db->query('INSERT INTO parts(name, cost, amountInOrder, spc) SELECT name, cost, amountInOrder, spc FROM `parts` WHERE id = ' . $id);
            return true;
         }
}
