<?php
    class CheckedOut extends CI_controller{
        public function index(){
            $data['title'] = 'CheckedOut';

            $data['requests'] = $this->request_model->get_CheckedOut();
            
            $this->load->view('templates/header');
            $this->load->view('checkedOut/index', $data);
            $this->load->view('templates/footer');
        }  
        }
