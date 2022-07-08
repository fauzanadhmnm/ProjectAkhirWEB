<?php
    class Tampil extends CI_Controller{
        public function users(){
            $this->load->model('users_model');
            $users = $this->users_model->getAll();
            $data['users'] = $users;

            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('users/index', $data);
            $this->load->view('layouts/footer');
        }
        public function kecamatan(){
            $this->load->model('kecamatan_model');
            $kecamatan = $this->kecamatan_model->getAll();
            $data['kecamatan'] = $kecamatan;

            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('tampil/kecamatan', $data);
            $this->load->view('layouts/footer');
        }
        public function jenis(){
            $this->load->model('jenis_model');
            $jenis = $this->jenis_model->getAll();
            $data['jenis'] = $jenis;

            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('tampil/jenis', $data);
            $this->load->view('layouts/footer');
        }
        public function faskes(){
            
            $this->load->model('faskes_model');
            $faskes = $this->faskes_model->getAll();
            $data['faskes'] = $faskes;
                
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('tampil/faskes', $data);
            $this->load->view('layouts/footer');
        }
    }
?>  