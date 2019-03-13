<?php
    class newRequest_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
        
        public function create_request(){
            $data = array(
                'OrgName' => $this->input->post('OrgName'),
                'OrgStreetAddr' => $this->input->post('OrgStreetAddr'),
                'OrgCity' => $this->input->post('OrgCity'),
                'OrgZip' => $this->input->post('OrgZip'),
                'OrgPhone' => $this->input->post('OrgPhone'),
                'OrgAdminEmail' => $this->input->post('OrgAdminEmail'),
                'ReqEmail' => $this->input->post('ReqEmail'),
                'ReqName' => $this->input->post('ReqName'),
                'ReqPhone' => $this->input->post('ReqPhone'),
                'ReqKits' => $this->input->post('ReqKits'),
            );
            return $this->db->insert('requests',$data);
        }
    }
