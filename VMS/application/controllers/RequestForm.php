<?php
    class RequestForm extends CI_controller{
        public function index(){
            $data['title'] = 'Create Request';
            
            $this->form_validation->set_rules('OrgName', 'OrgName', 'required');
            $this->form_validation->set_rules('OrgStreetAddr', 'OrgStreetAddr', 'required');
            $this->form_validation->set_rules('OrgCity', 'OrgCity', 'required');
            $this->form_validation->set_rules('OrgZip', 'OrgZip', 'required');
            $this->form_validation->set_rules('OrgPhone', 'OrgPhone', 'required');
            $this->form_validation->set_rules('OrgAdminEmail', 'OrgAdminEmail', 'required');
            $this->form_validation->set_rules('ReqName', 'ReqName', 'required');
            $this->form_validation->set_rules('ReqEmail', 'ReqEmail', 'required');
            $this->form_validation->set_rules('ReqPhone', 'ReqPhone', 'required');
            $this->form_validation->set_rules('ReqKits', 'ReqKits', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('requestForm/index', $data);
                $this->load->view('templates/footer');
            } else{
                $this->request_model->create_request();
                
                redirect('requestForm');
            }

            


        }
  
        }
