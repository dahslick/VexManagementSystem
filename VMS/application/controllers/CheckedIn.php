<?php
    class CheckedIn extends CI_controller{
        public function index(){
            $data['title'] = 'CheckedIn';

            $data['requests'] = $this->request_model->get_CheckedIn();
            
            $this->load->view('templates/header');
            $this->load->view('checkedIn/index', $data);
            $this->load->view('templates/footer');
        }  
        }
