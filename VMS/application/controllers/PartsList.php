<?php
    class PartsList extends CI_controller{
        public function index(){
            $data['title'] = 'PartsList';

            $data['parts'] = $this->partsList_model->get_parts();
            
            $this->load->view('templates/header');
            $this->load->view('partsList/index', $data);
            $this->load->view('templates/footer');
        }  
        }
