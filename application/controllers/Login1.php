<?php
    class Login1 extends CI_Controller{
        public function index(){
            $data = [];
            $this->load->view('login1/index', $data);
        }
        public function daftar(){
            $this->load->model('users_model', 'users');

            $_username = $this->input->post('username');
            $_password = $this->input->post('password');
            
            $row = $this->users->login1($_username,$_password);
            if(isset($row)){
                $this->session->set_userdata('USERNAME', $row->username);
                $this->session->set_userdata('ROLE', $row->role);
                $this->session->set_userdata('USERS', $row);

                // redirect('/jenis_faskes/index');
                redirect('faskes');
                // redirect(base_url() . 'index.php/nilai_rating');
            }
            else{
                redirect(base_url().'index.php/login1?status=f');
            }
        }
        public function logout(){
            $this->session->unset_userdata('USERNAME');
            $this->session->unset_userdata('ROLE');
            $this->session->unset_userdata('USERS');
            redirect(base_url() . 'index.php/home');
         }
    }
?>