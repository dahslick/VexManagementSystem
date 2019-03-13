<?php
    class Requests extends CI_controller{
        public function index(){
            $data['title'] = 'Requests';

            $data['requests'] = $this->requests_model->get_requests();
            
            $this->load->view('templates/header');
            $this->load->view('requests/index', $data);
            $this->load->view('templates/footer');
        }  

        public function delete($id){
            $this->requests_model->delete_row($id);
            redirect('requests');
        }


        public function checkout($id){
            $this->requests_model->checkout($id);
            redirect('requests');
        }
        
        }
