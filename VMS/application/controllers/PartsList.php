<?php
    class PartsList extends CI_controller{
        public function index(){
            $data['title'] = 'PartsList';

            $this->form_validation->set_rules('name', 'name', 'required');
            $this->form_validation->set_rules('spc', 'spc', 'required');
            $this->form_validation->set_rules('amountInOrder', 'amountInOrder', 'required');
            $this->form_validation->set_rules('cost', 'cost', 'required');
            

            if($this->form_validation->run() === FALSE){
                $data['parts'] = $this->partsList_model->get_parts();
                $this->load->view('templates/header');
                $this->load->view('partsList/index', $data);
                $this->load->view('templates/footer');
            }else{
                $this->partsList_model->add_part();
                $data['parts'] = $this->partsList_model->get_parts();
                redirect('partsList');
            }
        }
    }
            
            

