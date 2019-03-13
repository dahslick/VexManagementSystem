<?php
    class CheckedOut extends CI_controller{
        public function index(){
            $data['title'] = 'CheckedOut';

            $data['requests'] = $this->checkedOut_model->get_CheckedOut();
            
            $this->load->view('templates/header');
            $this->load->view('checkedOut/index', $data);
            $this->load->view('templates/footer');
        }  

        public function undo($id){
            $this->checkedOut_model->undo_row($id);
            redirect('checkedOut');
        }

        
        public function checkin($id){
            $this->checkedOut_model->checkin($id);
            redirect('checkedOut');
        }

        


        
        }
