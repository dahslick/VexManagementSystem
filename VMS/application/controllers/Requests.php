<?php
    class Requests extends CI_controller{
        public function index(){
            $data['title'] = 'New Request';

            $data['requests'] = $this->request_model->get_requests();
            print_r($data['requests']);
            

            $this->load->view('templates/header');
            $this->load->view('requests/index', $data);
            $this->load->view('templates/footer');

        }
    }
