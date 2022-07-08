<?php
    class Users extends CI_Controller{
        public function index(){
            $this->load->model('users_model');
            $users = $this->users_model->getAll();
            $data['users'] = $users;

            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('users/index', $data);
            $this->load->view('layouts/footer');
        }
        
    }
?>   