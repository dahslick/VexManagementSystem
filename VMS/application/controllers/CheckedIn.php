<?php
    class CheckedIn extends CI_controller{
        public function index(){
            $data['title'] = 'CheckedIn';

            $data['requests'] = $this->checkedIn_model->get_checkedIn();
            
            $this->load->view('templates/header');
            $this->load->view('checkedIn/index', $data);
            $this->load->view('templates/footer');
        }  

        public function undo($id){
            $this->checkedIn_model->undo_row($id);
            redirect('checkedIn');
        }
        }
